<?php
$title = 'Odyssée :: Ajout Utilisateur';
$currentPage = 'addUsers';
require 'header.php';
?>

    <section>
        <div class="container">
            <h2 class="fs-5 fw-medium text-body-secondary mb-4"><i class="bi bi-people-fill"></i> Ajout d'un Utilisateur</h2>
            

            <div class="row justify-content-center">
            <div class="col-12 col-lg-9 col-xl-7">

            <form>
                <div class="row mb-3">
                    <div class="col ">
                        <label for="civility" class="form-label">Civilité</label>
                        <input type="text" class="form-control" id="civility">

                        <label for="firstName" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="firstName">

                        <label for="name" class="form-label">Prénom</label>
                        <input type="text" class="form-control" id="name">
                        
                        <label for="numberStreet" class="form-label">N° de rue</label>
                        <input type="text" class="form-control" id="streetNumber">
                        
                        <label for="streetName" class="form-label">Nom de rue</label>
                        <input type="text" class="form-control" id="streetName">
                    </div>
                    <div class="col ">
                        <label for="pseudo" class="form-label">Pseudo</label>
                        <input type="text" class="form-control" id="pseudo">

                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email">

                        <label for="pwd" class="form-label">Mot de passe</label>
                        <input type="text" class="form-control" id="pwd">
                        
                        <label for="postcode" class="form-label">Code postal</label>
                        <input type="text" class="form-control" id="postcode">
                        
                        <label for="city" class="form-label">Ville</label>
                        <input type="text" class="form-control" id="city">
                    </div> 
                </div>
                <button type="submit" class="btn btn-secondary">Enregistrer l'utilisateur</button>
            </form>

            </div>
        </div>
    </div>

    </section>

</body>
</html>
