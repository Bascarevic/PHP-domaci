<?php 

require_once 'konekcija.php';

class Film{
    /*
    $id;
    $naziv;
    $opis;
    $zanr;
    */

    function getAll(){
        $statement = "SELECT * FROM filmovi";
    
        $query = mysqli_query(connection(), $statement);
        $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
       
        return $result;
    }

    function getMovie($id){
        $statement = "SELECT * from filmovi WHERE id='$id'";
    
        $query = mysqli_query(connection(), $statement);
        $result = mysqli_fetch_assoc($query); //razmisli o ovome
       // var_dump($result);
        return $result;
    }
}

?>