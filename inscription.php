<?php
include 'inscription_verif.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>E Store - eCommerce HTML Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="eCommerce HTML Template Free Download" name="keywords">
        <meta content="eCommerce HTML Template Free Download" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <?php   echo '<pre>';
                var_dump($_POST);
                echo '</pre>';?>
    <?php include 'header.php';?>
    
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Acceuil</a></li>
                    <li class="breadcrumb-item"><a href="#">Produits</a></li>
                    <li class="breadcrumb-item active">Login & Register</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Login Start -->
        <div class="login">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">    
                        <div class="register-form">
                        <span class="erreur"><?php echo $erreur ?></span>
                            <div class="row">
                                <form method="POST" action="" name="" class="row">
                                    <div class="col-md-6">
                                        <label>Nom</label>
                                        <input class="form-control" type="text" placeholder="Nom" name="nom" value="<?php echo $nom?>">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Prenom</label>
                                        <input class="form-control" type="text" placeholder="Prenom" name="prenom" value="<?php echo $prenom?>">
                                    </div>
                                    <div class="col-md-6">
                                        <label>pseudo</label>
                                        <input class="form-control" type="text" placeholder="Pseudonyme" name="pseudo" value="<?php echo $pseudo?>">
                                    </div>      
                                     <div class="col-md-6">
                                        <label>Mot de Passe</label>
                                        <input class="form-control" type="password" placeholder="Mot de passe" name="pass" value="<?php echo $pass?>">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Confirmez mot de passe</label>
                                        <input class="form-control" type="password" placeholder="Confirmez mot de passe" name="repass" value="<?php echo $repass?>">
                                    </div>
                                    <div class="col-md-6">
                                        <label>E-mail</label>
                                        <input class="form-control" type="text" placeholder="E-mail" name="email" value="<?php echo $email?>">
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <label>Telephone</label>
                                        <input class="form-control" type="tel" name="tel" placeholder="08080808" value="<?php echo $tel?>" pattern="[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}"/><br/>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn" name="valider">S'inscrit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Login End -->
        <?php include 'footer.php' ?>
    </body>
</html>
