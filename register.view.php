<?php require 'delovi/vrh.php';
require_once 'delovi/navbar.php';
 ?>

<div class="container">
    <div class="row">
        <div class="col-6 offset-3" style="margin-top:20px" onsubmit="return validate()">
            <form action="register.php" method="POST">
                <input type="text" name="name" placeholder="Ime" class="form-control" id="name"> <br>
                <input type="text" name="surname" placeholder="Prezime" class="form-control" id="surname"> <br>
                <input type="text" name="phone" placeholder="Telefon" class="form-control" id="phone"> <br>
                <input type="email" name="email" placeholder="Mejl" class="form-control" id="email"> <br>
                <input type="password" name="password" placeholder="Sifra" class="form-control" id="password"> <br>

                <button type="submit" class="form-control btn" style="background-color:#C0C0C0" name="registerBtn">Register</button>
            </form>
        </div>
    </div>
</div>   

<?php require 'delovi/dno.php'; ?>

<script>
    function validate() {
        var name = document.getElementById("name").value;
        var surname = document.getElementById("surname").value;
        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;
        
        if(name==""){
            alert("Unesite ime!")
            return false;
        }
        if(surname==""){
            alert("Unesite prezime!")
            return false;
        }
        if(email==""){
            alert("Unesite email!")
            return false;
        }
        if(password==""){
            alert("Unesite lozinku!")
            return false;
        }
        return true;
    }
</script> 