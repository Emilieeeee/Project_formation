<!-- formulaire_modif.php -->
<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
   
?>





      <h1> Modifier le produit </h1> 



 <?php echo form_open_multipart(''); ?>
<!-- <form  action="" method="POST"> -->

        <fieldset  class="partieform decal ">

          <H2><?= $produits->pro_libelle; ?>
Id : <?= $produits->pro_id; ?></H2>
              <!--retourne à l'index  -->
              <a  value="Retour " class=" boutonliste btn-sm "  id="annule" href="<?= site_url('produits/liste') ;?>" > Revenir à la Liste </a>    
          
              <div class="alert modif " id="haut" role="alert">
          

                  <div class="row">
        	                 <div class="col-md-4 ">
                            
                                  <img src="
                                            <?php   echo base_url('assets/images/jarditou_photos/'.$produits->pro_id.".".$produits->pro_photo) ;?> " max-height="300px" style="max-width:200px" class="img-fluid rounded-lg tabvig " alt="...">

    		                    </div> 

                            
                             

                   
                          
                  </div>
           <!--  <input type="submit" class="boutonajoutenvoi  mx-auto rounded-pill  btn-info d-block btn-lg "  value="Valider" /> -->
                       <input value="Enregistrer les modifications" class="boutonmodifenvoi  mx-auto rounded-pill   d-block btn-lg " type="submit" onSubmit="">
                           
                      
                       </br></br>


                    
                       <br>

                       <label for="ID">ID </label>
                       <input type="text"  class="text-center" name="id"  disabled placeholder=" " size="50" maxlength="25" value=" <?= $produits->pro_id; ?>  " id ="ID" >
                       </br>

                       <label for="Nouvelle Image">Nouvelle Image</label>
                       <input type='file' value='' class='ajoutinput' name='nouvellephoto2' size='20'>
                        </br>

                       <label for="reference">Référence </label>
                       <input type="text" name="pro_ref" size="50" maxlength="50"  class="text-center" value="<?= $produits->pro_ref; ?>"
                        id ="reference">   </br>
                        
                        

                        <div class="form-group">  
                          <!-- affichage de la categorir en cours  -->
                          Catégorie : <?= $produits->pro_cat_id; ?>

                       <!--  <label for="categorie_nom">Catégorie</label>
                        <input type="text" name="pro_cat_id" size="50" maxlength="50"  class="text-center" value="<?= $produits->pro_cat_id; ?>"
                        id ="reference"> --> 

                        <!-- menu deroulant boostrap -->
                        
                        </br>
                       
                    

                        <label for="libelle">Libellé </label><input  class="text-center" type="text" name="pro_libelle" size="50" maxlength="50" value="<?= $produits->pro_libelle; ?> "  
                        id ="libelle"> </br>
                        <label for="libelle">Description </label>
                        <textarea  id = "description" name="pro_description" class="overflow-auto" rows="3"cols="50" placeholder=""><?= $produits->pro_description; ?></textarea>

                        <label for="prix">Prix  </label><input  class="text-center"type="text" name="pro_prix" size="50" maxlength="50" value="<?= $produits->pro_prix; ?>  " 
                        id ="prix"> </br>

                        <label for="stock">Stock  </label><input  class="text-center"type="text" name="pro_stock" size="50" maxlength="50" value="<?= $produits->pro_stock; ?>   " 
                         id ="stock"> </br>

                        <label for="couleur">Couleur  </label><input  class="text-center"type="text" name="pro_couleur" size="50" maxlength="50" value="<?= $produits->pro_couleur; ?> " id ="couleur"> </br>
                 
                        <span id="texteradio"> 
                            <p>Produit bloqué :
            	                  <?php
            	                          if ($produits->pro_bloque==1 ){
                                        echo  '<input type="radio" name="pro_bloque" size="50" id="bloque" value="1" id="texteradio" checked="checked">oui       
                                              <input type="radio" name="pro_bloque" size="50" id="pasbloque" value="0"  >non
                                              ';}
                                        else {
            	                          echo '<input type="radio" name="pro_bloque" size="50" id="bloque" value="1" id="texteradio"   > oui       
                                              <input type="radio" name="pro_bloque" size="50" id="pasbloque" value="0" checked="checked">non
                                              ';}
                                 ?> 
                            </p>
                        </span>
        
                <p>
                    Ajouté le  <?= $produits->pro_d_ajout; ?> 
                </p>
                <p>
                        <?php 
                              if ($produits->pro_d_modif!=null ){
                              echo  "Modifié le ".  $produits->pro_d_modif;  }
                              else { echo "Pas de modification antérieure";} 
                        ?>
                </p>
        	      <label for="date_modif"></label> <input  class="text-center"type="hidden" name="pro_d_modif" size="50" maxlength="50" value="<?= date("y:m:d:H:i:s") ?>   " 
                id ="date_modif"> </br>

</div></div>   
<a href="#haut" title="haut de page">Haut de page</a>
          </fieldset>
          

       

    
<!--onClick="checkform()" à recoller ou non dans l'input -->
                    <!-- cliquer sur le bouton annuler lance le reload de la page  -->
                    
            
</form>




         
 


