<?php
try{
    $db= new PDO ('mysql:host=localhost;dbname=utilisateur','root','');
    $db->setattribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }   
catch(PDOException $e)
    {
        die('Erreur:'. $e->getMessage());
    }
?>