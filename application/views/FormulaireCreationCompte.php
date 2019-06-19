<!--   FormulaireCreationCompte.php -->


   
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>



<h1> Inscrivez vous </h1> 



 <?php echo form_open(); ?>
<!-- <form  action="" method="POST"> -->

        <fieldset  class="partieform  ">

          <H2></H2>
             
              <a  value="Retour " class=" boutonliste btn-sm "  id="annule" href="<?= site_url('produits/liste') ;?>" > Revenir à l'acceuil </a>    
          
              <div class="alert modif " id="haut" role="alert">
          

                  <div class="row">
                           <div class="col-md-12 ">
                            
                                <label for="utilisateur_mail">e-Mail </label>
                       <input type="text" name="utilisateur_mail" size="50" maxlength="50"  class="text-center" value=""
                        id ="utilisateur_mail">   </br>

                          <label for="">Mot de passe </label>
                       <input type="text" name="" size="50" maxlength="50"  class="text-center" value=""
                        id ="">   </br> 

                          <label for="utilisateur_autre">Confirmation du mot de passe </label>
                       <input type="text" name="utilisateur_autre" size="50" maxlength="50"  class="text-center" value=""
                        id ="utilisateur_autre">   </br>   
                            
                              <label for="utilisateur_autre">Nom </label>
                       <input type="text" name="utilisateur_nom" size="50" maxlength="50"  class="text-center" value=""
                        id ="utilisateur_autre">   </br>  

                       

                         <!--   <input  class="text-center"type="hidden" name="utilisateur_d_first" size="50" maxlength="50" value="<?= date("y:m:d:H:i:s") ?>   " 
                id ="utilisateur_d_first"> </br>
<input  class="text-center"type="hidden" name="utilisateur_d_last" size="50" maxlength="50" value="<?= date("y:m:d:H:i:s") ?>   " 
                id ="utilisateur_d_last">
                    -->
                          
                  </div>
           <!--  <input type="submit" class="boutonajoutenvoi  mx-auto rounded-pill  btn-info d-block btn-lg "  value="Valider" /> -->
                       <input value="Envoi" class="boutonmodifenvoi  mx-auto rounded-pill   d-block btn-lg " type="submit">
                           
                      
                       
          </fieldset>
          

       

    
<!--onClick="checkform()" à recoller ou non dans l'input -->
                    <!-- cliquer sur le bouton annuler lance le reload de la page  -->
                    
            
</form>
    </body> 
</html>
