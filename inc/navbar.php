<?php 
require 'lib/utils/functions.php';
isNotConnected();

if(isset($_GET['logout'])){
    unset($_SESSION['odyssee']['connected']);
    header('Location: login.html');
    exit;
}

?>
<header class="d-flex shadow align-items-center bg-body-tertiary mb-5">
    <a href="index.php">
        <img src="assets/img/logo.png" alt="Logo Odyssée Collusion" class="logo ms-3">
    </a>
    <nav class="navbar navbar-expand-sm ms-auto me-auto">
        <ul class="navbar-nav nav-underline">
            <li class="nav-item">
                <a class="nav-link <?= $currentPage === 'dashboard' ? 'active' : '' ?>"  href="index.php">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $currentPage === 'usersPage' ? 'active' : '' ?>"  href="usersPage.php">Utilisateurs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $currentPage === 'cardsPage' ? 'active' : '' ?>"  href="cardsPage.php">Cartes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $currentPage === 'gameboardsPage' ? 'active' : '' ?>"  href="gameboardsPage.php">Plateaux</a>
            </li>
        </ul>
    </nav>
    <div class="me-3 text-end">
        <p class="mb-0"><?= $_SESSION['odyssee']['connected']['name']." ".$_SESSION['odyssee']['connected']['lastname'];  ?></p>
        <a href="?logout" class="btn p-0 fs-6 text-secondary">Log Out</a>
    </div>
</header>