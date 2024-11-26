<?php
/* 
    -> collection of heterogenous data type
    -> data is stored as a comma separated value and key value pairs
    -> e.g. key => value
    -> last_index = size - 1
    -> user defined data type
 */

/* two ways of defining an array */
$info = [
    "Thames International College",
    "sot@thamescollege.edu.np",
    "Baneshwor",
    9999999999
];

// echo $info;

/* echo "<pre>";
print_r($info);
echo "</pre>"; */

/* echo "<pre>";
var_dump($info);
echo "</pre>"; */

/* $infos = array(
    "Thames International College",
    "sot@thamescollege.edu.np",
    "Baneshwor",
    9999999999
);


echo "<pre>";
print_r($infos);
echo "</pre>"; */

/* 
   Array can be classified into two parts:

    a) Single Dimensional 
    b) Multi Dimensional

    Types of array in php:
    a) Indexive Array - Arrays with a numeric index
    b) Asscociative Array - Arrays with named keys
    c) Multi-dimensional Array - Arrays containing one or more arrays

*/

/* Indexive array or Numeric arrays */

/* $data = array(
    "Ram Nepali",
    "ram.nepali@gmail.com",
    "Nepal",
    988888888888
); */



/* Associative array */

$person = array(
    'name' => "Ram Nepali",
    'email' => "ram.nepali@gmail.com",
    'address' => "Nepal",
    'phone' => 988888888888,
);

// echo $person['email'];

/* echo "<pre>";
print_r($person);
echo "</pre>"; */

// echo $person['email'];

