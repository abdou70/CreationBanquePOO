<?php
class comptetable
{
    private$numerocompte;
    private$numeroagence;
    private$clerib;
    private$Dateouverture;
    private$montantInitial;
    private$fraisOuverture;
    private$datebloquage;
    private$datedebloquage;

public function getNumerocompte()
{
    return $this->numerocompte;
}
public function getNumeroagence()
{
    return $this->numeroagence;
}
public function getClerib()
{
    return $this->clerib;
}
public function getDateouverture()
{
    return $this->Dateouverture;
}
public function getMontantinitial()
{
    return $this->montantInitial;
}
public function getFraisouverture()
{
    return $this->fraisouverture;
}
public function getDatebloquage()
{
    return $this->datebloquage;
}
public function getDatedebloquage()
{
    return $this->datedebloquage;
}
}





?>