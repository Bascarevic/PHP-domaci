<?php 
require 'kontroler.php';

//KAKO?
//$get = $_GET['get'];
/*
if(isset($_SESSION['id']) and isset($_GET['get'])){
    header('Location:rez.view.php');
}else{
    header('Location:index.php');
}
*/
/*
if(isset($_SESSION['id'])){
    if($_GET['get']){
        header('Location:rez.view.php');
    }
}
*/
if(isset($_SESSION['id'])){
    header('Location:index.php');
}

if(isset($_POST['loginBtn'])){
    $korisnik->logUser();
}

require 'login.view.php';
?>