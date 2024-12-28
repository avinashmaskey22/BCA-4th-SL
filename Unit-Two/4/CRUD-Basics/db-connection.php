<?php

//database connection
$conn = mysqli_connect("localhost", "root", "", "thames_bca", 3307); //this function returns an mysqli Object

//to see how the object is returned debug this 
/* echo "<pre>";
print_r($conn);
echo "</pre>";
exit; */

/* if ($conn) {
    echo "Database connected successfully.";
} else {
    echo mysqli_connect_error($conn); //this function prints db errors
} */