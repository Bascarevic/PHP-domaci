<?php require 'delovi/vrh.php';
require 'delovi/navbar.php'; ?>

<div class="col-6 col-md-4" style="margin-left: 100px;">
                    <div class="card" mb-2 mt-2 style="margin-top: 30px;">
                        <div class="card-header" style="background-color: #e3dfdc;">
                            <a href="zanr.php?zanr=<?php echo $fil['zanr']?>" class="btn btn secondary btn-sm" class="btn btn-secondary btn-sm"><?php echo $fil['zanr'] ?></a>
                        </div>
                        <div class="card-body">
                            <h5><?php echo $fil['naziv']; ?></h5>
                            <a href="prikaziOpis.php?id= <?php echo $fil['id']?>"class="btn btn-light btn-sm">Detaljnije</a>
                        </div>
                        <div class="card-footer"> 
                            <button type="button" id="ukloni" value="<?php echo $fil['id']?>" class="btn btn-info">Ukloni rezervaciju</button>
                            <button type="button" id="odustani" name="odustani" class="btn btn-info">Odustani</button>

                        </div>
                    </div>
</div>
<?php require 'delovi/dno.php'; ?>

<!-- DRUGA PRIMENA AJAXA -->
<script>
    $(document).ready(function(){
    $('#ukloni').click(function(){
        var id_film=$(this).val();
        var ajaxurl = 'ukloniRez.php';
        data={'id_film' : id_film};
        $.post(ajaxurl, data, function(response) {
            alert ("Uklonjena rezervacija");
       window.location.replace("rez.php");
        })
    })
});
$('#odustani').click(function(){
    window.location.replace("repertoar.php");
});
</script>