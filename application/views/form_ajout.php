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
   


</head>


<body>
 
 <?php echo form_open(); ?>
     <fieldset  class="partieform decal ">
              <!--retourne à l'index  -->
              <a  value="Retour " class="boutonenvoie btn-outline-secondary  btn-sm text-white"  id="annule" href="index.php" > Retour  </a>
          
              <div class="alert alert-info" role="alert">
<h3> Ajouter un produit </h3>
                    <div class="col-md-4 ">
                          <img src='' class=" img-fluid" alt="...">
                    </div> 
      
                    <legend>Renseignez chaque champ puis valider l'ajout de produit</legend>

                  

                    <label for="reference">Référence </label><input name="pro_ref" id ="reference" type="text"    class="text-center form-group" value=""
            >   </br>  

                    
                    <select name="pro_cat_id" id="idcategorie"    class="custom-select custom-select-sm"  >
                          <option value="1">Outillage</option>   
                          <option value="4">Plants et semis</option>
                          <option value="5">Arbres et arbustes</option>
                          <option value="6">Pots et accessoires</option>
                          <option value="7">Mobilier de jardin</option>
                          <option value="8">Matériaux</option>
                 	</select> 
            












                  </br>

                    <label for="libelle">Libellé </label><input  name="pro_libelle" id ="libelle" class="text-center"type="text" size="50" maxlength="50" value=" "  
            > </br>
                    <label for="description">Description </label>
                    <textarea  name="pro_description" id = "description"  class="overflow-auto" rows="3"cols="50" placeholder=""></textarea>


 


                    <label for="prix">Prix  </label><input name="pro_prix" id ="prix" class="text-center"type="text"  size="50" maxlength="50" value=" " > </br>

                    <label for="stock">Stock  </label><input  name="pro_stock" id ="stock" class="text-center"type="text"  size="50" maxlength="50" value="   " > </br>

                    <label for="couleur">Couleur  </label><input name=" pro_couleur" id ="couleur" class="text-center" type="text"  size="50" maxlength="50" value=" "  > </br>
            
    
                    <span id="texteradio"> <p>
                    <!-- Bloquer le produit ?  -->

                          <input type="radio" name="pro_bloque" size="50" id="nom" value="non" > <label for="non">Produit disponible à la vente </label>  
                          <input type="radio" name="pro_bloque" size="50" id="oui" value="oui" id="texteradio" ><label for="oui"> Produit bloqué </label>      
                          

                          </p>
                     
            
                    </span>
          
        

       

       
<!--onClick="checkform()" à recoller ou non dans l'input -->
                    <!-- cliquer sur le bouton annuler lance le reload de la page  -->
                    
            

<input type="submit" class="boutonenvoie btn-info d-block btn-sm "  value="Valider" />
 <!-- <a  value="Valider" class="boutonenvoie btn-outline-secondary d-block btn-sm text-white"  id="annule" href="index.php" > Valider  </a> -->
</div>


</fieldset>
    </form>


</form>
</body>
</html>