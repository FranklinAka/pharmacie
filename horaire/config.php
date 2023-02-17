<?php
try{
  $DB = new PDO('mysql:host=localhost;dbname=pharmacie','root','');

} catch (PDOException $e) {
  echo 'Base de données absent';
  exit();
}
?>