<?php 

class Film 
{
    private $id;
    private $nom;
    private $realisateur;
    private $annee;

    public function __construct($id, $nom, $realisateur, $annee){

        $this->id = $id;
        $this->nom = $nom;
        $this->realisateur = $realisateur;
        $this->annee = $annee;
    }

    public function getId(){
        return $this->id;
    }

    public function getNom(){
        return $this->nom;
    }

    public function getRealisateur(){
        return $this->realisateur;
    }

    public function getAnnee(){
        return $this->annee;
    }


    public function setId($id){
        $this->id = $id; 
    }

    public function setNom($nom){
        $this->nom = $nom; 
    }

    public function setRealisateur($realisateur){
        $this->realisateur = $realisateur; 
    }

    public function setAnnee($annee){
        $this->annee = $annee; 
    }

}

$dvd = new Film(1,"Cerveau", "Tomy", 2021);

echo $dvd->getId() . "id ";
echo $dvd->getNom() . " ";
echo $dvd->getRealisateur() . " ";
echo $dvd->getAnnee() . " ";

$dvd->setNom("Ramoli");
echo $dvd->getNom() . " ";
