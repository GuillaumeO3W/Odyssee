<?php
$title = 'Odyssée :: Ajout Utilisateur';
$currentPage = 'addUsers';
include_once 'header.php';
?>

<!-- DEBUT SECTION TABLEAU ------------------------------------------------------------------------------------------------------ -->
    <section>
        <div class="container">
            <h2 class="fs-5 fw-medium text-body-secondary mb-4"><i class="bi bi-people-fill"></i> Ajout d'un Utilisateur</h2>
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Civilité</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Prénom</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </section>

</body>
</html>
