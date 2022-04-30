<?php
echo "Welcome to the stage of connect db file"

$user_name = $_POST['uname'];
$pswd = $_POST['psw'];


// Database connection
$servername = "localhopst";
$username = "root";
$password = "";

// connection object

$con = new mysqli($servername, $username, $password);
if($con->connect_error){
    die("Connection failed :: ", $con->connect_error);
}else{
    $query_stmt = $con.prepare("insert into login_table(user_name, password)
    values(?,?)");
    $query_stmt->bind_param("ss",$user_name, $pswd);
    $query_stmt->execute();
    echo "Login Successfully...";
    $query_stmt->close();
    $con->close();
}

?>