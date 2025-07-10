<?php

class typeUtilisateur{
  private int $id;
  private string $nom;
  private array $Utilisateur;
  public function __construct($id,$nom,$Utilisateur){
    $this->id = $id;
    $this->nom = $prenom;
    $this->Utilisateur [] = $Utilisateur;
  }


  public function getId()
  {
    return $this->id;
  }


  public function setId($id)
  {
    $this->id = $id;

    return $this;
  }

  public function getNom()
  {
    return $this->nom;
  }

  
  public function setNom($nom)
  {
    $this->nom = $nom;

    return $this;
  }

  
  public function addUtilisateur()
  {
    return $this->Utilisateur [] = $Utilisateur;
  }

  
  public function setUtilisateur($Utilisateur)
  {
    $this->Utilisateur = $Utilisateur;

    return $this;
  }
}

