<?php 
require_once 'config.php';


function connection(){
    $conn = mysqli_connect(HOST, USER, PASSWORD, DATABASE) or die('Error');
    return $conn;
}

?>