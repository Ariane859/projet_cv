<!DOCTYPE html>
    <head>
        <meta charset ="UTF-8">
        <link rel="stylesheet" href="autres.css">
        <link rel="stylesheet" href="bootstrap-5.0.0-beta3-dist/css/bootstrap.min.css">
        <title>monCV</title>
    </head>
    <body>
    <?php include("entete.php"); ?>
        <div class="form">
            <form method="post">
               

                <div class="competence">
                    <h1>Competence</h1>
                    <hr class="underline">
                 <div class=form_group>
                 <label for ="competence">Compétences</label>
                 <p><input type="text" name="competence" class="form-control"></p>
                </div>
                </div>

                <div class="formations">
                    <h1>Formations</h1>
                    <hr class="underline">
                    <div class=form_group>
                    <label for ="diplome">Diplome</label>
                     <p><input type="text" name="diplome" class="form-control"></p>
                    </div>
                    <div class=form_group>
                    <label for ="etablissement">Etablissement</label>
                     <p><input type="text" name="etablissement" class="form-control"></p>
                    </div>
                    <div class=form_group>
                    <label for ="vill">Ville</label>
                     <p><input type="text" name="ville" class="form-control"></p>
                    </div>
                    <div class=form_group>
                    <label for ="datedebut">Date de début</label>
                     <p><input type="date" name="datedebut" class="form-control"></p>
                    </div>
                    <div class=form_group>
                    <label for ="datedefin">Date de fin</label>
                     <p><input type="date" name="datedefin" class="form-control"></p>
                    </div>
                    <div class=form_group>
                    <label for ="descriptionformation">Description</label>
                    </p><textarea name="descriptionformation" type="text" class="form-control"></textarea></p>
                    </div>
                </div>

                </div>
                    <div class="bouton">
                        <p><input type="submit" name="submit" value="Valider"></p> 
                    </div>
            </form>
        </div>
        <?php

include("Connexion.php");

if (isset($_POST['submit'])) {

  if(isset($_POST['description']) && isset($_POST['competence']) && isset($_POST['diplome']) && isset($_POST['etablissement']) &&
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

    $sql2="INSERT INTO `profile`(`description`)values(:description)";
    $sql3="INSERT INTO `competence`(`competence`)values(:competence)";
    $sql4="INSERT INTO `formation`(`diplome`,`etablissement`,`vill`,`datedebut`,`datedefin`,`descriptionformation`)values(:diplome,:etablissement,:vill,:datedebut,:datedefin,:descriptionformation)";

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

    </body>
    </html>

   
