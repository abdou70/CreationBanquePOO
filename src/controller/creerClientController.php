<?php
spl_autoload_register('monautoload');
spl_autoload_register('monautoload1');
function monautoload($classname){
  $path='../model/';
  $extension='db.php';
  $full= $path.$extension;

  include_once $full;
}
function monautoload1($classname1){
    $path1='../Entite/';
    $extension1='cliententite.php';
    $full1= $path1.$extension1;

    include_once $full1;
}

/*namespace Cliencontroller;
require_once '../Entite/cliententite.php';
require_once '../model/db.php';
use Clientinitial;
use base;*?
//require_once '../Entite/cliententite.php';

// var_dump($_POST['creerClientSubmit']);
// echo("</br>");


   //var_dump($_POST);
    //die;

    
    
     /*$sql="insert into clientsimple (`id`, `nom`, `prenom`, `adresseclient`, `e-mail`,`numerotelephone`,
      `profession`,`cni`, `datenaissance`, `salaire`) values(NULL,'$nomclient',
      '$prenomclient','$adresseclient','$emailclient','$phoneclient','$professionclient','$numident',
      '$datenais', $salaireclient)";
     $a = $db->exec($sql);*/
    //   $tab = [
    //       'nom'=>$nomclient,
    //       'prenom'=>$prenomclient,
    //       'adresseclient'=>$adresseclient,
    //       'e-mail'=>$emailclient,
    //       'numerotelephone'=>$phoneclient,
    //       'profession'=>$professionclient,
    //       'cni'=>$numident,
    //       'datenaissance'=>$datenais
    //     ];
        //$a = $db->prepare($sql)->execute($tab);

        // echo"<br/><br/><br/>";
        // var_dump($sql);
        // $b = $a->execute($tab);
    //     echo"<br/><br/><br/>";
    //  var_dump($tab);

   /* if($a){
     echo 'le client est inserer';
  }
     else{
     echo 'le client est non inserer';
     }
 } else {
    if($clientChoisi=='3'){
        $salaireclient = (float) $salaireclient;
        $sql="insert into clientsimple (`id`, `nom`, `prenom`, `adresseclient`, `e-mail`,`numerotelephone`, 
        `profession`,`cni`, `datenaissance`, `salaire`, `nomemployeur`, `raisonsocial`, `telephoneemploy`, 
        `adresseemployeur`, `ninea`, `Email`) values(NULL,'$nomclient','$prenomclient','$adresseclient',
        '$emailclient','$phoneclient','$professionclient','$numident','$datenais', $salaireclient,'$moral',
        '$raismoral','$telemoral','$adresemoral','$ninea','$emailmoral')";
     $a = $db->exec($sql);
     if($a){
        echo 'le client est inserer
     }
        else{
        echo 'le client est non inserer';
        }
    }
 } if($clientChoisi=='4'){
        //var_dump($_POST);
        // die;

         $sql="insert into clientmoral(`id`, `nom`, `raison social`, `telephone`, `adresse`, `ninea`, `email`)
         values(null,'$moral','$raismoral','$telemoral','$adresemoral','$ninea','$emailmoral')";
         $a= $db->exec($sql);
         if($a){
            echo 'le client est inserer';
        }else{
            echo 'le client est non insrer';
        }

    }
}
?>*/
/* ------------------------........-----------------------------------------------

function insererleclient()
     {
    $db= new baseDonnee();
    $db->seconnecter();
    $nom = $_POST['nomclient'];
    $prenom = $_POST['prenomclient'];
    $adresseclient = $_POST['adresseclient'];
    $email1 = $_POST['emailclient'];
    $numerotelephone = $_POST['phoneclient'];
    $profession = $_POST['professionclient'];
    $cni = $_POST['numident'];
    $datenaissance = $_POST['datenais'];
    $salaire = $_POST['salaireclient'];
    $nomemployeur = $_POST['moral'];
    $raisonsocial = $_POST['raismoral'];
    $telephoneemploy = $_POST['telemoral'];
    $adresseemployeur = $_POST['adresemoral'];
    $ninea = $_POST['ninea'];
    $Email = $_POST['emailmoral'];
    $query = $db->getDb()->prepare($db->ajouterclient());
    $array =array(
        'nom' => $nom,
        'prenom' => $prenom,
        'adresseclient' => $adresseclient,
        'email1' => $email1,
        'numerotelephone' => $numerotelephone,
        'profession' => $profession,
        'cni' => $cni,
        'datenaissance' => $datenaissance,
        'salaire' => $salaire,
        'nomemployeur' => $nomemployeur,
        'raisonsocial' => $raisonsocial,
        'telephoneemploy' => $telephoneemploy,
        'adresseemployeur' => $adresseemployeur,
        'ninea' => $ninea,
        'Email' => $Email
    );
     $a=$query->execute($array);
}

if(isset($_POST['creerClientSubmit'])){
    extract($_POST);

   if($clientChoisi=='1'){
       insererleclient();
      // var_dump($_POST);
     //  die;
   }else{
       if($clientChoisi=='3'){
           insererleclient();
       }
   }
}
function insererleclient1()
{
    $db= new baseDonnee();
    $db->seconnecter();
    $nom = $_POST['moral'];
    $raisonsocial = $_POST['raismoral'];
    $telephone = $_POST['telemoral'];
    $adresse = $_POST['adresemoral'];
    $ninea = $_POST['ninea'];
    $email = $_POST['emailmoral'];
    $query = $db->getDb()->prepare($db->ajoutermoral());
    $array = array(
    'nom' => $nom,
    'raisonsocial' => $raisonsocial,
    'telephone' => $telephone,
    'adresse' => $adresse,
    'ninea' => $ninea,
    'email' => $email
    );
   // var_dump($_query);
   // die;
    $a = $query->execute($array);
}
if(isset($_POST['creerClientSubmit'])){
    extract($_POST);
// var_dump($_POST);
// die;
   if($clientChoisi=='4'){
       insererleclient1();
   }
}
-------------------......------*/


 function insererleclient($data)
 {
     //extract($data);
     //var_dump($_POST);
     //die();
    $db= new baseDonnee();
    $client= new Clientinitial\client();
    $db->seconnecter(); 
    $client-> setNom($data['nomclient']);
    $client -> setPrenom($data['prenomclient']);
    $client -> setAdresse($data['adresseclient']);
    $client-> setEmail1($data['emailclient']);
    $client -> setNumerotelephone($data['phoneclient']);
    $client-> setProfession ($data['professionclient']);
    $client-> setCni($data['numident']);
    $client -> setDatenaissance($data['datenais']);
    $client -> setSalaire((float)$data['salaireclient']);
    $client-> setNomemployeur($data['moral']);
    $client -> setRaisonsocial($data['raismoral']);
    $client -> setTelephoneEmployeur($data['telemoral']);
    $client -> setAdresseEmployeur($data['adresemoral']);
    $client -> setNinea($data['ninea']);
    $client -> setEmail($data['emailmoral']);
    $query = $db->getDb()->prepare($db->ajouterclient());

    $valu=$client->getNom();
//    var_dump($valu);
//    die();
    $array = array(
        'nom' => $valu,
        'prenom' => $client->getPrenom(),
        'adresseclient' => $client->getAdresse(),
        'email1' => $client-> getEmail1(),
        'numerotelephone' => $client-> getNumerotelephone(),
        'profession' => $client-> getProfession(),
        'cni' => $client-> getCni(),
        'datenaissance' => $client-> getDatenaissance(),
        'salaire' => $client-> getSalaire(),
        'nomemployeur' => $client->getNomemployeur(),
        'raisonsocial'=> $client ->getRaisonsocial(),
        'telephoneemploy' => $client->getTelephone(),
        'adresseemployeur' => $client->getAdresseEmploy(),
        'ninea' => $client->getNinea(),
        'Email' => $client->getEmail() 
    );
    $a=$query->execute($array); 
}
    if(isset($_POST['creerClientSubmit'])){
       if($_POST['clientChoisi']=='1'){
           insererleclient($_POST);
         // var_dump($_POST);
          //die;
          //echo "le client est inserer";
       }
        else{
           if($_POST['clientChoisi']=='3'){
               insererleclient($_POST);
           }
      }
    }
    function insererleclient1($_data)
    {
    $db = new baseDonnee();
    $bd = new Clientinitial\client();
    $db->seconnecter();
    $bd -> setNomemployeur($_data['moral']);
    $bd -> setRaisonsocial($_data['raismoral']);
    $bd -> setTelephoneEmployeur($_data['telemoral']);
    $bd -> setAdresseEmployeur($_data['adresemoral']);
    $bd -> setNinea($_data['ninea']);
    $bd -> setEmail($_data['emailmoral']);
    $query = $db->getDb()->prepare($db->ajoutermoral());
    $array = array(
    'nom' => $bd->getNomemployeur(),
    'raisonsocial' => $bd ->getRaisonsocial(),
    'telephone' => $bd->getTelephone(),
    'adresse' => $bd->getAdresseEmploy(),
    'ninea' => $bd->getNinea(),
    'email' => $bd->getEmail()
    );
    $a = $query->execute($array);
    }
    if(isset($_POST['creerClientSubmit'])){
        extract($_POST);
    // var_dump($_POST);
    // die;
       if($_POST['clientChoisi']=='4'){
           insererleclient1($_POST);
       }
    }