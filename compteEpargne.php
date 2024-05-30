<?php

class compteEpargne extends compteBancaire
{

    private float $tauxInteret;

    public function __construct($titulaire, $solde, $devise, $tauxInteret)
    {
        parent::__construct($titulaire, $solde, $devise);
        $this->tauxInteret = $tauxInteret;
    }

    public function calculerInterets()
    {
        $interets = $this->solde * ($this->tauxInteret / 100);
        $this->deposer($interets);
        print "\nIntérêts de $interets $this->devise  vient d'être ajoutés au solde";
    }


}