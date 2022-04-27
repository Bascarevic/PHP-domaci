<?php require 'delovi/vrh.php';
require 'delovi/navbar.php'; ?>
<div class="container" style="background-color: #C0C0C0;">
<div class="row">
<div class="col">
<h1 ><?php echo  $movie['naziv']?></h1> <br>
<h5>Opis:</h5> 
<p ><?php echo  $movie['opis']?></p>
<p >Reditelj: <?php echo  $movie['reditelj']?></p>
<p >Glumci: <?php echo  $movie['glumci']?></p>
</div>
</div>
</div>
<?php require_once 'delovi/dno.php'; ?>