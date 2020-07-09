<?php
class tableclient{
    private$_nom ;
    private$_prenom ;
    private$_adresseclient;
    private$_email1 ; 
    private$_numerotelephone;
    private$_profession;
    private$_cni ;
    private$_datenaissance; 
    private$_salaire ;
    private$_nomemployeur;
    private$_raisonsocial;
    private$_telephoneemploy;
    private$_adresseemployeur ;
    private$_ninea ;
    private$_Email;

public function __construc()
{
    
}

public function setNom($nom)
{
    return $this->_nom=$nom;
}
public function setPrenom($prenom)
{
  return $this->_prenom=$prenom;
}
public function setAdresse($adresseclient)
{
    return $this->_adresseclient=$adresseclient;
}
public function setEmail1($email1)
{
   return $this->_email1=$email1;
}
public function setNumerotelephone($numerotelephone)
{
    return $this->_numerotelephone=$numerotelephone;
}
public function setProfession($profession)
{
    return $this->_profession=$profession;
}
public function setCni($cni)
{
    return $this->_cni=$cni;
}
public function setDatenaissance($datenaissance)
{
    return $this->_datenaissance=$datenaissance;
}
public function setSalaire($salaire)
{
    return $this->_salaire=$salaire;
}
public function setNomemployeur($nomemployeur)
{
    return $this->_nomemployeur=$nomemployeur;
}
public function setRaisonsocial($raisonsocial)
{
    return $this->_raisonsocial=$raisonsocial;
}
public function setTelephoneEmployeur($telephone)
{
    return $this->_telephoneemploy=$telephone;
}
public function setAdresseEmployeur($adresseemployeur)
{
    return $this->_adresseemployeur=$adresseemployeur;
}
public function setNinea($ninea)
{
    return $this->_ninea=$ninea;
}
public function setEmail($Email)
{
    return  $this->_Email=$Email;
}
}
?>