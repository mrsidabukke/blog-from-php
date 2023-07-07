<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'blog';

$link = mysqli_connect($host,$user,$pass,$db); //or die(mysqli_error());

if(!$link){
    die('ada error'.mysqli_connect_error());
}

//213497999
?>