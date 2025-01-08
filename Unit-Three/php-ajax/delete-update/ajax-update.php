<?php

$student_id = $_POST['id'];
$new_name = $_POST['full_name'];

$conn = mysqli_connect('localhost', 'root', '', 'ajax-example', 3307) or die("Connection Failed.");

$sql = "UPDATE student SET full_name = '{$new_name}' WHERE id = {$student_id}";

if (mysqli_query($conn, $sql)) {
    echo 1;
} else {
    echo 0;
}
