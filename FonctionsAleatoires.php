<?php
require_once("Universite.php"               );
require_once("Personne.php"                 );
require_once("Professeur.php"               );
require_once("Etudiant.php"                 );
require_once("Livre.php"                    );
require_once("DateEmprunt.php"              );
require_once("BibliothequeUniversitaire.php");
require_once("TableauxValeurs.php"          );


// Fonction de g�n�ration d'une valeur al�atoire prise dans un tableau simple
// (indices num�riques commen�ant � 0).
// 
// Param�tres :
// - $tabVal : tableau depuis lequel une valeur est prise al�atoirement
//
// Retour :
// - Valeur (cha�ne de caract�res) al�atoire prise dans le param�tre tableau
function valTabSimpleAlea(
  $tabVal
){
  return $tabVal[rand(0, count($tabVal) - 1)];
}
?>
