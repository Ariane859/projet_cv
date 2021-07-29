<!DOCTYPE html>
    <head>
        <meta charset ="UTF-8">
        <link rel="stylesheet" href="moncv.css">
        <link rel="stylesheet" href="bootstrap-5.0.0-beta3-dist/css/bootstrap.min.css">
        <title>monCV</title>
    </head>
    <body>
    <?php include("entete.php"); ?>
        <div class="form">
            <form method="post">
            <div class="formulaire">
                <h1>Détails Personnels</h1>
                <hr class="underline">
                <div class=form_group>
                 <label for ="photo">Photo</label>
                 <p><input type="number" name="photo" required="required" class="form-control"></p><br>
                </div>
                <div class=form_group>
                 <label for ="prenom">Prénom</label>
                 <p><input type="text" name="prenom" required="required" class="form-control"></p><br>
                </div>
                <div class=form_group>
                 <label for ="nom">Nom de famille</label>
                 <p><input type="text" name="nom" required="required" class="form-control"></p><br>
                </div>
                <div class=form_group>
                 <label for ="poste">Titre du poste</label>
                 <p><input type="text" name="poste" required="required" class="form-control"></p><br>
                </div>
                <div class=form_group>
                 <label for ="email">Adresse e-mail</label>
                 <p><input type="email" name="email" required="required" class="form-control"></p><br>
                </div>
                <div class=form_group>
                 <label for ="numero">Numéro de téléphone</label>
                 <p><input type="text" name="numero" required="required" class="form-control"></p><br>
                </div>
                <div class=form_group>
                 <label for ="adresse">Adresse</label>
                 <p><input type="text" name="adresse" required="required" class="form-control"></p><br>
                </div>
                <div class=form_group>
                 <label for ="postal">Code Postal</label>
                 <p><input type="text" name="postal" class="form-control"></p><br>
                </div>
                <div class=form_group>
                 <label for ="ville">Ville/Localité</label>
                 <p><input type="text" name="ville" required="required" class="form-control"></p><br>
                </div>
                </div>

                <div class="profile">
                    <h1>Profile</h1>
                    <hr class="underline">
                 <div class=form_group>
                 <label for ="description">Description</label>
                 <p><textarea name="description" class="form-control"></textarea></p>
                </div>
                </div>

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
                     <p><input type="text" name="vill" class="form-control"></p>
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

                <div class="expérience">
                    <h1>Expériences Professionnelles</h1>
                    <hr class="underline">
                    <div class=form_group>
                    <label for ="post">Poste</label>
                     <p><input type="text" name="post" class="form-control"></p>
                    </div>
                    <div class=form_group>
                    <label for ="employeur">Employeur</label>
                     <p><input type="text" name="employeur" class="form-control"></p>
                    </div>
                    <div class=form_group>
                    <label for ="vil">Ville</label>
                     <p><input type="text" name="vil" class="form-control"></p>
                    </div>
                    <div class=form_group>
                    <label for ="datedebu">Date de début</label>
                     <p><input type="date" name="datedebu" class="form-control"></p>
                    </div>
                    <div class=form_group>
                    <label for ="datefin">Date de fin</label>
                     <p><input type="date" name="datefin" class="form-control"></p>
                    </div>
                    <div class=form_group>
                    <label for ="descriptio">Description</label>
                    </p><textarea name="descriptio" type="text" class="form-control"></textarea></p>
                    </div>
                </div>

                <div class="langue">
                    <h1>Langues</h1>
                    <hr class="underline">
                    <div class=form_group>
                    <label for ="langue">Langue</label>
                     <p><input type="text" name="langue" class="form-control"></p>
                    </div>
                    <div class=form_group>
                    <label for ="niveau">Niveau</label>
                     <p>
                        <select name="niveau" class="form-control">
                            <option value="débutant">Débutant</option>
                            <option value="intermédiaire">Intermédiaire</option>
                            <option value="courant">Courant</option>
                            <option value="maternelle">Langue martenelle</option>
                        </select>
                     </p>
                    </div>
                </div>

                <div class="centre">
                    <h1>Centre d'Interet</h1>
                    <hr class="underline">
                    <div class=form_group>
                    <label for ="centreInteret">Centre d'Interet</label>
                     <p><input type="text" name="centreInteret" class="form-control"></p>
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
        $langue=$_POST['langue'];
        $niveau=$_POST['niveau'];
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
    
    
        $res->execute(array(
            ":photo"=>$_POST['photo'],
            ":prenom"=>$_POST['prenom'],
            ":nom"=>$_POST['nom'],
            ":poste"=>$_POST['poste'],
            ":email"=>$_POST['email'],
            ":numero"=>$_POST['numero'],
            ":adresse"=>$_POST['adresse'],
            ":postal"=>$_POST['postal'],
            ":ville"=>$_POST['ville']));

            $res2->execute(array(
                ":description"=>$_POST['description']
            ));

            $res3->execute(array(
                ":competence"=>$_POST['competence']
            ));

            $res4->execute(array(
                ":diplome"=>$_POST['diplome'],
                ":etablissement"=>$_POST['etablissement'],
                ":vill"=>$_POST['vill'],
                ":datedebut"=>$_POST['datedebut'],
                ":datedefin"=>$_POST['datedefin'],
                ":descriptionformation"=>$_POST['descriptionformation']
            ));

            $res5->execute(array(
                ":post"=>$_POST['post'],
                ":employeur"=>$_POST['employeur'],
                ":vil"=>$_POST['vil'],
                ":datedebu"=>$_POST['datedebu'],
                ":datefin"=>$_POST['datefin'],
                ":descriptio"=>$_POST['descriptio']
            ));

            $res6->execute(array(
                ":langue"=>$_POST['langue'],
                ":niveau"=>$_POST['niveau']
            ));

            $res7->execute(array(
                ":centre"=>$_POST['centreInteret'] 
            ));
        
    }     
?>
   </body>
</html>

