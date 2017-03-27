<?php
class Cours{
  private $Theme;
  private $UFR;
  private $Etudiant;
  private $Professeur;


	public function construct($T, $UFR, $E, $P){
		$this->Theme = $T;
		$this->UFR = $UFR;
		$this->Etudiant = $E;
		$this->Professeur = $P;
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
		return $this->Theme . ", " . $this->UFR . " ";
	}
}
?>