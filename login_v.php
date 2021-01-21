<?php
include "bd_connect.php";

  if (isset($valider1)) {
    if (empty($pseudo)) {
      $erreur = "Pseudo laissé vide!";
    }elseif(empty($pass)) {
           $erreur = "mot de passe laissé vide!";
    } else {
      if ((isset($pseudo)) && (isset($pass))) {
        $sel=$bdd->prepare('SELECT * FROM membre WHERE pseudo=? ');
        $sel->execute(array($pseudo,));
        $sel->setFetchMode(PDO::FETCH_ASSOC);
        $tab = $sel->fetch();
        echo '<pre>';
        var_dump($tab);
        echo '</pre>';
        if ($tab == false) {
          $erreur = "login  incorrect";
        }elseif($tab['mot2pass'] !== $pass_hach) {
          $erreur = "Mot de passe incorrect";
        }else{
            $_SESSION['user']=$tab['nom'];
            $_SESSION["autoriser"] = 1;
            $_SESSION['info']=strtoupper($tab["nom"])." ".ucfirst(strtolower($tab["prenom"]));
            $_SESSION['role'] = $tab['role'];
        }
      }
    }
  }      