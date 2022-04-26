<?php require 'delovi/vrh.php';
require 'delovi/navbar.php'; ?>

<div class="col-4">
                    <div class="card" mb-2 mt-2>
                        <div class="card-header">
                            <a href="zanr.php?zanr=<?php echo $fil['zanr']?>" class="btn btn secondary btn-sm" class="btn btn-secondary btn-sm"><?php echo $fil['zanr'] ?></a>
                        </div>
                        <div class="card-body">
                            <h5><?php echo $fil['naziv']; ?></h5>
                            <a href="prikaziOpis.php?id= <?php echo $fil['id']?>"class="btn btn-light btn-sm">Detaljnije</a>
                        </div>
                        <div class="card-footer"> 
                            <button type="button" id="potvrda" value="<?php echo $fil['id']?>" class="btn btn-info">Potvrdi rezervaciju</button>
                            <button type="button" id="odustani" name="odustani" class="btn btn-info">Odustani</button>

                        </div>
                    </div>
</div>
<?php require 'delovi/dno.php'; ?>

<!-- DRUGA PRIMENA AJAXA -->
<script>
    $(document).ready(function(){
    $('#potvrda').click(function(){
        var id_film=$(this).val();
        var ajaxurl = 'potvrdaRez.php';
        data={'id_film' : id_film};
        $.post(ajaxurl, data, function(response) {
            alert ("Uspesna rezervacija");
       window.location.replace("rez.php");
        })
    })
});
$('#odustani').click(function(){
    window.location.replace("repertoar.php");
});
</script>