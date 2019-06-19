<!-- connexion -->

<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>



<h1> Connectez vous  </h1> 



 <?php echo form_open(''); ?>
<!-- <form  action="" method="POST"> -->

        <fieldset  class="partieform  ">

          <H2></H2>
             
              <a  value="Retour " class=" boutonliste btn-sm "  id="annule" href="<?= site_url('produits/liste') ;?>" > Revenir à l'accueil </a>    
          
              <div class="alert modif " id="haut" role="alert">
          

                  <div class="row">
        	                 <div class="col-md-12 ">
                            
                                <label for="utilisateur_mail">e-Mail </label>
                       <input type="text" name="utilisateur_mail" size="50" maxlength="50"  class="text-center" value=""
                        id ="utilisateur_mail">   </br>

                          <label for="utilisateur_autre">Mot de passe </label>
                       <input type="text" name="utilisateur_autre" size="50" maxlength="50"  class="text-center" value=""
                        id ="utilisateur_autre">   </br>  
                            
                             

                   
                          
                  </div>
           <!--  <input type="submit" class="boutonajoutenvoi  mx-auto rounded-pill  btn-info d-block btn-lg "  value="Valider" /> -->
                       <input value="Connexion" class="boutonmodifenvoi  mx-auto rounded-pill   d-block btn-lg " type="submit" onSubmit=""> </br></br>
                          
                      
                       
          </fieldset>
          <fieldset>

<a class="text-center" href="<?= site_url('Users/FormulaireCreationCompte')?>" title="page de connexion"> <h4> Vous n'êtes pas encore inscrit ?   </h2>  </a>
        
                           
          
       </fieldset>

    
<!--onClick="checkform()" à recoller ou non dans l'input -->
                    <!-- cliquer sur le bouton annuler lance le reload de la page  -->
                    
            
</form>

