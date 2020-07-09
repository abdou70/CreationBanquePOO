<?php
require_once '../model/db.php';
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


function insererleclient()
 {
    $db= new baseDonnee();
    $bd= new tableclient();
    $db->seconnecter(); 
    $nom= $_POST['nomclient'] ;
    $prenom = $_POST['prenomclient'];
    $adresseclient = $_POST['adresseclient'];
    $email1 = $_POST['emailclient'];
    $numerotelephone = $_POST['phoneclient'];
    $profession= $_POST['professionclient'];
    $cni = $_POST['numident'];
    $datenaissance = $_POST['datenais'];
    $salaire = $_POST['salaireclient'];
    $nomemployeur = $_POST['moral'];
    $raisonsocial = $_POST['raismoral'];
    $telephoneEmployeur = $_POST['telemoral'];
    $adresseEmployeur = $_POST['adresemoral'];
    $ninea = $_POST['ninea'];
    $Email = $_POST['emailmoral'];
    $query = $db->getDb()->prepare($db->ajouterclient());
    $array = array(
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
        'telephoneemploy' => $telephoneEmployeur,
        'adresseemployeur' => $adresseEmployeur,
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
          // die;
       }else{
           if($clientChoisi=='3'){
               insererleclient();
           }
       }
    }
    function insererleclient1()
    {
    $db = new baseDonnee();
    $bd = new tableclient();
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