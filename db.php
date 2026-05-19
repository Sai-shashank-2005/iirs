<?php

$conn = new mysqli(
    "localhost",
    "root",
    "",
    "intranet_search"
);

if($conn->connect_error){
    die("Database Connection Failed");
}

?>