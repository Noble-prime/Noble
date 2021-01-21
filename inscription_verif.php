<?php
session_start();
include "variables.php";
    if (isset($valider)) {
        if (empty($nom)) {
           $erreur="Nom laissé vide!";
        } elseif (empty($prenom)) {
           $erreur="Prénom laissé vide!";
        } elseif (empty($pseudo)) {
           $erreur="Pseudo laissé vide!";
        } elseif (empty($pass)) {
           $erreur="Mot de passe laissé vide!";
        } elseif ($pass!=$repass) {
           $erreur="Mots de passe non identiques!";
        } elseif (empty($email)) {
           $erreur="Email laissé vide!";
        } elseif (empty($tel)) {
           $erreur="Telephone laissé vide!";
        } else {
            require "bd_connect.php";
            $sellog=$bdd->prepare('SELECT pseudo FROM user WHERE pseudo=?');
            $selmot=$bdd->prepare('SELECT mot2pass FROM user WHERE mot2pass=? ');
            $selema=$bdd->prepare('SELECT email FROM user WHERE email=? ');
            $selcel=$bdd->prepare('SELECT tel FROM user WHERE tel=?');
            $sellog->execute(array($pseudo));
            $selmot->execute(array($pass_hache));
            $selema->execute(array($email));
            $selcel->execute(array($tel));
            $sellog->setFetchMode(PDO::FETCH_ASSOC);
            $selmot->setFetchMode(PDO::FETCH_ASSOC);
            $selema->setFetchMode(PDO::FETCH_ASSOC);
            $selcel->setFetchMode(PDO::FETCH_ASSOC);
            $log = $sellog->fetch();
            $mot = $selmot->fetch(); 
            $ema = $selema->fetch();
            $cel = $selcel->fetch();
            if ($log != 0) {
                $erreur = "Pseudo déjà utiliser";
                $sellog->closeCursor(); 
            }elseif($mot != 0){
                $erreur = "Mot de passe déjà utiliser";
                $selmot->closeCursor();
            }elseif($ema != 0){
                $erreur = "email déjà utiliser";
                $selema->closeCursor();
            }elseif($cel != 0){
                $erreur = "Veillez choisir un autre numero de telephone ";
                $selema->closeCursor();
            }else{
                $ins = $bdd->prepare('INSERT INTO  user (nom,prenom,pseudo, mot2pass, email,tel) VALUES(:nom,:prenom,:pseudo, :mot2pass,:email,:tel)');
                $ins->execute(array(
                    'nom' => $_POST['nom'],
                    'prenom' => $_POST['prenom'],
                    'pseudo' => $_POST['pseudo'],
                    'mot2pass' => $pass_hache,
                    'email' => $_POST["email"],
                    'tel' => $_POST['tel'],
                    )
                );
                header("location:index.php");
            }
               
    
               
                
        }
        
    }


