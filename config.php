


<?php

//creation of table and database

session_start();


$conn = mysqli_connect("localhost", "root","","mywebfolio");



/*$query = "CREATE TABLE `client` (
    `id` INT NOT NULL,
    `fname` VARCHAR(40),
    `lname` VARCHAR(30),
    `username` VARCHAR(40)  NOT NULL, -- Fixed column name here
    `email` varchar(80),
    `password` varchar(80),
    `date` DATE
   )";

$result = mysqli_query($conn, $query);

if ($result) {
    echo "Table created successfully";
} else {
    echo "Table creation failed: " . mysqli_error($conn);
}
*/



?>