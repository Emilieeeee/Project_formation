<!-- application/views/detail.php -->
  <?php
   defined('BASEPATH') OR exit('No direct script access allowed');
   
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Liste des produits</title>

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
     <link rel="stylesheet" href="<?= base_url("assets/css/style.css"); ?>">
   
</head>
    
<body>

 
  <div class="card " id="haut" >
        <div class="row no-gutters">
    
  <form  class= " formproduit" action="../exercices_php_1/monscript.php" method="POST"   onSubmit="return checkForm();" > 

        <fieldset class="partieform decal">

        	<!-- boutons nav et image produit d-block -->

        	<div class="row">
        		<div class=" col-md-6 text-center  " style='margin'>


<!-- doit renvoyer à la page formulaire_modif.php en transmettant le pro_id  -->

        	<a value="Modifier" 
        	class="boutonenvoie btn-outline-secondary d-block btn-sm text-white" 
        	href="formulaire_modif.php?pro_id=<?php echo $produit->pro_id; ?>" >

        	Modifier</a>

<!--  doit envoyer à page formulaire_supprime.php = verif de la page à supprimer  -->
        	<a  value="Supprimer" class="boutonenvoie btn-outline-secondary d-block btn-sm text-white"  
            href="formulaire_fiche_supprime.php?pro_id=<?php echo $produit->pro_id; ?>"> 

            Supprimer</a>

<!--returne à l'index  -->
        	<a  value="Retour " class="boutonenvoie btn-outline-secondary d-block btn-sm text-white"  id="annule" href="index.php" > Retour  </a>
        	</div>

        	<div class="col-md-4 ">
      <img src=' <?php  echo "jarditou_photos\\".$produit->pro_id.".".$produit->pro_photo; ?>' class=" img-fluid" alt="...">
    		</div> 
			</div>
        <legend><?php echo $produit->pro_libelle.' '.$produit->pro_couleur;  ?></legend>

            <label for="ID">ID </label><input type="text"  class="text-center"name="ID" placeholder=" <?php echo $pro_id; ?> " size="50" maxlength="25" value=" <?php echo $pro_id; ?> "  
            id ="ID" >

            <label for="reference">Référence </label><input type="text" name="reference" size="50" maxlength="50"  class="text-center" value="<?php echo $produit->pro_ref; ?>"
            id ="reference">   </br>  

            <label for="categorie">Catégorie  </label><input  class="text-center"type="text" name="categorie" size="50" maxlength="50" value="<?php echo $nom_categorie->cat_nom; ?>"   
            id ="categorie"
            > </br>

            <label for="libelle">Libellé </label><input  class="text-center"type="text" name="libelle" size="50" maxlength="50" value="<?php echo $produit->pro_libelle.' '.$produit->pro_couleur;  ?> "  
            id ="libelle"> </br>
             <label for="libelle">Description </label>
            <textarea  id = "description" name="commentaire" class="overflow-auto" rows="3"cols="50" placeholder=""><?php echo $produit->pro_description; ?></textarea>





            <label for="prix">Prix  </label><input  class="text-center"type="text" name="prix" size="50" maxlength="50" value="<?php echo $produit->pro_prix; ?>  " 
            id ="prix"
            > </br>

            <label for="stock">Stock  </label><input  class="text-center"type="text" name="stock" size="50" maxlength="50" value="<?php echo $produit->pro_stock; ?>   " 
            id ="stock"> </br>

            <label for="couleur">Couleur  </label><input  class="text-center"type="text" name="couleur" size="50" maxlength="50" value="<?php echo $produit->pro_couleur; ?> "                    id ="couleur"> </br>
            </fieldset>
		<fieldset class="partieform decal">
            <span id="texteradio"> <p>Produit bloqué :
            	<?php
            	// checked="checked" 
            	  if ($produit->pro_bloque==1 ){
            echo  '<input type="radio" name="bloque" size="50" id="bloque" value="oui" id="texteradio" checked="checked">oui       
                    <input type="radio" name="bloque" size="50" id="pasbloque" value="non"  >non'  ;}
            else { 

            	echo '
                     <input type="radio" name="bloque" size="50" id="bloque" value="oui" id="texteradio"   > oui       
                     <input type="radio" name="bloque" size="50" id="pasbloque" value="non" checked="checked">non' ;}
            ?></p>
            <p>
              Date d'ajout : <?php echo $produit->pro_d_ajout; ?> </p>
              <p>
              <?php 
            if ($produit->pro_d_modif!=null ){
            echo  "Date de modification:".  $produit->pro_d_modif;  }
            else { echo "Pas de modification antérieure";} 
?>
</p>
        	</span>
          
        </fieldset>

       

       
<!--onClick="checkform()" à recoller ou non dans l'input -->
                    <!-- cliquer sur le bouton annuler lance le reload de la page  -->
                    
            </div>


    </form>
<a href="#haut" title="Modifier">Haut de page</a>



         
      </div>
    </div>
  </div>
</div>

</div>


</body>