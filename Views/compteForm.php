<?php 
include "header.php" ;

?>
  <!-- MAIN -->
  <main>
    <h2 class="text-center mt-3">Création d'un Nouveau compte</h2>
    <div class="container ">
      <div class="row" >
        <!-- <div class="col-md-6 offset-3"> -->
        <div class="col-6 offset-3">
          <form action="" method="POST" class="mt-3  p-3 border border-primary rounded">

            <div class="form-group">
              <label for="numcompte" class="form-label mt-1">N° Compte :</label>
              <input type="text" id="numcompte" name="numcompte" class="form-control" autofocus autocomplete="off">
            </div>

            <div class="form-group">
              <label for="typecompte_id" class="form-label mt-1">Type :</label>
                <select class="form-select" name="typecompte_id">
                    <option value="0"></option>
                <?php 
                    foreach($typecomptes as $typecompte) : 
                        echo '<option value="' . $typecompte["id"] . '">' . $typecompte["nom"] .'</option>';
                    endforeach;
                ?>
                </select>
            </div>
            
            <div class="text-center">
                <button type="submit" name = "add" class="btn btn-primary my-5 w-25">Enregistrer</button>
                <a class="btn btn-primary my-5 w-25" href="comptes.php">Annuler</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>

  <?php include "footer.php" ?>