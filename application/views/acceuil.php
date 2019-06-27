	<!-- application/views/liste.php -->
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
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">


</head>
	
<body>
<header > 


   

<nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-center sticky-top"> <span>
<img height='60px' width="auto" id=" logo"  src="assets/images/jarditou_logo.jpg">
  </span>
  <span>
  <ul  class="nav justify-content-center " >
  <li class="nav-item"><a class="nav-link btn-outline-success " href="<?= site_url('produits/ajout')?>" title="retourner à l'acceuil du site"> Acceuil</a></li>
  <li class="nav-item"><a class="nav-link btn-outline-success " href="#hautpdroduits" title="début de liste produit ">Produit</a></li>
  
  <li class="nav-item"><a class="nav-link btn-outline-success" href="<?= site_url('FormUsers/FormulaireCreationCompte')?>" title="page de connexion"> Connexion </a></li>
  </ul>

  </span>
  <span>
  <form class="form-inline " action="Fiche_produit.php " method="post"  >
    <input class="form-control mr-sm-2" type="search"  aria-label="Search" name="recherche">
    <button class="btn btn-sm btn-outline-success my-2 my-sm-0" type="submit" > Recherche </button>
  </form>
  </span>
  

</nav>

<img   width="100%" src="assets/images/promotion.jpg"   class="navbar-brand height  align-top" >


  </header>
  <!-- <?php //include 'assets/php/navigation.php' ;?> -->
<div class="container" id="hautpdroduits" class="produits">
<h1>Liste des produits</h1>

<a  class=" boutonliste   btn-sm  rounded-top" href="<?= site_url('produits/ajout')?>"title="Ajouter un produit">Ajouter un produit</a>

<table class="table   ligne   table-sm"> <!-- <thead>
    <tr>
      <th scope="col">Editer</th>
      <th scope="col">ID</th>
      <th scope="col">Photo</th>
      
      <th scope="col">Référence</th>

      <th scope="col">Libellé</th>
      <th scope="col">Prix</th>
      <th scope="col">Stock</th>

      <th scope="col">Couleur</th>
      <th scope="col">Ajout</th> -->
      <!-- <th scope="col">Modification</th> -->

     <!--  <th scope="col">Bloqué</th> -->
    <!--  <th scope="col">Supprimer</th>
     
    </tr>
  </thead> -->


    
         <?php 
         

         foreach ($liste_produits as $row) {

         $photo= $row->pro_id.".".$row->pro_photo ; ?>
<tr id ="ligneliste" class =" rounded m-auto 
<?php
if ($row->pro_bloque==1){echo 'bloquecss'; }
else {echo '';}
?>
">
 <td > <img src="
          
       <?php echo  base_url('assets/images/jarditou_photos/'.$photo) ;?> " max-height="100px" style="max-width:130px" class="img-fluid rounded-lg tabvig im" alt="..."> 
      
          </td>
 <td><a  class="btn-sm rounded-circle iconelien" href="<?= site_url('produits/f_modif/'.$row->pro_id) ;?>"title="Formulaire de modification"> <i class="fas fa-edit listelien "></i></a></td>
          <td> <?php echo $row->pro_id ; ?>
          <?php if ($row->pro_bloque==1){ echo ' </br> <i class="fas fa-exclamation-triangle"></i> bloqué'; }

           ?>
 </td>
          

         
          <td><?php echo $row->pro_ref; ?></td>

          <td><div class="listelien">
        <a  class=" rounded" href="<?= site_url('produits/f_modif/'.$row->pro_id) ;?>"title="">
          <?php echo $row->pro_libelle; ?>   
        </a> </div></td>
          <td><?php echo $row->pro_prix;    ?> €  </td>
          <td><?php echo $row->pro_stock.' en stock';   ?>    </td>
          <td><?php echo $row->pro_couleur;   ?>    </td>

          <td><?php echo 'Ajouté le </br>'.$row->pro_d_ajout; ?>  </td>
          <!-- <td><?php //echo $row->pro_d_modif; ?>  </td> -->

          <!-- <td><?php //echo $row->pro_bloque; ?> </td>  -->
          <td><a  class="supprimer btn-sm rounded-circle" href="<?= site_url('produits/fiche_supprime/'.$row->pro_id) ;?>"  title="supprimer le produit">
          <i class="fas fa-ban fa-xs" style="color: #ff6b6b;"></i>
        </a> </td> 
         

<?php
        ;} ?>

        </td>
    </tr>

</table>

<a href="#hautpdroduits" class="boutonliste  btn-sm"  title="Retour en début de liste"> Retour en début de liste </a>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>

</body>
</html>