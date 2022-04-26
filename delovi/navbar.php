<nav class= "navbar navbar-expand navbar-light" style="background-color:#FA8072">
    <a href="index.php" class="navbar-brand">Filmovi</a>
    <?php if(isset($_SESSION['id'])): ?>
    <ul class="navbar-nav ml-auto">
    <li class="nav-item"><a href="rez.php" class="nav-link"><?php echo $_SESSION['name']; ?></a></li>
    <li class="nav-item"><a href="logout.php" class="nav-link">Log out</a></li>
    </ul>
    <?php else: ?>
    <ul class="navbar-nav ml-auto">
    <li class="nav-item"><a href="login.view.php" class="nav-link">Login</a></li>
    <li class="nav-item"><a href="register.view.php" class="nav-link">Register</a></li>
    </ul>
    <?php endif; ?>

</nav>