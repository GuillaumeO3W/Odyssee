<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> <!-- CDN icons Boostrap -->
    <title>Odyssée & Collusion</title>
</head>
<body class="bg-body-secondary">

<!-- DEBUT HEADER ------------------------------------------------------------------------------------------------ -->
<?php
include 'header.php';
?>
<!-- FIN HEADER ------------------------------------------------------------------------------------------------ -->

<!-- DEBUT SECTION CARDS---------------------------------------------------------------------------------------- -->
    <section class="container mb-5">
        <h2 class="fs-5 fw-medium text-body-secondary mb-4"><i class="bi bi-grid-1x2-fill"></i> Dashboard</h2>
        <div class="row g-3">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card h-100 bg-body-tertiary">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Utilisateurs</h5>
                        <p class="card-text mb-1">Nb Admins</p>
                        <p class="card-text mb-1">Nb Modérateurs</p>
                        <p class="card-text">Nb Joueurs</p>
                        <a href="#" class="btn btn-primary mt-auto me-auto">Ajouter un utilisateur</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card h-100 bg-body-tertiary">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Cartes</h5>
                        <p class="card-text mb-1">Nb de cartes "Vikings"</p>
                        <p class="card-text">Nb de cartes "Explorateurs"</p>
                        <a href="#" class="btn btn-primary mt-auto me-auto">Ajouter une carte</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card h-100 bg-body-tertiary">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Plateaux</h5>
                        <p class="card-text">Nb de plateaux</p>
                        <a href="#" class="btn btn-primary mt-auto me-auto">Ajouter un plateau</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- FIN SECTION CARDS------------------------------------------------------------------------------------------------ -->
<!-- DEBUT SECTION TABLEAU ------------------------------------------------------------------------------------------------------ -->
    <section>
        <div class="container">
            <h3 class="fs-6 text-body-secondary fw-medium mb-4">Derniers utilisateurs ajoutés</h3>
            <table class="table table-striped table-light rounded overflow-hidden">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Pseudo</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
                </tbody>
            </table>
        </div>
    </section>


<!-- FIN SECTION TABLEAU ------------------------------------------------------------------------------------------------------ -->

</body>
</html>