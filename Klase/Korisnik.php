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
       // header("Location: greska.php");
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

//     if (empty($ime) ||
//     empty($prezime) ||
//     empty($mejl) ||
//     empty($sifra)) {
//     echo '<script language:"javascript">alert("Niste uneli sve podatke!")</script>';
//     // '<script>return false</script>';
//     //header('Location: register.php');
//    }
// else{
   
   // $validacija = "<script type='text/javascript'>validate('&ime', '&prezime', '&mejl', '&sifra')</script>";
//    $validacija= "<script>document.write(validate('$ime', '$prezime', '$mejl', '$sifra'))</script>";
//     echo $validacija;
    
    $statement = "INSERT INTO korisnici VALUES(NULL, '$ime', '$prezime', '$telefon','$mejl', '$sifra')";
    $query = mysqli_query(connection(), $statement);
    //dodati alert sa uspesna registracija
    if($query){
  //  echo "<script type='text/javascript'>alert('Uspesna registracija!')</script>";
    header('Location: login.view.php');
    }else{
    //header('Location: greska.php');
  //  echo '<script type="text/javascript">alert("Neuspesna registracija!")</script>';
  //  echo 'GRESKA';
    }
}

}



?>

<!-- <script>function validate(ime, prezime, mejl, sifra) {
    if(ime=="" && prezime=="" && mejl=="" && sifra==""){
        alert("Neispravno uneti podaci!");
        // var validacija=0;
        return false;
    }else{
        // validacija=1;
        return true;
    }
}</script> -->


<!-- <script>
    function poruka() {
       alert("Unesite podatke ispravno!"); 
    }
</script>  -->