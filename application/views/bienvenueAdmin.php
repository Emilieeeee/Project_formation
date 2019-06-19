<!-- bienvenueAdmin -->

<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>



<h1> Bonjour <?= $this->session->user->utilisateur_nom ?>  </h1> 
<h3> Bienvenue sur votre espace administration </h3>





        <fieldset  class="partieform  ">

          <H2></H2>
             
              <a  value="Retour " class=" boutonliste btn-sm "  id="annule" href="<?= site_url('produits/liste') ;?>" > Revenir à l'accueil </a>    
          
              <div class="alert modif " id="haut" role="alert">
          

                  <div class="row">
        	                 <div class="col-md-12 ">
                            
                               
                     <a href="#" class="badge badge-primary">Primary</a>
<a href="#" class="badge badge-secondary">Secondary</a>
<a href="#" class="badge badge-success">Success</a>
<a href="#" class="badge badge-danger">Danger</a>
<a href="#" class="badge badge-warning">Warning</a>
<a href="#" class="badge badge-info">Info</a>
<a href="#" class="badge badge-light">Light</a>
<a href="#" class="badge badge-dark">Dark</a>
                
                    
                            </div>     
                  </div>
              </div>
        </fieldset>
           <!--  <input type="submit" class="boutonajoutenvoi  mx-auto rounded-pill  btn-info d-block btn-lg "  value="Valider" /> -->
                     
                           
                      
                       
      
          

       

    
<!--onClick="checkform()" à recoller ou non dans l'input -->
                    <!-- cliquer sur le bouton annuler lance le reload de la page  -->
                    
            
