<?php

$host="localhost";
$usernema="root";
$password="";
$database="notebookapp";

$connection=mysqli_connect($host,$usernema,$password,$database);

if(mysqli_connect_errno()>0){
    die("error: ".mysqli_connect_errno());
}

?>