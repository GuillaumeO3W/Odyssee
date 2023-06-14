<?php
$title = 'Odyssée :: Cartes';
$currentPage = 'cards';
require 'header.php';
?>

<!-- DEBUT SECTION CONTENT---------------------------------------------------------------------------------------- -->
    <section class="container mb-5">
        <h2 class="fs-5 fw-medium  mb-4"><i class="bi bi-person-badge-fill"></i> Cartes</h2>
        <nav class="navbar mb-4">
            <div class="container-fluid">
              <a href="#" class="btn btn-primary">Ajouter une carte</a>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-primary" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <h3 class="fs-5  text-decoration-underline">Cartes Vikings</h3>
        <div class="container text-center mb-4 cardHover">
            <div class="row gallery">
            <?php
            $index = 1;
            $filename = 'assets/img/cards/vikings/card'.$index.'.png';
            while (file_exists($filename)) :?>
              <div class="col">
                <a href="#"><img src="<?= $filename ?>" alt=""></a>
              </div>
              <?php  $index++;
                $filename = 'assets/img/cards/vikings/card'.$index.'.png';
            endwhile ?>
            </div>
        </div>
        <h3 class="fs-5 text-decoration-underline">Cartes Explorateurs</h3>
        <div class="container text-center cardHover">
          <div class="row gallery">
              <?php
              $index = 1;
              $filename = 'assets/img/cards/explorateurs/card'.$index.'.png';
              while (file_exists($filename)) :?>
                <div class="col">
                  <a href="#"><img src="<?= $filename ?>" alt=""></a>
                </div>
                <?php  $index++;
                  $filename = 'assets/img/cards/explorateurs/card'.$index.'.png';
              endwhile ?>
              </div>
        </div>
    </section>
<!-- FIN SECTION CONTENT------------------------------------------------------------------------------------------------ -->
</body>
</html>
