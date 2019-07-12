<!-- bienvenue -->

<!--   FormulaireCreationCompte.php -->


   
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>



<h1> Bienvenue  <?= $user->utilisateur_nom; ?> </h1> 
<?= $user->utilisateur_id; ?>
 <input type="hidden"  class="text-center" name="utilisateur_autre"  disabled placeholder=" " size="50" maxlength="25" value=" <?= $utilisateurs->utilisateur_id; ?>" id ="ID" >


 <?php echo form_open(); ?>
<!-- <form  action="" method="POST"> -->

        <fieldset  class="partieform  ">

          <H2></H2>
             
              <a  value="Retour " class=" boutonliste btn-sm "  id="annule" href="<?= site_url('produits/liste') ;?>" > Revenir à l'acceuil </a>    
          
              <div class="alert modif " id="haut" role="alert">
          

                 
         
                 <input value="Connexion" class="boutonmodifenvoi  mx-auto rounded-pill   d-block btn-lg " type="submit">
                           
                     </div> 
                       
          </fieldset>
          

       

    
<!--onClick="checkform()" à recoller ou non dans l'input -->
                    <!-- cliquer sur le bouton annuler lance le reload de la page  -->
                    
            
</form>
    </body> 
</html>
