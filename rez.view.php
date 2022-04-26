<?php require 'delovi/vrh.php';
require 'delovi/navbar.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-10 offset-1">
            <h1 class="displey-4 text-center">Tvoje rezervacije</h1>
            <div class="row">
                <?php foreach($ids as $id): 
                    $fil=$film->getMovie($id)?>

                <div class="col-4">
                    <div class="card" mb-2 mt-2>
                        <div class="card-header">
                            <!-- <a href="zanr.php?zanr=< echo $fil['zanr']?>" class="btn btn secondary btn-sm" class="btn btn-secondary btn-sm">< echo $fil['zanr'] ?></a> -->
                            <h5 class="btn btn secondary btn-sm" class="btn btn-secondary btn-sm"><?php echo $fil['zanr'] ?></h5>
                        </div>
                        <div class="card-body">
                            <h5><?php echo $fil['naziv']; ?></h5>
                            <a href="prikaziOpis.php?id= <?php echo $fil['id']?>" class="btn btn-light btn-sm">Detaljnije</a>
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