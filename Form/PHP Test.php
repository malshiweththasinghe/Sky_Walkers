<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$comment = $_POST['comment'];

$servername = "localhost";
$username = "root";
$password = "";
$db = "skywalkers";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}

$sql = "insert into r_data(f_name,l_name,email,comment)
values('$fname','$lname','$email','$comment')";

if ($conn->query($sql) === TRUE){
    echo "Added : ".$fname.",".$lname.",".email.",".comment;
} else{
    echo "Error : ".$sql."<br>".$conn->error;
}

$conn-close();

?>