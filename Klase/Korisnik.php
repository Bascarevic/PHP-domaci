<?php 
//require 'config.php';
require_once 'konekcija.php';

class Korisnik{
/*
    public $konekcija;
    
    public function __construct($db){
        $this->konekcija=$db;
    }
*/
function logUser(){
    $mejl = $_POST['email'];
    $sifra = $_POST['password'];

    $statement = "SELECT * FROM korisnici WHERE Email='$mejl' AND Sifra ='$sifra'";
    
    $query = mysqli_query(connection(), $statement);
    $result = mysqli_fetch_assoc($query);
  // $result=$konekcija->query($statement);
   //  return $result;
   //  var_dump($result);
    if($result){
        $_SESSION['id'] = $result['id'];
        $_SESSION['name'] = $result['Ime'];
        header('Location: index.php');
    }else{
       //  echo 'GRESKA';
       echo '<script type="text/javascript">alert("Unesite ispravne podatke!")</script>';
    }
}

function registerUser(){
    $ime = $_POST['name'];
    $prezime = $_POST['surname'];
    $telefon = $_POST['phone'];
    $mejl = $_POST['email'];
    $sifra = $_POST['password'];
    
    $statement = "INSERT INTO korisnici VALUES(NULL, '$ime', '$prezime', '$telefon','$mejl', '$sifra')";
    $query = mysqli_query(connection(), $statement);
    if($query){
    echo "<script type='text/javascript'>alert('Uspesna registracija!')</script>";
    header('Location: login.view.php');
    }else{
     echo 'GRESKA';
    }
}

}



?>
