<?php
//utilisateur
@$nom= htmlspecialchars($_POST["nom"]) ;
@$prenom=htmlspecialchars($_POST["prenom"]);
@$pseudo=htmlspecialchars($_POST["pseudo"]);
@$pass=htmlspecialchars($_POST["pass"]);
@$repass=htmlspecialchars($_POST["repass"]);
@$email=htmlspecialchars($_POST["email"]);
@$tel=htmlspecialchars($_POST["tel"]);
@$date=htmlspecialchars($_POST["date_naissance"]);
@$genre=htmlspecialchars($_POST["genre"]);
@$role=0;
@$image=$_POST['image'];
@$valider=$_POST["valider"];
@$valider1=$_POST["valider1"];
@$pass_hache = hash('sha384', $pass);

//User_connect
@$pseudo=$_POST["pseudo"];
@$pass=$_POST["pass"];
@$pass_hach = hash('sha384',$pass);
@$valider=$_POST["valider"];
@$erreur="";

//erreur
$erreur="";
$erreur_nom="";
$erreur_prenom="";
$erreur_pseudo="";
$erreur_pass="";
$erreur_repass="";
$erreur_email="";
$erreur_tel="";
$erreur_date="";
$erreur_genre="";

//recup Date
$date_connex=date("Y-m-d");
$heure_connex=date("h:i:s");
$jour_connex = date("l");

//session
$_SESSION['user']="";
$_SESSION["autoriser"] = "";
$_SESSION['info']="";
$_SESSION['role'] = "";
