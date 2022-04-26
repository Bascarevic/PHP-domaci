<?php require 'delovi/vrh.php';
require 'delovi/navbar.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-10 offset-1">
            <h1 class="displey-4 text-center" style="background-color:#FA8072">Repertoar</h1>
            <div class="row">
                <?php foreach($filmovi as $fil): ?>

                <div class="col-4">
                    <div class="card" mb-2 mt-2>
                        <div class="card-header" style="background-color:#C0C0C0">
                            <!-- <a href="zanr.php?zanr=< echo $fil['zanr']?>" >< echo $fil['zanr'] ?></a> -->
                            <h5 class="btn btn secondary btn-sm" class="btn btn-secondary btn-sm"><?php echo $fil['zanr'] ?></h5>
                        </div>
                        <div class="card-body">
                            <h5><?php echo $fil['naziv']; ?></h5>
                            <a href="prikaziOpis.php?id= <?php echo $fil['id']?>" class="btn btn-light btn-sm">Detaljnije</a>
                        </div>
                        <div class="card-footer" style="background-color: #e3dfdc;"> 
                            <?php if(isset($_SESSION['id'])): ?>
                            <a href="potvrdaRez.php?id=<?php echo $fil['id']?>" class="btn btn-light btn-sm" id="nije_potvrda">Rezervisi</a>
                            <?php else: ?>
                            <a href="login.php?get=f" class="btn btn-light btn-sm">Rezervisi</a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <br>
                </div>

                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<?php require 'delovi/dno.php'; ?>
<!-- class="btn btn-secondary btn-sm" -->