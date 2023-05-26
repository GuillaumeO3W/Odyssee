<?php
// On recupere l'URL de la page pour ensuite affecter class = "active" aux liens de nav
// source : https://openclassrooms.com/forum/sujet/bootstrap-utilisation-de-class-active
$page = $_SERVER['REQUEST_URI'];
$page = str_replace("/formation_o3w/odyssee/", "",$page);
?>

<header class="d-flex shadow-sm align-items-center bg-body-tertiary mb-5">
    <a href="index.html">
        <img src="assets/img/logo.png" alt="Logo Odyssée Collusion" class="logo ms-3">
    </a>
    <nav class="navbar navbar-expand-sm ms-auto me-auto">
        <ul class="navbar-nav nav-underline">
            <li class="nav-item">
                <a class="nav-link <?php if($page == "index.php"){echo 'active';} ?>" href="index.php">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if($page == "users.php"){echo 'active';} ?>" href="users.php">Utilisateurs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if($page == "cards.php"){echo 'active';} ?>" href="cards.php">Cartes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if($page == "gameboards.php"){echo 'active';} ?>" href="gameboards.php">Plateaux</a>
            </li>
        </ul>
    </nav>

    <div class="me-3 text-end">
        <p class="mb-0">Nom Admin</p>
        <button type="button" class="btn p-0 fs-6 text-secondary">Log Out</button>
    </div>

</header>