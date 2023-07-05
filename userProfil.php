<?php
$title = 'Odyssée :: Profil Utilisateur';
$currentPage = 'userProfil';
<<<<<<< HEAD
require 'inc/head.php';
require 'inc/nav.php';
require 'inc/usersDb.php';
=======
require 'header.php';
require 'usersDb.php'; 
>>>>>>> 7da42a8c13f268a1866db269096418ee73e41cbf
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

<div class="container">
    <div class="row gap-4">
        <div class="col">
        <div class="card">
            <h5 class="card-header">Profil Utilisateur</h5>
            <div class="card-body">
            <p class="card-text">pseudo : <?= $userDisplay['pseudo'] ?></p>
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