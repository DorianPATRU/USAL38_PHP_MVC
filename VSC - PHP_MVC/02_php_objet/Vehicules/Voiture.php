<?php 

namespace Vehicules;


class Voiture 
{
    private string $marque = "Peugeot";

    private string $modele = "207";

    public function getMarque()
    {
        return $this->marque;
    }

    public function getModele()
    {
        return $this->modele;
    }

    public function setMarque(string $nouvelleMarque)
    {
        $longueur = strlen($nouvelleMarque);

        if($longueur >= 2) {
            $this->marque = $nouvelleMarque;
        }
        else {
            throw new \Exception("Nom trop court !");
        }
        
    }

    public function setModele(string $nouveauModele)
    {
        $longueur = strlen($nouveauModele);

        if($longueur >= 2) {
            $this->marque = $nouveauModele;
        }
        else {
            throw new \Exception("Nom trop court !");
        }
        
    }

}  // fin de la classe Voiture  
