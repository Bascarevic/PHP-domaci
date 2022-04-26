<?php require 'delovi/vrh.php';
require_once 'delovi/navbar.php';
 ?>

<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            <form action="register.php" method="POST">
                <input type="text" name="name" placeholder="Ime" class="form-control"> <br>
                <input type="text" name="surname" placeholder="Prezime" class="form-control"> <br>
                <input type="text" name="phone" placeholder="Telefon" class="form-control"> <br>
                <input type="email" name="email" placeholder="Mejl" class="form-control"> <br>
                <input type="password" name="password" placeholder="Sifra" class="form-control"> <br>

                <button type="submit" class="form-control btn" style="background-color:#C0C0C0" name="registerBtn">Register</button>
            </form>
        </div>
    </div>
</div>   

<?php require 'delovi/dno.php'; ?>