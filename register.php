<?php 
require 'kontroler.php';

if(isset($_POST['registerBtn'])){
    $korisnik->registerUser();
}

require 'register.view.php';
?>