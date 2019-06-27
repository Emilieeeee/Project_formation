<!-- Formulaire d'ajout d'un produit -->
  <?php
   defined('BASEPATH') OR exit('No direct script access allowed');
   
?>
<!DOCTYPE html>
<html lang="fr">

  <head>
    	<meta charset="utf-8">
    	<title>Formulaire d'ajout d'un produit</title>

     	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    	 <link rel="stylesheet" href="<?= base_url("assets/css/style.css"); ?>">
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

     <!--   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js" > -->


  </head>


  <body class="ajouttot">
    <h1>Ajouter un produit</h1>

 
    <?php echo $error; ?> 
    <?php echo form_open_multipart(''); ?>
 
        <fieldset  class="partieform decal fajout">
              <!--retourne à l'index  -->
              <a  value="Retour " class=" boutonliste btn-sm "  id="annule" href="<?= site_url('') ;?>" > Revenir à la Liste </a>    
        
              <div class="alert ajout" role="alert">

                  <p class="textajout ajoutinpu  "> Renseigner les champs puis valider pour créer un nouveau produit </p>



                  <div id= "imageAjout" class="col-md-6 ">
                            
                  <p class="textajout">Image
                  <span id="nomfichier" class="ajoutinput ajoutinput2"></span></p>
                  <img  id="produitImg"  src="
                                            <?php   echo base_url('assets/images/jarditou_photos/greens.jpg') ;?> " style="max-width:200px" class="card-img img-fluid  tabvig imformmodif " alt="...">
                  <!-- <p class=""> Cliquer pour ajouter</p> -->
                    <!-- <img  id="produitImg"  src="
                                            <?php   echo $nv ;?> " style="max-width:200px" class="card-img img-fluid  tabvig imformmodif " alt="..."> -->
                  </div>
                 
                  <div class= "">
                  <input  id="uploadPhoto" type='file' name='nouvellephoto' class='ajoutinputphoto'  size='20'>     
                    <!--  <div>
                       <i class='fas fa-file-import fa-2x'style="size: 50px;"></i>
                        <img src="  <?php 
                        // echo  base_url('assets/images/jarditou_photos/7.png') ;?>" style="max-width:130px" class="img-fluid rounded-lg tabvig  grise" alt="..."> ?>
                        </div> -->
                  </div>

                  <script>
                    // $('#surtexte').hidden();
                    // $('#produitImg').mouseover(function(){
                    //     $('#surtexte').show();
                    // }
                    $('#produitImg').click(function(){
                        $('#uploadPhoto').trigger('click');
                    });

                    $('#uploadPhoto').change(function(){
                        // $('#submit-photo').trigger('click');
                        var imageselect=$('input[name=nouvellephoto]').val();

                        $('#nomfichier').html(imageselect);

                        // $.get("nvelleim_json/"+imageselect, null, function(data) {
                        //   var result = "";
                         
                        //  // $('#produitImg').attr('src',imageselect);}
                    });

                  
        
        // for (var ligne of data){
        //     result += "<option value='" + ligne.cat_id + "' >" + ligne.cat_nom + "</option>";
        // }


    //     $("#cat1").html(result);
    // });

                  </script>
                  
      
                  <label for="reference"class="textajout">Référence </label>
                  <input name="pro_ref" id ="reference" type="text"   maxlength="50"  class="text-center form-group ajoutinput" value="">   
                  </br>  
<!-- CATEGORIES  -->
                  <label for="Catégorie "class="textajout">Catégorie </label>
                  <input name="pro_cat_id" id ="cat3" maxlength="50"  type="hidden" class="text-center form-group ajoutinput" > 


                


                  <select name="cat1" id="cat1" class="text-center form-group ajoutinput">
    
                  </select>

                 
                  <select name="cat2" id="cat2" class="text-center form-group ajoutinput">
    
                  </select>
                  <button id="cat4" type="button" class="btn btn-sm-light ajoutinpu boutonformajout" >Nouvelle Catégorie</button>
</br>                 



<script>
    $("#cat2").hide();
    

//CHOISIR UNE CAT dans les categories déjà existantes
// fonction jquery qui va chercher les infos de la methode cat1_json dans le controleur produit  et qui leur applique la function 
    $.get("cat1_json", null, function(data) {
        var result = "";
        
        for (var ligne of data){
            result += "<option value='" + ligne.cat_id + "' >" + ligne.cat_nom + "</option>";
        }
        $("#cat1").html(result);
    });


    $("#cat1").change(function() {
            $("#cat2").show();
            var cat_id = $(this).val();
            $.get("cat2_json/" + cat_id, null, function(data) {
            var result = "";
            for (var ligne of data) {
                result += "<option value='" + ligne.cat_id + "' >" + ligne.cat_nom + "</option>";
            }
            $("#cat2").html(result);
            });
    });
// ecrit le cat id dans l'input qui sera utilisé pour insert le cat pro id 
       $("#cat2").change(function() {
          var cat_id = $(this).val();
          $('#cat3').val(cat_id );
});

</script>
                  
                  
 



                
    
                



<!-- <script>

$("#").hide();
$("#cat1").clic(function() {
            $("#cat5").show();
            

            $.get("cat2_json/" + cat_id, null, function(data) {
            var result = "";
            for (var ligne of data) {
                result += "<option value='" + ligne.cat_id + "' >" + ligne.cat_nom + "</option>";
            }
            $("#cat2").html(result);
            });




});


