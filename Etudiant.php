<?php
require_once("TableauxValeurs.php");
include_once ("Personnes.php");

use Personnes as elève;

class Etudiant{
	private $IDEtudiant;
	private $CoefFamille;
	private $FraisInscrip;
	private $UFRInscrit;
	private $Ville;

	public function construct(elèves $IDE, $CF, $FI, $UFRI, $V){
		$this->IDEtudiant = $IDE;
		$this->CoefFamille = $CF;
		$this->FraisInscrip = $FI;
		$this->UFRInscrit = $UFRI;
		$this->Ville = $V;
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

$etudient1 = new Etudiant(new Personne("Blin", "Thomas", "Orvault", 21), 400, 42, "Science", "Nantes");


echo $etudient1 . "<br/>";
echo "<br/>";
?>