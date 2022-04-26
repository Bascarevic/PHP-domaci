<?php 

require_once 'kontroler.php';

if(isset($_SESSION['id'])){
    $id_korisnika=$_SESSION['id'];
}

//echo $id_korisnika;

$filmovi=$rezervacija->getAllFromUser($id_korisnika);

//var_dump($id_filmovi);
$id_filmovi=array();
for($i=0;$i<sizeof($filmovi);$i++){
  // var_dump($id_filmovi);
   array_push($id_filmovi, $filmovi[$i]);
  //$ids+=$id_filmovi[$i];
}

$ids=array();
foreach($id_filmovi as $id){
    array_push($ids, $id['id_film']);
}

//var_dump($ids);//valjda je uspelo

require_once 'rez.view.php';

//var_dump($id_filmovi[0]);

//$film = $id_filmovi[0];

//echo $film['id_film'];

?>