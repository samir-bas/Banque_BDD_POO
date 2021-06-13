<?php
    include "header.php" ;
?>
    <!-- MAIN -->
    <main>
      <section class="container">
        <p class="h4 mt-2">Vos comptes bancaires <a href="compte.php" class="btn btn-success"> <i
                            class="fas fa-plus-circle"></i> Ajouter</a> </p>
        <div class="row">
          <?php foreach ($comptes as $compte) { ?>
          <div class="col-4">
            <div class="card mb-2">
              <div class="card-header font-weight-bold">
                <span> <?php echo $compte->getNumCompte() ?> </span>
              </div>
              <div class="card_body">
                <h3 class="card-title"></h3>

                <hr class="col-10 offset-1">
                <p class="card-text px-2">Solde : <?php echo number_format($compte->getSolde(), 2, ',', ' ') . ' €' ?></p>
                <hr class="col-10 offset-1">
                <p class="card-text px-2">Dernière opération : <?php echo date("d/m/Y", strtotime($compte->getDerniere_op())) ?> </p>
                <div class="card-footer mx-auto">
                  <a class="btn btn-primary col-4" href="#">Clôturer</a>
                  <a class="btn btn-primary col-5" href="#">Dépôt/Retrait</a>
                  <a class="btn btn-primary" href="Views/operationsView.php?idcompte=<?php echo $compte->getId() ?>">
                  <i class="fa-regular fa-eye"></i>Voir</a>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
        </section>
    </main>

<?php include "footer.php" ?>
<?php exit ?>

                <!-- <?php echo $compte->getNomCompte() ?> <br>  -->
                                <!-- <p class="card-text px-2">Propriètaire : <?php echo $compte->getNom() . ' ' . $compte->getPrenom() ?> </p> -->

