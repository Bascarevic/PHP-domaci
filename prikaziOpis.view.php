<?php require 'delovi/vrh.php';
require 'delovi/navbar.php'; ?>
<div class="container">
<div class="row">
<div class="col">
<h1><?php echo  $movie['naziv']?></h1> <br>
<p><?php echo  $movie['opis']?></p>
<p><?php echo  $movie['reditelj']?></p>
<p><?php echo  $movie['glumci']?></p>
</div>
</div>
</div>
<?php require_once 'delovi/dno.php'; ?>