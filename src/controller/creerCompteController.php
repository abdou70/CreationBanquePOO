<?php
require_once '../model/db.php';
require_once '../Entite/compteentite.php';

/*if(isset($_POST['creerCompteSubmit'])){
    extract($_POST);*/
   // var_dump($_POST);
     //   die;
    /* ["numagence"]=> string(8) "def2322u
*/ 

    /*if($compteChoisi=='1'){
        
    $fraisOuv = (float)$frais;
    $sdl="insert into comptefrais (`id`, `NumeroCompte`, `numeroagence`, `cleRIB`, 
    `DateOuverture`, `MontantInitial`, `FraisOuverture`) values(null,'$numagence','$numcompte','$rib','$date',$montant0,$frais)";
     $a=$db->exec($sdl);
     if{
        echo 'les donnees sont entres dans la table';
     }else{
         echo 'les donnees ne sont pas envoyer';
     }

    
    }
}*/


function nouveaucompte()
     {
    $db= new baseDonnee();
    $db->seconnecter();
    $numeroCompte = $_POST['numagence'];
    $numeroagence = $_POST['numcompte'];
    $cleRIB = $_POST['rib'];
    $DateOuverture = $_POST['date'];
    $MontantInitial = (float)$_POST['montant0'];
    $FraisOuverture = (float)$_POST['frais'];
    $DateBloquage = NULL;
    $DateDebloquage = NULL;
    $query = $db->getDb()->prepare($db->comptexewel());
    $array =array(
        'NumeroCompte' => $numeroCompte,
        'numeroagence' => $numeroagence,
        'cleRIB' => $cleRIB,
        'DateOuverture' => $DateOuverture,
        'MontantInitial' => $MontantInitial,
        'FraisOuverture' => $FraisOuverture,
        'DateBloque' => $DateBloquage,
        'DateDebloquage' => $DateDebloquage
    );
    $a = $query->execute($array);
   // var_dump($a);
    //die;
}
if(isset($_POST['creerCompteSubmit'])){
    extract($_POST);

    //var_dump($_POST);
   // die;
   if($compteChoisi=='1'){
       nouveaucompte();
   }
}
function nouveaucompte1()
     {
    $db= new baseDonnee();
    $db->seconnecter();
    $numeroCompte = $_POST['numagence'];
    $numeroagence = $_POST['numcompte'];
    $cleRIB = $_POST['rib'];
    $DateOuverture = $_POST['date'];
    $MontantInitial = (float)$_POST['montant0'];
    $FraisOuverture = (float)$_POST['frais'];
    $DateBloquage = $_POST['date1'];
    $DateDebloquage = $_POST['date2'];
    $query = $db->getDb()->prepare($db->comptexewel());
    $array =array(
        'NumeroCompte' => $numeroCompte,
        'numeroagence' => $numeroagence,
        'cleRIB' => $cleRIB,
        'DateOuverture' => $DateOuverture,
        'MontantInitial' => $MontantInitial,
        'FraisOuverture' => $FraisOuverture,
        'DateBloque' => $DateBloquage,
        'DateDebloquage' => $DateDebloquage
    );
    $a = $query->execute($array);
}
if(isset($_POST['creerCompteSubmit'])){
    extract($_POST);
  
     if($compteChoisi=='3'){

        nouveaucompte1();
     }
}
function compteagios1()
{
    $db= new baseDonnee();
    $db->seconnecter();
    $numeroagence = $_POST['numagence'];
    $numeroCompte = $_POST['numcompte'];
    $cleRIB = $_POST['rib'];
    $DateOuverture = $_POST['date'];
    $MontantInitial =(float)$_POST['montant0'];
   // $FraisOuverture = NULL;
   // $DateBloquage = NULL;
   // $DateDebloquage = NULL;
    $Agios = (float)$_POST['agios'];
    $query = $db->getDb()->prepare($db->compteagios());
    $array =array(
        'NumeroAgence' => $numeroagence,
        'NumeroCompte' => $numeroCompte, 
        'CleRIB' => $cleRIB, 
        'DateOuverture' => $DateOuverture, 
        'MontantInitial' => $MontantInitial, 
        //'FraisOuverture' =>$FraisOuverture,
        //'DateBloque' => $DateBloquage,
       // 'DateDebloquage' => $DateDebloquage,
        'Agios' => $Agios
    );
     $query->execute($array);
}
if(isset($_POST['creerCompteSubmit'])){
    extract($_POST);
   //  var_dump($_POST);
    //die;
     if($compteChoisi=='2'){

        compteagios1();
     }
}
/*
function nouveaucompte()
     {
    $db= new baseDonnee();
    $db->seconnecter();
    $numeroagence = $_POST['numagence'];
    $numerocompte = $_POST['numcompte'];
    $cleRIB = $_POST['rib'];
    $DateOuverture = $_POST['date'];
    $MontantInitial = (float)$_POST['montant0'];
    $FraisOuverture = (float)$_POST['frais'];
    $DateBloquage = NULL;
    $DateDebloquage = NULL;
    $query = $db->getDb()->prepare($db->comptexewel());
    $array =array(
        'numeroagence' => getNumeroagence(),$numeroagence,
        'NumeroCompte' => getNumerocompte(),$numerocompte,
        'cleRIB' => getClerib(),$cleRIB,
        'DateOuverture' => getDateouverture(),$DateOuverture,
        'MontantInitial' => getMontantinitial(),$MontantInitial,
        'FraisOuverture' => getFraisouverture(),$FraisOuverture,
        'DateBloque' => getDatebloquage(),$DateBloquage,
        'DateDebloquage' => getDatedebloquage()$DateDebloquage
    );
    $a = $query->execute($array);
   // var_dump($a);
    //die;
}
if(isset($_POST['creerCompteSubmit'])){
    extract($_POST);

    //var_dump($_POST);
   // die;
   if($compteChoisi=='1'){
       nouveaucompte();
   }
}
--------------------------##########-------------------*/