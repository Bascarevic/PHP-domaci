<?php 
require_once 'kontroler.php';
if(isset($_SESSION['id'])){
    header('Location: repertoar.php');
}else{
    header('Location: login.php');
}

?>