<?php
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'element' . DIRECTORY_SEPARATOR . 'header.php';
?>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<link type="text/css" rel="stylesheet" href="style.css">

</br></br></br></br>

<div class="d-flex align-items-center p-3 my-3 text-gray rounded shadow-sm">
    <div class="lh-1">
      <h3>Horaire D'Ouverture</h3>
    </div>
</div>

<table class="table caption-top" style="width:70%; margin: 0 auto;">
  <caption>NB: Ces heures ne sont pas pris en compte lorsque la pharmacie est de garde, dans ce cas la voir le voir les horaires ci-dessous. </caption>
  <thead>
    <tr>
      <th scope="col">Jour</th>
      <th scope="col">Plage Horaire</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><strong>Lundi</strong></td>
      <td>Ouvert de 7h30m à 20h</td>
    </tr>
    <tr>
      <td><strong>Mardi</strong></td>
      <td>Ouvert de 7h30m à 20h</td>
    </tr>
    <tr>
      <td><strong>Mercredi</strong></td>
      <td>Ouvert de 7h30m à 20h</td>
    </tr>
    <tr>
      <td><strong>Jeudi</strong></td>
      <td>Ouvert de 7h30m à 20h</td>
    </tr>
    <tr>
      <td><strong>Vendredi</strong></td>
      <td>Ouvert de 7h30m à 20h</td>
    </tr>
    <tr>
      <td><strong>Samedi</strong></td>
      <td>Ouvert de 7h30m à 13h</td>
    </tr>
    <tr>
      <td><strong>Dimanche</strong></td>
      <td>Ferme</td>
    </tr>
  </tbody>
</table>

</br></br></br></br></br></br>
<hr class="featurette-divider">


<?php
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'element' . DIRECTORY_SEPARATOR . 'footer.php';
?>