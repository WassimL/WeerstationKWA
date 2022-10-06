<?php

if(isset($_GET["temperature"])) {
   $temperature = $_GET["temperature"]; // get temperature value from HTTP GET
   $dateAndTime = $_GET["dateAndTime"];
   $humidity = $_GET["humidity"];
   $airpressure = $_GET["airpressure"];

   $servername = "databases.aii.avans.nl";
   $username = "sdvillan";
   $password = "Ab12345";
   $database_name = "sdvillan_db2";

   // Create MySQL connection fom PHP to MySQL server
   $connection = new mysqli($servername, $username, $password, $database_name);
   // Check connection
   if ($connection->connect_error) {
      die("MySQL connection failed: " . $connection->connect_error);
   }

   $sql = "INSERT INTO weather (dateAndTime, temperature, humidity, airpressure) VALUES ($dateAndTime, $temperature, $humidity, $airpressure)";

   if ($connection->query($sql) === TRUE) {
      echo "New record created successfully";
   } else {
      echo "Error: " . $sql . " => " . $connection->error;
   }

   $connection->close();
} else {
   echo "temperature is not set in the HTTP request";
}

//  ('2100-01-19 03:14:07.999999', '20', '80', '17.5')
// https://145.49.73.19/insert_temp.php?dateAndTime=2000-01-19 03:14:07.999999&temperature=21&humidity=90&airpressure=17.5
?>