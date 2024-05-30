<?php

require_once 'compteBancaire.php';
require_once 'compteCourant.php';
require_once 'compteEpargne.php';

$compteEpargne = new compteEpargne("Astrea", 1500, "euros", 1.5);
$compteCourant = new compteCourant("Oceane", 2000, "euros", 500);

$compteEpargne->deposer(500);
$compteCourant->deposer(15000);

$compteEpargne->calculerInterets();

$compteCourant->retirerAvecDecouvert(400);

$compteCourant->getSolde();
$compteEpargne->getSolde();

unset($compteEpargne);
unset($compteCourant);