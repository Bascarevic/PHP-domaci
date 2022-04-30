<?php 
require_once 'kontroler.php';

$id_film = $_GET['id'];

$fil = $film->getMovie($id_film);

require_once 'ukloniRez.view.php';

if(isset($_POST['id_film'])){
    $id_film=$_POST['id_film'];
    $rezervacija->ukloniRezervaciju($id_film);
}
?>