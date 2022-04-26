<?php 
session_start();

//require_once 'konekcija.php';

require_once 'klase/Korisnik.php';
require_once 'klase/Film.php';
require_once 'klase/Rezervacija.php';

$korisnik = new Korisnik();
$film = new Film();
$rezervacija = new Rezervacija();
?>