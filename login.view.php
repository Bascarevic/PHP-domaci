<?php require 'delovi/vrh.php';
require 'delovi/navbar.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            <form action ="login.php" method="POST">
                <input type="email" name="email" placeholder="email" class="form-control"> <br>
                <input type="password" name="password" placeholder="password" class="form-control"> <br>

                <button type="submit" class="form-control btn" style="background-color:#C0C0C0" name="loginBtn">Login</button>
            </form>
        </div>
    </div>
</div>   

<?php require_once 'delovi/dno.php'; ?>