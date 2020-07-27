<?php
namespace clientcompte;

class client
{
    private $numerocompte;
    private $numeroagence;
    private $clerib;
    private $Dateouverture;
    private $montantInitial;
    private $fraisOuverture;
    private $datebloquage;
    private $datedebloquage;
    private $agios;

public function getNumerocompte()
{
    return $this->numerocompte;
}

public function setNumerocompte($numerocompte)
{
    return $this->numerocompte=$numerocompte;
}

public function getNumeroagence()
{
    return $this->numeroagence;
}

public function setNumeroagence($numeroagence)
{
    return $this->numeroagence=$numeroagence;
}

public function getClerib()
{
    return $this->clerib;
}

public function setClerib($clerib)
{
    return $this->clerib=$clerib;
}

public function getDateouverture()
{
    return $this->Dateouverture;
}

public function setDateouverture($Dateouverture)
{
    return $this->Dateouverture=$Dateouverture;
}
public function getMontantinitial()
{
    return $this->montantInitial;
}

public function setMontantinitial($montantInitial)
{
    return $this->montantInitial=$montantInitial;
}

public function getFraisouverture()
{
    return $this->fraisOuverture;
<<<<<<< HEAD
}

public function setFraisouverture($fraisOuverture)
{
    return $this->fraisOuverture=$fraisOuverture;
}

=======
}

public function setFraisouverture($fraisOuverture)
{
    return $this->fraisOuverture=$fraisOuverture;
}

>>>>>>> 3ac44eabca066f3116be32f0666510769e58fce9
public function getDatebloquage()
{
    return $this->datebloquage;
}

public function setDatebloquage($datebloquage)
{
    return $this->datebloquage=$datebloquage;
}

public function getDatedebloquage()
{
    return $this->datedebloquage;
}

public function  setDatedebloquage($datedebloquage)
{
    return $this->datedebloquage=$datedebloquage;
}

public function getAgios()
{
    return $this->agios;
}

public function setAgios($agios)
{
    return $this->agios=$agios;
}

}

?>