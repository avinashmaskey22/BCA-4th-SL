<?php

$full_name = $_POST['full_name'];


$conn = mysqli_connect('localhost', 'root', '', 'ajax-example', 3307) or die("Connection Falied.");

$sql = "INSERT INTO student (full_name) VALUES ('$full_name')";

if(mysqli_query($conn, $sql)){
    echo 1;
}else{
    echo 0;
}