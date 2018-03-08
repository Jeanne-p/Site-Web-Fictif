<?php
$nom = $_POST['nom']; 
$prenom = $_POST['prenom']; 
$jour = $_POST['jour']; 
$mois = $_POST['mois']; 
$annee = $_POST['annee']; 
$telephone = $_POST['telephone']; 
$nomr = $_POST['nomr']; 
$adresser = $_POST['adresser']; 
$duree = $_POST['duree']; 
$heure = $_POST['heure']; 
$type = $_POST['type']; 
 
$fichierouvert = fopen ('form.html', 'w'); 
if (!fwrite($fichierouvert, '<br><br><table id="form" border="1"><caption>Dernier formulaire</caption><tr><td>Nom: </td><td>' . $nom . '</td></tr><tr><td>Prenom: </td><td>'
 . $prenom . '</td></tr><tr><td>Date de naissance:</td><td> ' . $jour . $mois . $annee .'</td></tr><tr><td>Numero telephone: </td><td>' . $telephone . 
'</td></tr><tr><td>Nom residence: </td><td>' . $nomr . '</td></tr><tr><td>Adresse residence: </td><td>' . $adresser . '</td></tr><tr><td>Duree: </td><td>'
 . $duree . '</td></tr><tr><td>Heure: </td><td>' . $heure . '</td></tr><tr><td>Type: </td><td>' . $type . '</td></tr>')) {
  die("Impossible d'écrire dans le fichier 'formulaire.txt'");
}
fclose ($fichierouvert);

header("location:".  $_SERVER['HTTP_REFERER']);

  exit();
?>