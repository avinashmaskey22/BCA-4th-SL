<?php

$conn = mysqli_connect("localhost", "root", "", "thames_bca", 3307);

$sql = "UPDATE students
        SET
        full_name = 'Sulav Bhai'
        WHERE sid = 13";

$query = mysqli_query($conn, $sql);

if($query){
    echo "UPdated Successfully.";
}else{
    echo mysqli_error($conn);
}