<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
//Creating Array for JSON response
$response = array();

// Include data base connect class
$filepath = realpath(dirname(__FILE__));
require_once($filepath . "/db_connect.php");
// Connecting to database 

// Fire SQL query to get all data from weather
$result = mysqli_query($conn, "SELECT *FROM weatherksa") or die(mysqli_error($e));

// Check for succesfull execution of query and no results found
if (mysqli_num_rows($result) > 0) {

    // Storing the returned array in response
    $response["weather"] = array();

    // While loop to store all the returned response in variable
    while ($row = mysqli_fetch_array($result)) {
        // temperoary user array
        $weather = array();
        $weather["id"] = $row["id"];
        $weather["temp"] = $row["temp"];
        $weather["hum"] = $row["hum"];
        $weather["moisture"] = $row["moisture"];
        $weather["current"] = $row["current"];
        $weather["voltage"] = $row["voltage"];
        $weather["power"] = $row["power"];

        // Push all the items 
        array_push($response["weather"], $weather);
    }
    // On success
    $response["success"] = 1;

    // Show JSON response
    echo json_encode($response);
} else {
    // If no data is found
    $response["success"] = 0;
    $response["message"] = "No data found";

    // Show JSON response
    echo json_encode($response);
}
