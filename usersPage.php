<?php
$title = 'Odyssée :: Utilisateurs';
$currentPage = 'usersPage';
require 'inc/head.php';
require 'inc/navbar.php';
require 'inc/usersDb.php';
?>

    <section>
        <div class="container">
            <h2 class="fs-5 fw-medium mb-4"><i class="bi bi-people-fill"></i> Utilisateurs</h2>
            <nav class="navbar  mb-4">
                <div class="container-fluid">
                    <a href="userAdd.php" class="btn btn-primary">Ajouter un Utilisateur</a>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="userSearch">
                        <button class="btn btn-primary" type="submit">Search</button>
                    </form>
                </div>
            </nav>
                
<?php
            // Afficher un nombre définit d'utilisateur par page 
            if (isset($_GET['usersByPage'])){         // si $_GET['usersByPage'] existe on le stock dans la variable $usersByPage 
                $usersByPage = $_GET['usersByPage'];        
            }else{
                $usersPerPage=8;     // sinon on définit le nombre d'utilisateurs à afficher par page
            }
            
            
            
              // recherche utilisateur dans le tableau
            $userSearch = isset($_GET['userSearch']) ? $_GET['userSearch'] : '';
            
            foreach($users as $user){
                if(strtolower($user['name']) == strtolower($userSearch) || $user['id'] == $userSearch || strtolower($user['lastname']) == strtolower($userSearch)  ){
                    $usersDisplay[] = $user;  
                }
            }
            
            
            
            $totalUsers= isset($_GET['userSearch']) ? count($usersDisplay) : count($users);     //On récupère le total d'utilisateurs dans le tableau $users[] pour le placer dans la variable $totalUsers.                 
            $totalPages=ceil($totalUsers/$usersPerPage);     //Nous allons maintenant compter le nombre de pages.
            
            if (isset($_GET['page']) && !empty($_GET['page'])){
                $currentPage = $_GET['page'];      // si la var Page existe et n'est pas vide, on récupère sa valeur
            }else{
                $currentPage = 1;               // sinon on la défini à 1
            }
            
            $index = ($currentPage-1)*$usersPerPage;      // On définit un index pour savoir quel user afficher en premier en fonction de la page où l'on se trouve
            $usersOnPage = array_slice($users,$index,$usersPerPage); // On récupère juste les utilisateurs à afficher en fonction de l'index (donc de la page actuelle) et du nombres d'utilisateur à afficher
            
            // Si une recherche existe on affiche les utlilisateurs correspondant sinon on les affiches tous
            $showUsers = isset($_GET['userSearch']) ? $usersDisplay : $usersOnPage; 
            
?>
            <!-- Affichage des utilisateurs dans un tableau -->
            <table class="table table-striped table-light rounded overflow-hidden shadow-sm">
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
                foreach ($showUsers as $value):
                ?>
                    <tr>
                        <th scope="row"><?=$value['id']?></th>
                        <td><?=$value['lastname']?></td>
                        <td><?=$value['name']?></td>
                        <td><?=$value['pseudo']?></td>
                        <td><?=$value['email']?></td>
                        <td><?=$value['status']?></td>
                        <td class="d-flex gap-3 justify-content-end">
                        <a href="userProfil.php?id=<?=$value['id']?>"><i class="bi bi-search"></i></a>
                            <i class="bi bi-pencil-fill"></i>
                            <i class="bi bi-trash3-fill"></i>
                        </td>
                    </tr>
                <?php           
                endforeach ;  
                ?>
                </tbody>
            </table>
            
            <!-- Barre de navigation des pages -->
            <nav aria-label="..." class="container">  
                <ul class="pagination justify-content-center">
                    <li class="page-item <?= ($currentPage == 1) ? "disabled" : "" ?>">
                        <a class="page-link" href="usersPage.php?page=<?=($currentPage-1)?> ">Previous</a>
                    </li>
                    <?php for ($i=1;$i<=$totalPages;$i++):?>
                    <li class="page-item">
                        <a class="page-link <?= ($i == $currentPage) ? "active" : "" ?> "  href="usersPage.php?page=<?=$i?>"><?=$i?></a>
                    </li>
                    <?php endfor; ?>
                    <li class="page-item <?= ($currentPage == $totalPages) ? "disabled" : "" ?>">
                        <a class="page-link" href="usersPage.php?page=<?=($currentPage+1)?>">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
</body>
</html>
