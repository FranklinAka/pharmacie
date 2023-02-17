<?php
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'fonctions' . DIRECTORY_SEPARATOR . 'function.php';
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'fonctions' . DIRECTORY_SEPARATOR . 'authentification.php';

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>
        <?php if (isset($title)):?>
            <?= $title ?>
        <?php else: ?>
            mon site
        <?php endif ?>
    </title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
      <a class="navbar-brand" href="#">Pharmacie St Bernard<br>
      <?php
      getWeatherData();
      ?>
      </a>
      
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <?= nav_menu('nav-link'); ?>
        </ul>
        <ul class="navbar-nav">
          <a href="/login.php" class="nav-link">Se connecter</a>
        </ul>
      </div>
    </nav>