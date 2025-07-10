<?php

class Transaction{
  private int $id;
  private float $montant;
  private Date $date;
  private Compte $compte;
  private enumType $typetransaction;
  public function __construct($id,$montant,$date,$compte,$typetransaction){
    $this->id = $id;
    $this->montant = $montant;
    $this-> compte = new compte();
    $this->typetransaction = $typetransaction;
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

  public function getMontant()
  {
    return $this->montant;
  }


  public function setMontant($montant)
  {
    $this->montant = $montant;

    return $this;
  }

  public function getDate()
  {
    return $this->date;
  }

 
  public function setDate($date)
  {
    $this->date = $date;

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

 
  public function getTypetransaction()
  {
    return $this->typetransaction;
  }

 
  public function setTypetransaction($typetransaction)
  {
    $this->typetransaction = $typetransaction;

    return $this;
  }
}

