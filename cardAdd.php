<?php
$title = 'Odyssée :: Ajout Utilisateur';
$currentPage = 'addUsers';
require 'inc/head.php';
require 'inc/navbar.php';

?>

<div class="container">
        <div class=" col-sm-11 col-md-9 col-lg-8 col-xl-7 col-xxl-6  mx-auto">
            <div class="card">
                <h5 class="card-header"><i class="bi bi-person-badge-fill"></i> Ajout d'une carte</h5>
                <div class="card-body p-4 ">
                    <form> 
                        <div class="d-flex flex-column gap-3 col-sm-9 col-md-8 col-lg-6 mx-auto">
                            <select class="form-select bg-light" name="family" id="">
                                <option selected>Famille</option>
                                <option value="pilleurs">Pilleurs</option>
                                <option value="explorateurs">Explorateurs</option>
                            </select>
                            <input type="text" class="form-control bg-light" name="name" placeholder="Nom">
                            <textarea class="form-control bg-light" name="sortDescription" placeholder="Description du sort"></textarea>
                            <input type="text" class="form-control bg-light" name="attack" placeholder="Attaque">
                            <input type="text" class="form-control bg-light" name="lifePoints" placeholder="Points de vie">
                            <input type="text" class="form-control bg-light" name="mana" placeholder="Coût en Mana">
                            <input type="text" class="form-control bg-light" name="hierarchy" placeholder="Position Hiérarchique">
                            <input type="text" class="form-control bg-light" name="rarity" placeholder="Rareté">
                            <textarea class="form-control bg-light" name="history" placeholder="Histoire"></textarea>
                            <button type="submit" class="btn btn-outline-primary">Enregistrer la carte</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
</body>
</html>
