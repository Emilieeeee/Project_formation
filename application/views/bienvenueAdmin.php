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
 <div class="row">
<div class="col-md-4 ">
<h5> Mes informations </h5>
</div>
<div class="col-md-4 ">
<h5> Mes informations </h5>
</div>
</div>
<!-- <a href="#" class="btn btn-info">Primary</a>

<button type="button" class="btn btn-secondary">Secondary</button>
<button type="button" class="btn btn-success">Success</button>
<button type="button" class="btn btn-danger">Danger</button>
<button type="button" class="btn btn-warning">Warning</button>
<button type="button" class="btn btn-info">Info</button>
<button type="button" class="btn btn-light">Light</button>
<button type="button" class="btn btn-dark">Dark</button> -->
                
                    
                            </div>     
                  </div>
              </div>
        </fieldset>
           <!--  <input type="submit" class="boutonajoutenvoi  mx-auto rounded-pill  btn-info d-block btn-lg "  value="Valider" /> -->
                     
                           
                      
                       
      
          

       

    
<!--onClick="checkform()" à recoller ou non dans l'input -->
                    <!-- cliquer sur le bouton annuler lance le reload de la page  -->
                    
            
