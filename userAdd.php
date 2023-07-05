<?php
$title = 'Odyssée :: Ajout Utilisateur';
$currentPage = 'addUsers';
require 'inc/head.php';
require 'inc/nav.php';

?>

<div class="container">
        <div class="col-8 col-sm-11 col-md-9 col-lg-8 col-xl-7 col-xxl-6  mx-auto">
            <div class="card">
                <h5 class="card-header"><i class="bi bi-people-fill"></i> Ajout d'un Utilisateur</h5>
                <div class="card-body p-4 ">
                    <form>
                        <div class="row mb-3">
                            <div class="col-12 col-sm-6 d-flex flex-column gap-3 mb-3">
                                <select class="form-select bg-light" name="civility" id="">
                                    <option selected>Civilité</option>
                                    <option value="Mme">Madame</option>
                                    <option value="M">Monsieur</option>
                                </select>
                                <input type="text" class="form-control bg-light" name="name" placeholder="Prénom">
                                <input type="text" class="form-control bg-light" name="firstName" placeholder="Nom">
                                <input type="email" class="form-control bg-light" name="email" placeholder="Email">
                                <div>
                                <label for="birth" class="form-label">Date de naissance</label>
                                <input type="date" class="form-control bg-light" name="birth" id="birth">
                                </div>
                            </div>
                            <div class="col d-flex flex-column gap-3">
                                <input type="number" class="form-control bg-light" name="streetNumber" placeholder="N° de rue">
                                <input type="text" class="form-control bg-light" name="streetName" placeholder="Nom de rue">
                                <input type="number" class="form-control bg-light" name="postcode" placeholder="Code postal">
                                <input type="text" class="form-control bg-light" name="city" placeholder="Ville">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12 col-sm-6 d-flex flex-column gap-3 mb-3">
                                <input type="text" class="form-control bg-light" name="pseudo" placeholder="Pseudo">
                                <select class="form-select bg-light" name="status" id="">
                                    <option selected>Statut</option>
                                    <option value="admin">Administrateur</option>
                                    <option value="modo">Modérateur</option>
                                    <option value="gamer">Joueur</option>
                                    <option value="caster">Casteur</option>
                                </select>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control mb-3 bg-light" name="pwd" placeholder="Mot de passe">
                            </div>
                        </div>
                        <div class="row">
                            <div class="text-center">
                                <button type="submit" class="btn btn-outline-primary">Enregistrer l'utilisateur</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>

</body>
</html>
