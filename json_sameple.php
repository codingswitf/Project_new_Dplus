<?php
$servername = "sql6.freesqldatabase.com";
$username = "sql6117117";
$password = "jBdzlc1xTi";
$dbname = "sql6117117";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// $email = $_POST["email"];
// $First_name = $_POST["First_name"];
// $last_name = $_POST["last_name"];
// $address = $_POST["address"];
// $city = $_POST["city"];
// $postal_code = $_POST["postal_code"];
// $phone = $_POST["phone"];
$email = "email";
$First_name = "First_name";
$last_name = "last_name";
$address = "address";
$city = "city";
$postal_code = "postal_code";
$phone = "phone";
$sql = "INSERT INTO  `sql6117117`.`register_insuren` (`email` ,`First_name` ,`last_name` ,`address` ,`city` ,`postal_code` ,`phone`) VALUES ('+$email+',  '+$First_name+',  '+$last_name+',  '+$address+',  '+$city+',  '+$postal_cod+',  '+$phone+');"

$conn->query("SET names utf8");
$result = $conn->query($sql);
$conn->close();
?>	
