<?php 

require 'kontroler.php';

$filmovi = $film->getAll();

require 'repertoar.view.php';

?>