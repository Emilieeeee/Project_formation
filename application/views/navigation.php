

<!-- head et nav -->
  
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title>navigation</title>
        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
           <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="<?= base_url("assets/css/style.css"); ?>">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        ></script>

</head>
  


<body>
<header > 

<nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-center sticky-top"> <span>
<img height='60px' width="auto" id=" logo"  src= <?= base_url("assets/images/jarditou_logo.jpg"); ?> >
  </span>
  <span>
  <ul  class="nav justify-content-center " >
  <li class="nav-item"><a class="nav-link btn-outline-success " 
    href="<?php if($this->session->user){echo site_url('Produits/bienvenue');}
          else {echo site_url('Produits/liste');} ?>" 
         

          title="retourner à l'acceuil du site"> Accueil </a></li>
  <li class="nav-item"><a class="nav-link btn-outline-success " href="<?= site_url('produits/liste') ;?>" title="début de liste produit ">Produit</a></li>

  <?php if ($this->session->user->Admin=1): ?>
  <li class="nav-item"><a class="nav-link btn-outline-success " href="<?= site_url('produits/ajout')?>" title="Ajouter un produit">Nouveau produit</a></li>

<li class="nav-item"><a class="nav-link btn-outline-success " href="<?= site_url('produits/ajout_categorie')?>" title="Ajouter un produit">Nouvelle catégorie</a></li>

  <?php else: ?>
    <li class="nav-item"><a class="nav-link btn-outline-success " href="<?= site_url('Panier/listePanier')?>" title="panier">Panier</a></li>
  <?php endif; ?>

<li class="nav-item">
<?php if ($this->session->user): ?>
  <a class="nav-link btn-outline-success" href="<?= site_url('Users/deconnexion')?>" title="page de deconnexion"> <i class="fas fa-user"></i> Deconnexion </a>
                                     
 <?php else: ?>                               
   <a class="nav-link btn-outline-success" href="<?= site_url('Users/connexion')?>" title="page de connexion"> Connexion </a>                                 
 <?php endif; ?>
  </li>



  
  </ul>

  </span>
  <span>
  <form class="form-inline " action="Fiche_produit.php " method="post"  >
    <input class="form-control mr-sm-2" type="search"  aria-label="Search" name="recherche">
    <button class="btn btn-sm btn-outline-success my-2 my-sm-0" type="submit" > Recherche par id </button>
  </form>
  </span>
  

</nav>

<div class="row justify-content-center">

  <?php if ($this->session->user): ?>
<div class="col-10  ">
  Session de 
   <?php 
   //afficher l'attribut utilisateur 'nom' de la variable de session 'user'
     echo $this->session->user->utilisateur_nom; ?>

<?php endif; ?>
</div>
  </div>
 <div class="row justify-content-center">
            <div class="col-6">
                <?php if ($this->session->message): ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?php
                            echo $this->session->message;
                            $this->session->message = null;
                        ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
            </div>



<!-- <h3> <?=$message ?> </h3> -->
  </header>

<div class="container">

  