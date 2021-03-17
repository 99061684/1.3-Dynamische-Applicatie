<?php
//deze functie maakt een javascript console log 
function console_log($output, $with_script_tags = true) {
  $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . ');';
  if ($with_script_tags) {
    $js_code = '<script>' . $js_code . '</script>';
  }
  echo $js_code;
}

$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "character_database";
$charset = "utf8mb4";

// maak een connection
try {
  $dsn = "mysql:host=".$servername.";dbname=".$dbname.";charset=". $charset;
  $conn = new PDO($dsn, $username, $password);

  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $output = "Connected successfully";
  console_log($output); //console.log output

  //return connection
  return $conn;

} catch(PDOException $e) {
  $output = "Connection failed: " . $e->getMessage();
  console_log($output); //console.log output
}





