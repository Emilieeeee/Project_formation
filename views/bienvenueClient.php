<!-- bienvenueClient -->

<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container large">

<h1> Bonjour <?= $this->session->user->utilisateur_nom ?>  </h1> 
<h3> Bienvenue sur votre espace Client </h3>
<div class="row">
  <div class="col-md-12 d-flex d-flex   flex-wrap">

  <fieldset  class="partieform col-md-4">

          <H2></H2>
             
              <a  value="Retour " class=" boutonliste btn-sm "  id="annule" href="<?= site_url('produits/liste') ;?>" >Vos informations personnelles</a>    
          
              <div class="alert modif " id="haut" role="alert">
          

                  
        </fieldset>


        <fieldset  class="partieform col-md-12">

          
             
              <a  value="Retour " class=" boutonliste btn-sm "  id="annule" href="<?= site_url('produits/liste') ;?>" > Vos Achats  </a>    
          
              <div class="alert modif " id="haut" role="alert">
          

                  <div class="row">
        	                 <div class="">
                       
                          </div>     
                 
                  </div>
        </fieldset>

          
 </div>  
      
    </div>

           <!--  <input type="submit" class="boutonajoutenvoi  mx-auto rounded-pill  btn-info d-block btn-lg "  value="Valider" /> -->
                     
                           
                      
                       
      
          

       

    
<!--onClick="checkform()" à recoller ou non dans l'input -->
                    <!-- cliquer sur le bouton annuler lance le reload de la page  -->
                    
            
