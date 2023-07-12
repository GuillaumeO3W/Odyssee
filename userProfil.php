<?php
$title = 'Odyssée :: Profil Utilisateur';
$currentPage = 'userProfil';
require 'inc/head.php';
require 'inc/navbar.php';
require 'inc/usersDb.php';
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
    <div class="d-flex justify-content-center">
        <div class="card">
            <h5 class="card-header">Profil Utilisateur</h5>
            <div class="card-body p-5">
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