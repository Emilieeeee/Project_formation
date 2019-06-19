<!-- ajout_categorie -->
<?php
// application/controllers/Panier.php
defined('BASEPATH') OR exit('No direct script access allowed');?>



 <div  class="container ajouttot" >
 <h1>Créer une catégorie</h1>
 <!--  <a class=" boutonliste   btn-sm  rounded-top" href="<?= site_url('produits/ajout')?>" title="Ajouter un produit">Nouveau produit</a>   -->                 

       <?php echo form_open(''); ?>
        <fieldset  class="partieform decal fajout">
       <div class="alert ajout" role="alert">
       	<div class="row">
                      <label for="cat_nom" class="labelcat col-md-6">Entrer une nouvelle catégorie </label><br>
                      <input  name="cat_nom" id="cat5" class="text-center form-group ajoutinput"><br>
        </div>

        <div class="row">

                      <!-- select simple des cvategorie mere en html   -->
                      
                     <!--  <button id="btncatparent"type="button" class="btn btn-info" >Selectionner une catégorie parent</button> -->
                       <label for="cat_parent" class="col-md-6 labelcat">Selectionner une catégorie parent </label>

    
                 
                       <select name="cat_parent" id="cat6"    class="custom-select custom-select-sm ajoutinput inputcat "  >
                    
                      </select>
                      </div > 
                    <script>

// $(#btncatparent).clic(function(){
    

$.get("cat1_json", null, function(data) {
         var result = "<option  value='NULL'>Pas de categorie mère</option>";
       

        for(var ligne of data){
            result += "<option value='" + ligne.cat_id + "' >" + ligne.cat_nom + "</option>";
        }
        $("#cat6").html(result);
    });

    



// });


</script>

						


                        <!-- <button type="button" class="btn btn-info" >Close</button> -->



                        <button id="" type="submit" class="btn btn-info" >Enregistrer catégorie</button>

                        <!-- <input type="submit" class=" btn btn-secondary  boutonajoutenvoi  mx-auto   btn-info d-block btn-lg "  value="Enregistrer catégorie" /> -->
                      

                      <!-- <button id="cat7" type="button" class="btn btn-light">Enregistrer</button> -->
                  

</form>
</div></div> </div>