</script> -->
    



                  
                  </br>


                    <label for="libelle"class="textajout">Libellé</label>
                    <input  name="pro_libelle" id ="libelle" class="text-center ajoutinput form-group" type="text" style="height: 70%;"  value=" "> 
                    </br>

                    <label for="description"class="textajout">Description </label>
                    <textarea  name="pro_description" id = "description"  class="overflow-auto ajoutinput" rows="3"cols="50" placeholder=""></textarea>

                    <label for="prix"class="textajout">Prix  </label>
                    <input name="pro_prix" id ="prix" class="text-center ajoutinput form-group"type="text"   maxlength="50" value=" " > 
                    </br>

                    <label for="stock"class="textajout">Stock  </label>
                    <input  name="pro_stock" id ="stock" class="text-center ajoutinput form-group"type="text"   maxlength="50" value="   " > 
                    </br>

                    <label for="couleur"class="textajout">Couleur  </label>
                    <input name=" pro_couleur" id ="couleur" class="text-center ajoutinput form-group" type="text"   maxlength="50" value=" "  > 
                    </br>
            
                    <span id="texteradio"> 
                          <p>
                        <!-- Bloquer le produit ?  -->
                              <input type="radio" name="pro_bloque" size="50" id="nom" value="non" class="textajout ajoutinput "> <label for="non" class="ajoutinputnobordure textajout ">Produit disponible à la vente </label>  
                              <input type="radio" name="pro_bloque" size="50" id="oui" value="oui" id="texteradio" class=" textajout ajoutinput "><label for="oui" class="ajoutinputnobordure textajout"> Produit bloqué </label>    
                          </p>
                    </span>
                    
                     <label for="date_ajout"></label> 
                     <input  class="text-center"type="hidden" name="pro_d_ajout" size="50" maxlength="50" value="<?= date("y:m:d:H:i:s") ?>" id="date_ajout"> 
                     </br>
        
                    <!--onClick="checkform()" à recoller ou non dans l'input -->
                    <!-- cliquer sur le bouton annuler lance le reload de la page  --> 
                    <input type="submit" class="boutonajoutenvoi  mx-auto rounded-pill  btn-info d-block btn-lg "  value="Valider" />
                    <!-- <a  value="Valider" class="boutonenvoie btn-outline-secondary d-block btn-sm text-white"  id="annule" href="index.php" > Valider  </a> -->
                    </div>

                    <a class="boutonliste btn-sm" href="#haut" title="haut de page">Haut de page</a>

        </fieldset>
    </form>

 <div id="creacat" class="modcreacat"  >

      <div class="modcontent_creacat">

    
<h3 class="modal-title" id="exampleModalLongTitle">Créer une nouvelle catégorie</h3>
       <!--  <?php //echo form_open('produits/ajout_categorie'); ?>
       
                      <label for="cat4" class="">Entrer une nouvelle catégorie </label><br>
                      <input  name="cat_nom" id="cat5" class="text-center form-group ajoutinput">

                    
  
                   
                   select simple des cvategorie mere en html   -->
                       <!-- <select name="cat_parent" id="cat6"    class="custom-select custom-select-sm ajoutinput"  >
                    
                      </select> 
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button id="closecreacat" type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>

                        <input type="submit" class="boutonajoutenvoi  mx-auto rounded-pill  btn-info d-block btn-lg "  value="Enregistrer catégorie" />
                      </div> --> 

                      <!-- <button id="cat7" type="button" class="btn btn-light">Enregistrer</button> -->
                  

<!-- </form>  -->


<?php echo form_open('produits/ajout_categorie2'); ?>
      <fieldset  class="partieform decal ">
       <div class="alert ajout" >
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
                    </div>


            


                        



                        <button  type="submit" class="btn btn-info" >Enregistrer catégorie</button>
                        <button type="button" id="close" class="btn btn-outline-secondary float-left ">Close</button>

                        <!-- <input type="submit" class=" btn btn-secondary  boutonajoutenvoi  mx-auto   btn-info d-block btn-lg "  value="Enregistrer catégorie" /> -->
                      

                      <!-- <button id="cat7" type="button" class="btn btn-light">Enregistrer</button> -->
                  
</fieldset>
</form>


                
<script>

// SCRIPT POUR CREER UNE MODALE NOUVELLE CATEGORIE 
// statut caché de la div
// $("#creacat").hide();
//fonction pr la cacher au bouton close
$("#close").click(function(){
// $("#creacat").hide();
modal.style.display = "none";
 
});

//fonction pr l'afficher  au bouton creacat
$("#cat4").click(function(){
    $("#creacat").show();
    

    $.get("cat1_json", null, function(data) {
        var result = "<option  value='NULL'>Pas de categorie mère</option>";
        
        for (var ligne of data){
            result += "<option value='" + ligne.cat_id + "' >" + ligne.cat_nom + "</option>";
        }
        $("#cat6").html(result);
    });
});

 $("#cat7").click(function(){
        $.get("creacat");

 });

 $("#closecreacat").click(function(){
        $("#creacat").hide();
});

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById("creacat");
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

</script>



</div></div> </div>

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
  </body>
</html>