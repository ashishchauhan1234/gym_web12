<?php
echo "Welcome to the stage of connect db file";

$name = $_POST['Name'];
$email = $_POST['Email'];
$age = $_POST['Age'];
$phone = $_POST['Phone'];
$city = $_POST['City'];

echo $name;
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "fitness_db";

// connection object

$con = new mysqli($servername, $username, $password, $database);
if($con->connect_error){
    die("Connection failed :: ". $con->connect_error);
}else{
    $query_stmt = $con->prepare("insert into membership_data(name, email, age, phone, city) 
    values(?, ?, ?, ?, ?)");
    $query_stmt->bind_param("ssiis",$name, $email, $age, $phone, $city);
    $execval = $query_stmt->execute();
    echo $execval;
    $query_stmt->close();
    $con->close();
}
header("location:./index.html");

?>