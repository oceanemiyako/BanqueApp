<?php

class CompteBancaire {

    private string $titulaire;
    protected float $solde;
    protected string $devise;

    public function  __destruct(){
        print "\nvotre compte a bien été détruit";
    }

    public function __construct($titulaire, $solde, $devise) {
        $this->titulaire = $titulaire;
        $this->solde = $solde;
        $this->devise = $devise;
    }

    public function deposer($montant) {
        $this->solde += $montant;
        print "\nDépôt de $montant $this->devise effectué";
    }

    public function retirer($montant) {
        if ($this->solde >= $montant) {
            $this->solde -= $montant;
            print "\nRetrait de $montant $this->devise effectué";
        } else {
            print "Solde insuffisant";
        }
    }

    public function getSolde() {
        print "\nSolde actuel : $this->solde $this->devise";
    }

}

//$compte = new CompteBancaire("Oceane Garcia", 1000.45, "euros");
//$compte->retirer(500);
//$compte->deposer(200);
//$compte->getSolde();

unset($compte);

