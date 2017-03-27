<?php
require_once("TableauxValeurs.php");
include_once ("Personnes.php");

use \Personnes as Prof;

class Professeur{
	private $IDProf;
	private $Salaire;
	private $Ville;
	private $UFRInscrit;

	public function construct(prof $IDP, $S, $V, $UFRI){
		$this->IDProf = $IDP;
		$this->Salaire = $S;
		$this->Ville = $V;
		$this->UFRInscrit = $UFRI;
	}

	public function set($prop, $val)
	{
		echo "Affectation de la valeur $val à la propriété $prop";
		$this->$prop = $val;
	}

	public function get($prop)
	{
		return $this->$prop;
	}

	public function __toString(){
		return $this->Ville . ", " . $this->UFRInscrit . " ";

	}
}

$prof1 = new Professeur(new Personne("Dupont", "Martin", "Nantes", 48), 44400, "Science", "Nantes");

echo $professeur1 . "<br/>";
echo "<br/>";
?>