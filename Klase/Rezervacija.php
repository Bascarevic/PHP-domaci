<?php 
require_once 'konekcija.php';
class Rezervacija{

    function getAllFromUser($id_korisnika){
        $statement = "SELECT id_film FROM rezervacije WHERE id_korisnik='$id_korisnika'";

        $query = mysqli_query(connection(), $statement);
        $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
       
        return $result;
    }

   public function newReservation($id_film){
        $id_korisnik=$_SESSION['id'];
        echo $id_korisnik;
        echo $id_film;
       // $id_film=$_POST['id_film'];
        $statement="INSERT INTO rezervacije VALUES('$id_korisnik', '$id_film')";

        $query = mysqli_query(connection(), $statement);
        //dodati alert sa uspesna registracija
        
        if($query){
       // header('Location: login.view.php');
       //alert("Uspesno!");
       return true;
        }else{
        //header('Location: greska.php');
       // echo 'GRESKA';
      // alert("Neuspelo!");
       return false;
        }
        
    }
}

?>