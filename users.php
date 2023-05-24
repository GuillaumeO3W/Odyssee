<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> <!-- CDN icons Boostrap -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Odyssée & Collusion</title>
</head>
<body class="bg-body-secondary">

<!-- DEBUT HEADER ------------------------------------------------------------------------------------------------ -->
<?php
include 'header.php';
?>
<!-- FIN HEADER ------------------------------------------------------------------------------------------------ -->

<!-- DEBUT SECTION TABLEAU ------------------------------------------------------------------------------------------------------ -->
    <section>
        <div class="container">
            <h2 class="fs-5 fw-medium text-body-secondary mb-4"><i class="bi bi-people-fill"></i> Utilisateurs</h2>
            
            <nav class="navbar bg-body-secondary mb-4">
                <div class="container-fluid">
                    <button type="button" class="btn btn btn-primary ">Ajouter un Utilisateur</button>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </nav>

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
                <!-- La "base de donné" des utilisateurs est simulée par un tableau PHP qui se trouve dans listUsers.php -->
                    <?php
                    include 'listUsers.php';
                    
                        foreach ($users as $key => $profil){
                                echo "<tr>
                                    <th scope=\"row\">".($key+1)."</th>
                                    <td>".$profil['lastname']."</td>
                                    <td>".$profil['name']."</td>
                                    <td>".$profil['pseudo']."</td>
                                    <td>".$profil['email']."</td>
                                    <td>".$profil['status']."</td>
                                    <td class=\"d-flex gap-3 justify-content-end\">
                                        <i class=\"bi bi-search\"></i>
                                        <i class=\"bi bi-pencil-fill\"></i>
                                        <i class=\"bi bi-trash3-fill\"></i>
                                    </td>";
                                echo "</tr>";
                        }
                    
                    ?>
                </tbody>
            </table>
        </div>
    </section>


<!-- FIN SECTION TABLEAU ------------------------------------------------------------------------------------------------------ -->

</body>
</html>
