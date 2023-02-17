<?php
Class Date{
  var $days = array('Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche');
  var $months = array('Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre');
  //monthNamesShort: ['Jan','Fév','Mar','Avr','Mai','Jun','Jul','Aoû','Sep','Oct','Nov','Déc']
  function getEvents($year){
    global $DB;
    $req = $DB->query('SELECT * FROM events WHERE YEAR(date)='.$year);
    $r = array();
    while ($d = $req->fetch(PDO::FETCH_OBJ)){
      $r[strtotime($d->date)][$d->id] = $d->title;
    }
    return $r;
  }
  function getAll($year){
      // year est la annee a la quelle nous voulons recupere les dates
      // cette focntion permet de récuperer tous les jours de l'années
      $r      =   array();
      $date   =   new DateTime($year.'-01-01');
      while ($date->format('Y') <= $year){ // format lorqu on lui passe un format il retourne la valeur
          // ceci me permettra d ajouter un jour a chaque fois
          $y      =   $date->format('Y');
          $m      =   $date->format('n');
          $d      =   $date->format('j');
          $w      =   str_replace('0','7', $date->format('w')); // pour arranger le fat que les valeur soient compirse entre 1 et 7 et 0 et 6
          $r[$y][$m][$d]  =   $w;
          $date->add(new DateInterval('P1D')); // ajouete une periode d un jour  //$date + 24*3600; // les jous sur l annee
      }
    return $r;
  }
  }
?>