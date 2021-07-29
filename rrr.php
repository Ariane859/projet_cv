include("Connexion.php");

    if (isset($_POST['submit'])) {

        if(isset($_POST['photo']) && isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['poste'])
        && isset($_POST['email']) && isset($_POST['numero']) && isset($_POST['adresse']) && isset($_POST['postal'])
        && isset($_POST['ville'])
        )
        {
          $photo=$_POST['photo'];
          $prenom=$_POST['prenom'];
          $nom=$_POST['nom'];
          $poste=$_POST['poste'];
          $email=$_POST['email'];
          $numero=$_POST['numero'];
          $adresse=$_POST['adresse'];
          $postal=$_POST['postal'];
          $ville=$_POST['ville'];
      }
      elseif(isset($_POST['description']) && isset($_POST['competence']) && isset($_POST['diplome']) && isset($_POST['etablissement']) &&
  isset($_POST['vill']) && isset($_POST['datedebut']) && isset($_POST['datedefin']) && isset($_POST['descriptionformation']))
  {
    $description=$_POST['description'];
    $competence=$_POST['competence'];
    $diplome=$_POST['diplome'];
    $etablissement=$_POST['etablissement'];
    $vill=$_POST['vill'];
    $datedebut=$_POST['datedebut'];
    $datedefin=$_POST['datedefin'];
    $descriptionformation=$_POST['descriptionformation'];
    }
  
          $sql="INSERT INTO `details`(`photo`,`prenom`,`nom`,`poste`,`email`,`numero`,`adresse`,`postal`,`ville`)values(:photo,:prenom,:nom,:poste,:email,:numero,:adresse,:postal,:ville)";
  
          $res=$connection->prepare($sql);
      
          $exec=$res->execute(array(
              ":photo"=>$photo,
              ":prenom"=>$prenom,
              ":nom"=>$nom,
              ":poste"=>$poste,
              ":email"=>$email,
              ":numero"=>$numero,
              ":adresse"=>$adresse,
              ":postal"=>$postal,
              ":ville"=>$ville));

    $sql2="INSERT INTO `profile`(`description`)values(:description)";
    $sql3="INSERT INTO `competence`(`competence`)values(:competence)";
    $sql4="INSERT INTO `formation`(`diplome`,`etablissement`,`vill`,`datedebut`,`datedefin`,`descriptionformation`)values(:diplome,:etablissement,:ville,:datedebut,:datedefin,:descriptionformation)";

    $res2=$connection->prepare($sql2);
    $res3=$connection->prepare($sql3);
    $res4=$connection->prepare($sql4);

    $exec2=$res2->execute(array(
        ":description"=>$description
    ));
    $exec3=$res3->execute(array(
        ":competence"=>$competence
    ));
    $exec4=$res4->execute(array(
        ":diplome"=>$diplome,
        ":etablissement"=>$etablissement,
        ":vill"=>$vill,
        ":datedebut"=>$datedebut,
        ":datedefin"=>$datedefin,
        ":descriptionformation"=>$descriptionformation
    ));

}     
?>

