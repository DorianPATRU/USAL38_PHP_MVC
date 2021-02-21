<?php
// Gestion des comptes courants des clients de la banque
// Un compte courant est caractérisé par un numéro, un propriétaire(nom), un solde, un découvert autorisé de 500 euros
// Créer une application qui permet de créer un compte courant et d'effectuer des opérations de type dépôt et retrait
// Ajouter une fonction qui permet d'effectuer un virement vers un autre compte (concept de transmission par référence)

define("DECOUVERT_AUTORISE", 500);

class Compte_Courant {
    private $id;
    private $proprio;
    private $solde;
    private $decouvert;
    private $depot;
    private $retrait;
    
    public function __construct($id, $proprio, $solde, $decouvert, $depot, $retrait) {
        $this->id = $id;
        $this->proprio = $proprio;
        $this->solde = $solde;
        $this->decouvert = $decouvert;
        $this->depot = $depot;
        $this->retrait = $retrait;
    }

    public function get_id() {
        return $this->id;
    }
    
    public function set_id($id) {
        $this->id = $id;
    }

    public function get_proprio() {
        return $this->proprio;
    }
    
    public function set_proprio($proprio) {
        $this->proprio = $proprio;
    }

    public function get_solde() {
        return $this->solde;
    }
    
    public function set_solde($solde) {
        $this->solde = $solde;
    }

    public function get_decouvert() {
        return $this->decouvert;
    }
    
    public function set_decouvert($decouvert) {
        $this->decouvert = $decouvert;
    }

    public function get_depot() {
        return $this->depot;
    }
    
    public function set_depot($depot) {
        $this->depot = $depot;
    }

    public function get_retrait() {
        return $this->retrait;
    }
    
    public function set_retrait($retrait) {
        $this->retrait = $retrait;
    }

    public function virement($autre_compte, $montant) {
        // décrémenter le compte courant <source>
        //EX : solde = 1000€
        //virement de 200€

        //nouveau solde après virement = 800€
        // incrémenter le compte courant destination
        //EX : solde 500
        //nouveau solde = 700€
    }









}
