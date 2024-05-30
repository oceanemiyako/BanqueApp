<?php

class compteCourant extends compteBancaire
{
    private float $decouvertAutorise;

    public function __construct($titulaire, $solde, $devise, $decouvertAutorise)
    {
        parent::__construct($titulaire, $solde, $devise);
        $this->decouvertAutorise = $decouvertAutorise;
    }

    public function retirerAvecDecouvert($montant)
    {
        $montantAutorise = $this->solde + $this->decouvertAutorise;
        if ($montant <= $montantAutorise) {
            $this->solde -= $montant;
            print "\nRetrait de $montant $this->devise effectué avec découvert autorisé";
        } else {
            print "\nRetrait de $montant $this->devise impossible, dépassement du découvert autorisé";
        }
    }

}