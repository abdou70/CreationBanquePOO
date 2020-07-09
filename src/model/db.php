<?php
// function connectionDB(){
  /*  $host = 'localhost';
    $dbName = 'dbexo';
    $user = 'root';
    $password = '';

    try {
        $db = new PDO('mysql:host='.$host.';dbname='.$dbName, $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
        echo '<script>console.log("CONNECTED TO SERVER DB SUCCESSFULLY")</script>';
        
    }
     catch (Exception $e) {
        echo "<h1> Erreur </h1>";

    }*/
    // return $db;
// }
class baseDonnee{
    private$_host = 'mysql:host=localhost;dbname=dbexo';
    private$_user = 'root';
    private$_password = '';
    private$_db;

  public function getHost()
  {
     return $this->_host;
  }  

  public function getUsername()
  {
      return $this->_user;
  }
  public function getPassword()
  {
      return $this->_password;
  }
  
  public function getDb()
  {
      return $this->_db;
  }

  public function setDb($db)
  {
      return $this->_db=$db;
  }

  public function seconnecter()
  {
      try{
          $this->setDb(new PDO ($this->getHost(), $this->getUsername(),$this->getPassword()));
      }catch(Exception $e){
          die('Erreur :' . $e->getMessage);
      }

      }
  public function ajouterclient()
  {
    
      return 'insert into clientsimple(nom, prenom, adresseclient, email1, numerotelephone,
       profession, cni, datenaissance, salaire, nomemployeur, raisonsocial, telephoneemploy, adresseemployeur, ninea, Email)
        values(:nom, :prenom, :adresseclient,:email1, :numerotelephone, :profession, :cni, 
        :datenaissance, :salaire, :nomemployeur, :raisonsocial, :telephoneemploy, :adresseemployeur, :ninea, :Email)';
  }
  public function ajoutermoral()
  {
      return 'INSERT INTO `clientmoral`( `nom`, `raisonsocial`, `telephone`, `adresse`, `ninea`, `email`)
      values(:nom, :raisonsocial, :telephone, :adresse, :ninea, :email)';
  }
  public function comptexewel()
  {
       return 'INSERT INTO `comptefrais`( `NumeroCompte`, `numeroagence`, `cleRIB`, `DateOuverture`, `MontantInitial`, `FraisOuverture`, `DateBloquage`, `DateDebloquage`)values(:NumeroCompte, :numeroagence, :cleRIB, :DateOuverture, :MontantInitial, :FraisOuverture, :DateBloque, :DateDebloquage)';
  }
  public function compteagios()
  {
      return 'INSERT INTO `compteagios`( `NumeroAgence`, `NumeroCompte`, `CleRIB`, `DateOuverture`, `MontantInitial`, `Agios`) VALUES(:NumeroAgence, :NumeroCompte, :CleRIB, :DateOuverture, :MontantInitial, :Agios)';
  }
}