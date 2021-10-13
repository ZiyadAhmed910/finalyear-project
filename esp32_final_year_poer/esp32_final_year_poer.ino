#include "EmonLib.h"
#include <WiFi.h>
#include <WiFiClient.h>
#include<Wire.h>
#include<Adafruit_GFX.h>
#include<Adafruit_SSD1306.h>
#include<DHT.h>
#include <ArduinoJson.h>

#define RESET LED_BUILTIN
#define DHTPIN 4
#define DHTTYPE DHT11

DHT dht(DHTPIN, DHTTYPE);

const char* ssid     = "ssid";
const char* password = "pass";
const char* host = "iotplatform.ziyadahmed.me";

EnergyMonitor emon1;
#define currCalibration 0.52

int count = 0;
String url2;

Adafruit_SSD1306 display(128, 64, &Wire, -1);

const int AirValue = 790;   //you need to replace this value with Value_1
const int WaterValue = 390;  //you need to replace this value with Value_2
const int SensorPin = 32;
int soilMoistureValue = 0;
int soilmoisturepercent=0;
int relaypin = 16;

WiFiClient client;

void setup() {
  Serial.begin(115200); // open serial port, set the baud rate to 9600 bps
  display.begin(SSD1306_SWITCHCAPVCC, 0x3C); //initialize with the I2C addr 0x3C (128x64)
  display.clearDisplay();
  pinMode(relaypin, OUTPUT);
 
  dht.begin();
  
  WiFi.begin(ssid, password);
 
  while (WiFi.status() != WL_CONNECTED)
  {
    delay(500);
    Serial.print(".");
  }
    Serial.println("");
    Serial.println("WiFi connected");
    Serial.println("IP address: ");
    Serial.println(WiFi.localIP());
    Serial.print("Netmask: ");
    Serial.println(WiFi.subnetMask());
    Serial.print("Gateway: ");
    Serial.println(WiFi.gatewayIP());
    delay(4000);
    emon1.current(12, 111.1);             // Current: input pin, calibration.
    
}  

void loop() 
{
  String motordata="on";
  float h = dht.readHumidity();
  float t = dht.readTemperature();
  if (isnan(h) || isnan(t)) {
    Serial.println("Failed to read from DHT sensor!");
    return;
  }else{
    Serial.print("Humidity: ");
    Serial.println(h);
    Serial.print("Temperature: ");
    Serial.println(t);
  }
 soilMoistureValue = analogRead(SensorPin);  //put Sensor insert into soil
  Serial.println(soilMoistureValue);
  
  soilmoisturepercent = map(soilMoistureValue, AirValue, WaterValue, 0, 100);

   double Irms = emon1.calcIrms(1480);  // Calculate Irms only
   double Prms = Irms*230.0;
   Serial.print("Apparant Power");           // Apparent power
    Serial.print(Prms); 
  Serial.print(" ");
  Serial.print("Current");           // Apparent current
  Serial.println(Irms);             // Irms
if(soilmoisturepercent > 100)
{
  Serial.println("100 %"); 
  display.setCursor(0,0);  //oled display
  display.setTextSize(2);
  display.setTextColor(WHITE);
  display.print("Soil RH:");
  display.setTextSize(1);
  display.print("100");
  display.println(" %");
  display.setCursor(0,20);  //oled display
  display.setTextSize(2);
  display.print("Air RH:");
  display.setTextSize(1);
  display.print(h);
  display.println(" %");
  display.setCursor(0,40);  //oled display
  display.setTextSize(2);
  display.print("Temp:");
  display.setTextSize(1);
  display.print(t);
  display.println(" C");
  display.display();
  
  delay(250);
  display.clearDisplay();
}
 
 
else if(soilmoisturepercent <0)
{
  Serial.println("0 %");
  
  display.setCursor(0,0);  //oled display
  display.setTextSize(2);
  display.setTextColor(WHITE);
  display.print("Soil RH:");
  display.setTextSize(1);
  display.print("0");
  display.println(" %");
  display.setCursor(0,20);  //oled display
  display.setTextSize(2);
  display.print("Air RH:");
  display.setTextSize(1);
  display.print(h);
  display.println(" %");
  display.setCursor(0,40);  //oled display
  display.setTextSize(2);
  display.print("Temp:");
  display.setTextSize(1);
  display.print(t);
  display.println(" C");
  display.display();
 
  delay(250);
  display.clearDisplay();
}
 
 
else if(soilmoisturepercent >=0 && soilmoisturepercent <= 100)
{
  Serial.print(soilmoisturepercent);
  Serial.println("%");
  
  display.setCursor(0,0);  //oled display
  display.setTextSize(2);
  display.setTextColor(WHITE);
  display.print("Soil RH:");
  display.setTextSize(1);
  display.print(soilmoisturepercent);
  display.println(" %");
  display.setCursor(0,20);  //oled display
  display.setTextSize(2);
  display.print("Air RH:");
  display.setTextSize(1);
  display.print(h);
  display.println(" %");
  display.setCursor(0,40);  //oled display
  display.setTextSize(2);
  display.print("Temp:");
  display.setTextSize(1);
  display.print(t);
  display.println(" C");
  display.display();
 
  delay(250);
  display.clearDisplay();
}
 
  if(soilmoisturepercent >=0 && soilmoisturepercent <= 30)
  {
    digitalWrite(relaypin, LOW);
    motordata="on";
    Serial.println("Motor is ON");
  }
  else if (soilmoisturepercent >30 && soilmoisturepercent <= 100)
  {
    digitalWrite(relaypin, HIGH);
    motordata="off";
    Serial.println("Motor is OFF");
  }

//insert data into new weatherdata table
    WiFiClient client;
    const int httpPort = 80;
    if (!client.connect(host, httpPort)) {
    Serial.println("connection failed");
    return;
  }
  String url2 = "/api/weather/insertdataksa.php?temp=" + String(t) + "&hum="+ String(h)+"&moisture="+ String(soilmoisturepercent) +"&current="+String(Irms)+"&power="+String(Prms);
  Serial.print("Requesting URL: ");
  Serial.println(url2);
  
  client.print(String("GET ") + url2 + " HTTP/1.1\r\n" +
               "Host: " + host + "\r\n" + 
               "Connection: close\r\n\r\n");
  delay(500);
  
  while(client.available()){
    String line = client.readStringUntil('\r');
    Serial.print(line);
  }
  
  Serial.println();
  Serial.println("closing connection");
  delay(3000);

//update motor status in motorstatus table
    if (!client.connect(host, httpPort)) {
    Serial.println("connection failed");
    return;
  }
  String url3 = "/api/weather/updatemotor.php?id=1&status="+ motordata;
  Serial.print("Requesting URL: ");
  Serial.println(url3);
  
  client.print(String("GET ") + url3 + " HTTP/1.1\r\n" +
               "Host: " + host + "\r\n" + 
               "Connection: close\r\n\r\n");
  delay(500);
  
  while(client.available()){
    String line = client.readStringUntil('\r');
    Serial.print(line);
  }
  
  Serial.println();
  Serial.println("closing connection");
  delay(3000);
 
}
  

  
