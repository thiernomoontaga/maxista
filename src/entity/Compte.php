<?php

class Compte{
  private int $id;
  private Date $dateCreation;
  private float $solde;
  private int $numeroCompte;
  private array $transaction;
  private Utilisateur $Utilisateur;
  private enumType $statut_compte;
  public function __construct($id,$dateCreation,$solde,$numeroCompte,$transaction,$Utilisateur,$statut_compte){
    $this->id = $id;
    $this->dateCreation = $dateCreation;
    $this->solde = $solde;
    $this->numeroCompte = $numeroCompte;
    $this->transaction []=  $transaction;
    $this->Utilisateur =  new Utilisateur();
    $this->statut_compte = $statut_compte;
    

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

  
  public function getDateCreation()
  {
    return $this->dateCreation;
  }

 
  public function setDateCreation($dateCreation)
  {
    $this->dateCreation = $dateCreation;

    return $this;
  }

 
  public function getSolde()
  {
    return $this->solde;
  }

  
  public function setSolde($solde)
  {
    $this->solde = $solde;

    return $this;
  }

  
  public function getNumeroCompte()
  {
    return $this->numeroCompte;
  }

 
  public function setNumeroCompte($numeroCompte)
  {
    $this->numeroCompte = $numeroCompte;

    return $this;
  }

  
  public function getTransaction()
  {
    return $this->transaction;
  }


  public function setTransaction($transaction)
  {
    $this->transaction = $transaction;

    return $this;
  }

  
  public function addtUtilisateur($Utilisateur)
  {
    return $this->Utilisateur[] = $Utilisateur;
  }

  public function setUtilisateur($Utilisateur)
  {
    $this->Utilisateur = $Utilisateur;

    return $this;
  }

  
  public function setStatut_compte($statut_compte)
  {
    $this->statut_compte = $statut_compte;

    return $this;
  }

  
  public function getStatut_compte()
  {
    return $this->statut_compte;
  }
}

