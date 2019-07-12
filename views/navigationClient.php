

<!-- head et navigationClient.php -->
  
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>navigation</title>

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" href="<?= base_url("assets/css/style.css"); ?>">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

</head>
  


<body>
<header > 


    <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-between sticky-top"> 
        <span class="navbar-brand"><a href="<?= site_url('Produits/JarditouInfo') ;?>" title="Qui est Jarditou ">
            <img height='60px' width="auto" id="logo" class="" src= <?= base_url("assets/images/jarditou_logo.jpg"); ?> ></a>
        </span>
        <span class="font-italic">
            <?php if ($this->session->user): ?>
             
              Session de 
              <?php 
   //afficher l'attribut utilisateur 'nom' de la variable de session 'user'
              echo $this->session->user->utilisateur_nom; ?>

            <?php endif; ?>

        </span>
        <span class="">
              <ul  class="nav justify-content-center " >
                
                    <li class="nav-item"><a class="nav-link btn-outline navi " 
                      href="
                      <?php 
                      if($this->session->user){
                        echo site_url('Produits/bienvenue');
                        }

                      else {echo site_url('Produits/liste');
                      } ?>" 
         
                      title="retourner à l'acceuil du site"> Accueil </a>
                    </li>

                    <li class="nav-item"><a class="nav-link btn-outline navi " href="<?= site_url('produits/liste') ;?>" title="début de liste produit ">Produits</a></li> 
                

                
                    <li class="nav-item">
                    <?php if ($this->session->user): ?>
     
	                      <li class="nav-item"><a class="nav-link btn-outline navi " href="<?= site_url('Panier/listePanier')?>" title="Ajouter un produit">Panier</a></li>
                        <a class="nav-link btn-outline navi" href="<?= site_url('Users/deconnexion')?>" title="page de deconnexion"> <i class="fas fa-user"></i> Deconnexion </a>
         

                               
                    <?php else: ?>                               
                        <a class="nav-link btn-outline navi" href="<?= site_url('Users/connexion')?>" title="page de connexion"> Connexion </a>                                 
                    <?php endif; ?>
                    </li>

                

  
              </ul>

        </span>
  
  
<!-- base_url('assets/images/baniereFleursh2Dm.jpg') -->
</nav>
<div class="col-md-12 card  text-white justify-content-center  degb sansbord" >
        <img src="
          
          <?php echo  base_url('assets/images/plantban_1920.jpg') ;?> " max-height="" style="width:100%" class="img-fluid imgaccueilinfo card-img" alt="..."> 

  
  

   
        <div class="col-md-12 card-img-overlay ">
         
          
          <p class="font-italic card-text  text-right "><span class="motiv"> Notre savoir-faire à votre disposition dans le domaine du jardin et du paysagisme.</span></p>
          
        </div>
    </div> 

 
</div>
  </div>
 <div class="row justify-content-center" id='messageerreur' >
            <div class="">
                <?php if ($this->session->message): ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?php
                            echo $this->session->message;
                            $this->session->message = null;
                        ?>
                        <button id="close" type="button" class="close" aria-label="Close">
                            <span >&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
            </div>

 </div>
<script>

var modala = document.getElementById('messageerreur');
window.click = function(event) {
  if (event.target == modala) {
    modala.style.display = "none";
  }
}

  $('#close').click(function(){
    modala.style.display = "none";
      // $('#messageerreur').hide();
      // $("#cat2").hide();
  });
</script>



<!-- <h3> <?=$message ?> </h3> -->
  </header>

<div class="container">

  