<?php

class Utilisateur{
  private int $id;
  private string $nom;
  private string  $prenom;
  private string  $adresse;
  private string $login;
  private string $password;
  private array $compte ;
  private string $photoRecto;
  private string $photoVerso;
  private typeUtilisateur $typeUtilisater;
  public function __construct($id,$nom,$prenom,$adress,$login,$password,$compte,$photoRecto,$photoVerso,$typeUtilisateur){
    $this->id = $id;
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->adresse = $adresse;
    $this->login = $login;
    $this->password = $password;
    $this->compte[] = $compte;
    $this->photoRecto = $photoRecto;
    $this-> photoVerso = $photoVerso;
    $this->typeUtilisateur = new typeUtilisateur();
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

 
  public function getPrenom()
  {
    return $this->prenom;
  }

 
  public function setPrenom($prenom)
  {
    $this->prenom = $prenom;

    return $this;
  }

 
  public function getAdresse()
  {
    return $this->adresse;
  }

  
  public function setAdresse($adresse)
  {
    $this->adresse = $adresse;

    return $this;
  }

 
  public function getLogin()
  {
    return $this->login;
  }


  public function setLogin($login)
  {
    $this->login = $login;

    return $this;
  }

 
  public function getPassword()
  {
    return $this->password;
  }

  
  public function setPassword($password)
  {
    $this->password = $password;

    return $this;
  }

 
  public function getCompte()
  {
    return $this->compte;
  }

  
  public function setCompte($compte)
  {
    $this->compte = $compte;

    return $this;
  }

 
  public function getPhotoRecto()
  {
    return $this->photoRecto;
  }

 
  public function setPhotoRecto($photoRecto)
  {
    $this->photoRecto = $photoRecto;

    return $this;
  }

 
  public function getPhotoVerso()
  {
    return $this->photoVerso;
  }

 
  public function setPhotoVerso($photoVerso)
  {
    $this->photoVerso = $photoVerso;

    return $this;
  }
}

