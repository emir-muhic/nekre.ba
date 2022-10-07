<?php

$db['host'] = "localhost";
$db['username'] = "root";
$db['password'] = "";
$db['name'] = "nekretnine";

foreach($db as $item=>$key){
    define(strtoupper($item), $key);
}

$conn = mysqli_connect(HOST, USERNAME, PASSWORD, NAME);

if(!$conn){
    die("Database error " . mysqli_error($conn));
}