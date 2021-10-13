<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
//Creating Array for JSON response
$response = array();

// Check if we got the field from the user
if (isset($_GET['temp']) && isset($_GET['hum']) && isset($_GET['moisture']) && isset($_GET['current']) && isset($_GET['voltage']) && isset($_GET['power'])) {

    $temp = $_GET['temp'];
    $hum = $_GET['hum'];
    $moisture = $_GET['moisture'];
    $current = $_GET['current'];
    $voltage = $_GET['voltage'];
    $power = $_GET['power'];
    // Include data base connect class
    $filepath = realpath(dirname(__FILE__));
    require_once($filepath . "/db_connect.php");

    // Connecting to database 

    // Fire SQL query to insert data in weather
    $result = mysqli_query($conn, "INSERT INTO weatherksa(temp,hum,moisture,current,voltage,power) VALUES('$temp','$hum','$moisture','$current','$voltage','$power')");

    // Check for succesfull execution of query
    if ($result) {
        // successfully inserted 
        $response["success"] = 1;
        $response["message"] = "Data Recorded successfully.";

        // Show JSON response
        echo json_encode($response);
    } else {
        // Failed to insert data in database
        $response["success"] = 0;
        $response["message"] = "Something has been wrong";

        // Show JSON response
        echo json_encode($response);
    }
} else {
    // If required parameter is missing
    $response["success"] = 0;
    $response["message"] = "Parameter(s) are missing. Please check the request";

    // Show JSON response
    echo json_encode($response);
}
