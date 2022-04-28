<?php require 'delovi/vrh.php';
require 'delovi/navbar.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-6 offset-3" style="margin-top: 50px;">
            <form action ="login.php" method="POST" onsubmit="return check()">
                <input type="email" name="email" placeholder="email" class="form-control" id="email"> <br>
                <input type="password" name="password" placeholder="password" class="form-control" id="password"> <br>

                <button type="submit" class="form-control btn" style="background-color:#C0C0C0" name="loginBtn">Login</button>
            </form>
        </div>
    </div>
</div>   

<?php require_once 'delovi/dno.php'; ?>


<script>
    function check() {
        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;

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
