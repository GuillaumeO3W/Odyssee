<?php
$title = 'Odyssée :: Ajout Utilisateur';
$currentPage = 'addUsers';
require 'header.php';
?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <h5 class="card-header"><i class="bi bi-people-fill"></i> Ajout d'un Utilisateur</h5>
                        <div class="card-body">
                            <form>
                                <div class="row mb-3">
                                    <div class="col ">
                                        <label for="civility" class="form-label">Civilité</label>
                                        <input type="text" class="form-control mb-3" id="civility">
                                        
                                        <label for="name" class="form-label">Prénom</label>
                                        
                                        <input type="text" class="form-control mb-3" id="name">
                                        <label for="firstName" class="form-label">Nom</label>
                                        <input type="text" class="form-control mb-3" id="firstName">
                                        
                                        <label for="numberStreet" class="form-label">N° de rue</label>
                                        <input type="text" class="form-control mb-3" id="streetNumber">
                                        
                                        <label for="streetName" class="form-label">Nom de rue</label>
                                        <input type="text" class="form-control mb-3" id="streetName">
                                    </div>
                                    <div class="col ">
                                        <label for="pseudo" class="form-label">Pseudo</label>
                                        <input type="text" class="form-control mb-3" id="pseudo">
                                        
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control mb-3" id="email">
                                        
                                        <label for="pwd" class="form-label">Mot de passe</label>
                                        <input type="text" class="form-control mb-3" id="pwd">
                                        
                                        <label for="postcode" class="form-label">Code postal</label>
                                        <input type="text" class="form-control mb-3" id="postcode">
                                        
                                        <label for="city" class="form-label">Ville</label>
                                        <input type="text" class="form-control mb-3" id="city">
                                    </div> 
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-secondary ">Enregistrer l'utilisateur</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
