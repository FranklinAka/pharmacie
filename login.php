<?php
$title='Authentification';
require 'element/header.php';
?>

<body>
  <div class="container">
    <div class="col-md-12">        
      <div class="col-md-4 col-md-offset-4">
        <form action="traitement/Trait_connexion.php" method="POST" class="form-horizontal" role="form">
            <div class="form-group">
              <legend align="center"><h1><b>Connexion</b></h1></legend>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="login" name="login">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" placeholder="mot de passe" name="pwd">
            </div>
            <div class="col-md-12">
              <button class="btn btn-success"><b>Connexion</b></button>
              <button class="btn btn-danger pull-right" type="reset"><b>Annuler</b></button>
            </div>
        </form>
      </div> 
    </div>
  </div>
</body>