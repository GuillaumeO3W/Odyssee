<?php
$title = 'Odyssée :: Profil Utilisateur';
$currentPage = 'userProfil';
require 'header.php';
require 'listUsers.php'; // La "base de donné" des utilisateurs est simulée par un tableau PHP qui se trouve dans listUsers.php -->

?>

<?php

$userId = $_GET['id'];



foreach($users as $user){

    if($user['id'] == $userId){
        $userDisplay = $user;
        break;  
    }
}


?>

<h1 class="display-6 text-center my-5">Profil  Utilisateur</h1>

<div class="container">
    <div class="row gap-4">
        <div class="col">
        <div class="card">
            <h5 class="card-header">pseudo : <?= $userDisplay['pseudo'] ?></h5>
            <div class="card-body">
            <p class="card-text">nom : <?= $userDisplay['name'] ?></p>
            <p class="card-text">prénom : <?= $userDisplay['lastname'] ?></p>
            <p class="card-text">email : <?= $userDisplay['email'] ?></p>
            <p class="card-text">status : <?= $userDisplay['status'] ?></p>
        </div>
        </div>
    </div>
</div>


</body>
</html>