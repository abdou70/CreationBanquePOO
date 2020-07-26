<?php
/*function monautoload1($classname1){
    $path1='../Entite/';
    $extension1='cliententite.php';
    $full1= $path1.$extension1;

    include_once $full1;
}*/

namespace Clientinitial;
class client{
    private $nom ;
    private $prenom ;
    private $adresseclient;
    private $email1;
    private $numerotelephone;
    private $profession;
    private $cni;
    private $datenaissance; 
    private $salaire ;
    private $nomemployeur;
    private $raisonsocial;
    private $telephoneemploy;
    private $adresseemployeur ;
    private $ninea ;
    private $Email;

public function setNom($nom)
{
    return $this->nom=$nom;
}

public function getNom()
{
    return $this->nom;
}

public function setPrenom($prenom)
{
  return $this->prenom=$prenom;
}

public function getPrenom()
{
    return $this->prenom;
}
public function setAdresse($adresseclient)
{
    return $this->adresseclient=$adresseclient;
}

public function getAdresse()
{
    return $this->adresseclient;
}

public function setEmail1($email1)
{
   return $this->email1=$email1;
}

public function getEmail1()
{
    return $this->email1;
}

public function setNumerotelephone($numerotelephone)
{
    return $this->numerotelephone=$numerotelephone;
}

public function getNumerotelephone()
{
    return $this->numerotelephone;
}

public function setProfession($profession)
{
    return $this->profession=$profession;
}

public function getProfession()
{
    return $this->profession;
}

public function setCni($cni)
{
    return $this->cni=$cni;
}

public function getCni()
{
    return $this->cni;
}

public function setDatenaissance($datenaissance)
{
    return $this->datenaissance=$datenaissance;
}

public function getDatenaissance()
{
    return $this->datenaissance;
}

public function setSalaire($salaire)
{
    return $this->salaire=$salaire;
}

public function getSalaire()
{
    return $this->salaire;
}

public function setNomemployeur($nomemployeur)
{
    return $this->nomemployeur=$nomemployeur;
}

public function getNomemployeur()
{
    return $this->nomemployeur;
}

public function setRaisonsocial($raisonsocial)
{
    return $this->raisonsocial=$raisonsocial;
}

public function getRaisonsocial()
{
    return $this->raisonsocial;
}

public function setTelephoneEmployeur($telephone)
{
    return $this->telephoneemploy=$telephone;
}

public function getTelephone()
{
    return $this->telephoneemploy;
}

public function setAdresseEmployeur($adresseemployeur)
{
    return $this->adresseemployeur=$adresseemployeur;
}

public function getAdresseEmploy()
{
    return $this->adresseemployeur;
}

public function setNinea($ninea)
{
    return $this->ninea=$ninea;
}

public function getNinea()
{
    return $this->ninea;
}

public function setEmail($Email)
{
    return  $this->Email=$Email;
}

public function getEmail()
{
    return $this->Email;
}

}
?>