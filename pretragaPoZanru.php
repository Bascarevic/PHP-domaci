<?php 
require_once 'config.php';

 if(isset($_POST['genre'])){
 $zanr = $_POST['genre'];
 $connect = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
 $query = "SELECT * FROM filmovi WHERE zanr = '$zanr' ";
 $result = mysqli_query($connect, $query);

 $data = array();
 while($row = mysqli_fetch_assoc($result))
 {
 array_push($data, $row);
 }

 //var_dump($data); dobijam doabr odg iz baze
 $velicina = sizeof($data);
 
echo json_encode($data, JSON_UNESCAPED_UNICODE); //ovo je zbog č, š... , JSON_UNESCAPED_UNICODE
//echo($velicina);
//exit();
}
 ?>