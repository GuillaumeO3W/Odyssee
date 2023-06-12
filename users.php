<?php
$title = 'Odyssée :: Utilisateurs';
$currentPage = 'users';
require 'header.php';
require 'listUsers.php'; // La "base de donné" des utilisateurs est simulée par un tableau PHP qui se trouve dans listUsers.php -->
?>

    <section>
        <div class="container">
            <h2 class="fs-5 fw-medium text-body-secondary mb-4"><i class="bi bi-people-fill"></i> Utilisateurs</h2>
            <nav class="navbar bg-body-secondary mb-4">
                <div class="container-fluid">
                    <a href="addUser.php" class="btn btn-outline-primary">Ajouter un Utilisateur</a>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </nav>
                
<?php
            if (isset($_GET['usersByPage'])){         // si $_GET['usersByPage'] existe on le stock dans la variable $usersByPage 
                $usersByPage = $_GET['usersByPage'];        
            }else{
                $usersPerPage=15;     // sinon on définit le nombre d'utilisateurs à afficher par page
            }
            $totalUsers=count($users);     //On récupère le total d'utilisateurs dans le tableau $users[] pour le placer dans la variable $totalUsers.                 
            $totalPages=ceil($totalUsers/$usersPerPage);     //Nous allons maintenant compter le nombre de pages.
            if (isset($_GET['page']) && !empty($_GET['page'])){
                $currentPage = $_GET['page'];      // si la var Page existe et n'est pas vide, on récupère sa valeur
            }else{
                $currentPage = 1;               // sinon on la défini à 1
            }
            $index = ($currentPage-1)*$usersPerPage;      // On définit un index pour savoir quel user afficher en premier en fonction de la page où l'on se trouve
            $userSlice = array_slice($users,$index,$usersPerPage); // On récupère juste les utilisateurs à afficher en fonction de l'index (donc de la page actuelle) et du nombres d'utilisateur à afficher

?>
<!-- --------------DEBUT TABLEAU UTILISATEURS--------------------- -->
            <table class="table table-striped table-light rounded overflow-hidden">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prénom</th>
                        <th scope="col">Pseudo</th>
                        <th scope="col">Email</th>
                        <th scope="col">Statut</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                foreach ($userSlice as $value):
                ?>
                    <tr>
                        <th scope="row"><?=$value['id']?></th>
                        <td><?=$value['lastname']?></td>
                        <td><?=$value['name']?></td>
                        <td><?=$value['pseudo']?></td>
                        <td><?=$value['email']?></td>
                        <td><?=$value['status']?></td>
                        <td class="d-flex gap-3 justify-content-end">
                        <a href="user_profil.php?id=<?=$value['id']?>"><i class="bi bi-search"></i></a>
                            <i class="bi bi-pencil-fill"></i>
                            <i class="bi bi-trash3-fill"></i>
                        </td>
                    </tr>
                <?php           
                endforeach ;  
                ?>
                </tbody>
            </table>
            
            <nav aria-label="..." class="container">  <!-- Barre de navigation des pages -->
                <ul class="pagination justify-content-center">
                    <li class="page-item <?= ($currentPage == 1) ? "disabled" : "" ?>">
                        <a class="page-link" href="users.php?page=<?=($currentPage-1)?> ">Previous</a>
                    </li>
                    <?php for ($i=1;$i<=$totalPages;$i++):?>
                    <li class="page-item">
                        <a class="page-link <?= ($i == $currentPage) ? "active" : "" ?> "  href="users.php?page=<?=$i?>"><?=$i?></a>
                    </li>
                    <?php endfor; ?>
                    <li class="page-item <?= ($currentPage == $totalPages) ? "disabled" : "" ?>">
                        <a class="page-link" href="users.php?page=<?=($currentPage+1)?>">Next</a>
                    </li>
                </ul>
            </nav>
            
        </div>
    </section>

</body>
</html>
