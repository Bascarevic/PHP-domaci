<?php 
//OVO UREDITI JOS

require_once 'kontroler.php';

$id = $_GET['id'];
$movie = $film->getMovie($id);

require_once 'prikaziOpis.view.php';
?>