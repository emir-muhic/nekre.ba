<?php

$db['host'] = "localhost";
$db['username'] = "nekreba_emir";
$db['password'] = "l0L%v-#!Pdp~";
$db['name'] = "nekreba_nekretnine";

foreach($db as $item=>$key){
    define(strtoupper($item), $key);
}

$conn = mysqli_connect(HOST, USERNAME, PASSWORD, NAME);

if(!$conn){
    die("Database error " . mysqli_error($conn));
}