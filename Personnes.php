<?php
class Personnes{
	private $nom;
	private $prenom;
	private $adresse;
	private $age;

	public function construct($n, $p, $ad, $a){
		$this->nom = $n;
		$this->prenom = $p;
		$this->adresse = $ad;
		$this->age = $a;
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
		return $this->prenom . ", " . $this->nom . ", " . $this->ad . ", " . $this->age . " ";
	}

} 
?>