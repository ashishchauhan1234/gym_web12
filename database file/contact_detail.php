<?php
echo "Welcome to the stage of connect db file";

$name = $_POST['Name'];
$email = $_POST['Email'];
$message = $_POST['Message'];

echo $name, $message;
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
    $query_stmt = $con->prepare("insert into contact_data(name, email, message) 
    values(?, ?, ?)");
    $query_stmt->bind_param("sss",$name, $email, $message);
    $execval = $query_stmt->execute();
    echo $execval;
    echo "Login Successfully...";
    $query_stmt->close();
    $con->close();
}

?>