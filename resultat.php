<DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <link rel = "stylesheet" href="resultat.css">
        <title>MonCV</title>
    </head>
    <body>
    <?php
        include 'MaclassCV.php';
        include("Connexion.php");
         /*$photo=$_POST['photo'];
          $prenom=$_POST['prenom'];
          $nom=$_POST['nom'];
          $poste=$_POST['poste'];
          $email=$_POST['email'];
          $numero=$_POST['numero'];
          $adresse=$_POST['adresse'];
          $postal=$_POST['postal'];
          $ville=$_POST['ville'];*/

    include("Connexion.php");

    if (isset($_POST['submit'])) {

      if(isset($_POST['photo']) && isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['poste'])
      && isset($_POST['email']) && isset($_POST['numero']) && isset($_POST['adresse']) && isset($_POST['postal'])
      && isset($_POST['ville']) && isset($_POST['description']) && isset($_POST['competence']) && isset($_POST['diplome']) && isset($_POST['etablissement']) &&
      isset($_POST['vill']) && isset($_POST['datedebut']) && isset($_POST['datedefin']) && isset($_POST['descriptionformation']) && isset($_POST['post']) &&
      isset($_POST['employeur']) && isset($_POST['vil']) && isset($_POST['datedebu'])&& isset($_POST['datefin'])&& isset($_POST['descriptio'])&& isset($_POST['langue'])
      && isset($_POST['niveau'])&& isset($_POST['centreInteret'])
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
        $description=$_POST['description'];
        $competence=$_POST['competence'];
        $diplome=$_POST['diplome'];
        $etablissement=$_POST['etablissement'];
        $vill=$_POST['vill'];
        $datedebut=$_POST['datedebut'];
        $datedefin=$_POST['datedefin'];
        $descriptionformation=$_POST['descriptionformation'];
        $post=$_POST['post'];
        $employeur=$_POST['employeur'];
        $vil=$_POST['vil'];
        $datedebu=$_POST['datedebu'];
        $datefin=$_POST['datefin'];
        $descriptio=$_POST['descriptio'];
        $langue=$_POST['post'];
        $niveau=$_POST['post'];
        $centre=$_POST['centreInteret'];
    }

        $sql="INSERT INTO `details`(`photo`,`prenom`,`nom`,`poste`,`email`,`numero`,`adresse`,`postal`,`ville`)values(:photo,:prenom,:nom,:poste,:email,:numero,:adresse,:postal,:ville)";
        $sql2="INSERT INTO `profile`(`description`)values(:description)";
        $sql3="INSERT INTO `competence`(`competence`)values(:competence)";
        $sql4="INSERT INTO `formation`(`diplome`,`etablissement`,`vill`,`datedebut`,`datedefin`,`descriptionformation`)values(:diplome,:etablissement,:vill,:datedebut,:datedefin,:descriptionformation)";
        $sql5="INSERT INTO `expérience`(`poste`,`employeur`,`ville`,`datedebut`,`datefin`,`description`)values(:post,:employeur,:vil,:datedebu,:datefin,:descriptio)";
        $sql6="INSERT INTO `langue`(`langue`,`niveau`)values(:langue,:niveau)";
        $sql7="INSERT INTO `centreinteret`(`centre`)values(:centre)";

        $res=$connection->prepare($sql);
        $res2=$connection->prepare($sql2);
        $res3=$connection->prepare($sql3);
        $res4=$connection->prepare($sql4);
        $res5=$connection->prepare($sql5);
        $res6=$connection->prepare($sql6);
        $res7=$connection->prepare($sql7);
    
    
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

            $exec5=$res5->execute(array(
                ":post"=>$post,
                ":employeur"=>$employeur,
                ":vil"=>$vil,
                ":datedebu"=>$datedebu,
                ":datefin"=>$datefin,
                ":descriptio"=>$descriptio
            ));

            $exec6=$res6->execute(array(
                ":langue"=>$langue,
                ":niveau"=>$niveau
            ));

            $exec7=$res7->execute(array(
                ":centre"=>$centre
            ));
     

}        
          $cv = new MaclassCV($photo,$prenom,$nom,$poste,$email,$numero,$adresse,$postal,$ville);
    ?>
    <div class = "bienvenue">
    <h1><center>CURRICULUM VITAE<center><h1>
    </div>
    <div class="details">
    <p>
    <?php echo $cv->getPrenom(); ?>
    <?php echo $cv->getNom(); ?>
    </p>
    </div>
    </body>
</html>
