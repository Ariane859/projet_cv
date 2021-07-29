<?php

try {
    $connection=new PDO("mysql:host=localhost;dbname=cv","root","");
    $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} 
catch (PDOException $e) {
    echo "Connexion echoué" .$e->getMessage();
}
?>