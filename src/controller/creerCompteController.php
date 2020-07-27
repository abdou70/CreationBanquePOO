<?php
spl_autoload_register('myautoload');
spl_autoload_register('myautoload1');
function myautoload($classname){
  $path='../model/';
  $extension='db.php';
  $full= $path.$extension;

  include_once $full;
}
function myautoload1($classname1){
    $path1='../Entite/';
    $extension1='compteentite.php';
    $full1= $path1.$extension1;

    include_once $full1;
}


/*namespace Comptecontroller;

require_once '../model/db.php';
require_once '../Entite/compteentite.php';

use clientcompte;*/
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


function nouveaucompte($data)
     {
    $db= new baseDonnee();
<<<<<<< HEAD
    $compte=new clientcompte\client();
=======
    $compte=new comptetable();
>>>>>>> 3ac44eabca066f3116be32f0666510769e58fce9
    $db->seconnecter();
    $compte -> setNumeroagence($data['numagence']);
    $compte -> setNumerocompte($data['numcompte']);
    $compte -> setClerib($data['rib']);
    $compte ->setDateouverture($data['date']);
    $compte -> setMontantinitial((float)$data['montant0']);
    $compte -> setFraisouverture((float)$data['frais']);
    $compte -> setDatebloquage($data['date1']);
    $compte -> setDatedebloquage($data['date2']);
    $query = $db->getDb()->prepare($db->comptexewel());
    $array =array(
        'NumeroCompte' => $compte->getNumerocompte(),
        'numeroagence' => $compte->getNumeroagence(),
        'cleRIB' => $compte->getClerib(),
        'DateOuverture' => $compte->getDateouverture(),
        'MontantInitial' => $compte->getMontantinitial(),
        'FraisOuverture' => $compte->getFraisouverture(),
        'DateBloque' => NULL, //$compte->getDatebloquage(),
        'DateDebloquage' => NULL //$compte->getDatedebloquage()
    );
    $a = $query->execute($array);
   // var_dump($a);
   // die;
}
if(isset($_POST['creerCompteSubmit'])){
    //extract($_POST);

    //var_dump($_POST);
  // die;
   if($_POST['compteChoisi']=='1'){
       nouveaucompte($_POST);
<<<<<<< HEAD
       echo 'compte de nature 1 envoyer';
=======
>>>>>>> 3ac44eabca066f3116be32f0666510769e58fce9
   }
}
function nouveaucompte1($data)
     {
    $db= new baseDonnee();
<<<<<<< HEAD
    $compte1 = new clientcompte\client();
=======
    $compte1 = new comptetable();
>>>>>>> 3ac44eabca066f3116be32f0666510769e58fce9
    $db->seconnecter();
    $compte1 -> setNumeroagence($data['numagence']);
    $compte1 -> setNumerocompte($data['numcompte']);
    $compte1 -> setClerib($data['rib']);
    $compte1 -> setDateouverture($data['date']);
    $compte1 -> setMontantinitial((float)$data['montant0']);
    $compte1 -> setFraisouverture((float)$data['frais']);
    $compte1 -> setDatebloquage($data['date1']);
    $compte1 -> setDatedebloquage($data['date2']);
    $query = $db->getDb()->prepare($db->comptexewel());
    $array =array(
        'numeroagence' => $compte1->getNumeroagence(),
        'NumeroCompte' => $compte1->getNumerocompte(),
        'cleRIB' => $compte1->getClerib(),
        'DateOuverture' => $compte1->getDateouverture(),
        'MontantInitial' => $compte1->getMontantinitial(),
        'FraisOuverture' => $compte1->getFraisouverture(),
        'DateBloque' => $compte1->getDatebloquage(),
        'DateDebloquage' => $compte1->getDatedebloquage()
    );
    $a = $query->execute($array);
}
if(isset($_POST['creerCompteSubmit'])){
    extract($_POST);
  
     if($_POST['compteChoisi']=='3'){

        nouveaucompte1($_POST);
<<<<<<< HEAD
        echo 'compte de nature 2 envoyer';
=======
>>>>>>> 3ac44eabca066f3116be32f0666510769e58fce9
     }
}
function compteagios1($data)
{
    $db= new baseDonnee();
<<<<<<< HEAD
    $compte2= new clientcompte\client();
=======
    $compte2= new comptetable();
>>>>>>> 3ac44eabca066f3116be32f0666510769e58fce9
    $db->seconnecter();
    $compte2 -> setNumeroagence($data['numagence']);
    $compte2 -> setNumerocompte($data['numcompte']);
    $compte2 -> setClerib($data['rib']);
    $compte2 -> setDateouverture($data['date']);
    $compte2 -> setMontantinitial((float)$data['montant0']);
   // $FraisOuverture = NULL;
   // $DateBloquage = NULL;
   // $DateDebloquage = NULL;
    $compte2 -> setAgios((float)$data['agios']);
    $query = $db->getDb()->prepare($db->compteagios());
    $array =array(
        'NumeroAgence' => $compte2->getNumeroagence(),
        'NumeroCompte' => $compte2->getNumerocompte(), 
        'CleRIB' => $compte2->getClerib(), 
        'DateOuverture' => $compte2->getDateouverture(), 
        'MontantInitial' => $compte2->getMontantinitial(), 
        //'FraisOuverture' =>$FraisOuverture,
        //'DateBloque' => $DateBloquage,
       // 'DateDebloquage' => $DateDebloquage,
        'Agios' => $compte2->getAgios()
    );
     $query->execute($array);
}
if(isset($_POST['creerCompteSubmit'])){
    extract($_POST);
   //  var_dump($_POST);
    //die;
     if($_POST['compteChoisi']=='2'){

        compteagios1($_POST);
<<<<<<< HEAD
        echo 'les donnes sont envoyees';
=======
        echo 'les donnes sonvoye';
>>>>>>> 3ac44eabca066f3116be32f0666510769e58fce9
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