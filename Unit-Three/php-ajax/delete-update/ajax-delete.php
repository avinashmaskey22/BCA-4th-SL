<?php

$student_id = $_POST['id'];


$conn = mysqli_connect('localhost', 'root', '', 'ajax-example', 3307) or die("Connection Falied.");

$sql = "DELETE FROM student WHERE id = {$student_id}";

if(mysqli_query($conn, $sql)){
    echo 1;
}else{
    echo 0;
}