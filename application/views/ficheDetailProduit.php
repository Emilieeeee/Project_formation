<!-- ficheDetailClient.php  -->
   <?php
   defined('BASEPATH') OR exit('No direct script access allowed');
   
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>fiche de detail du produit</title>

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
     <link rel="stylesheet" href="<?= base_url("assets/css/style.css"); ?>">
   


</head>
  
<body>



<div class="alert alert-danger" role="alert">

<div class="card text-center">

 <div class="card-header" style="">
  <img src="
      <?php   echo base_url('assets/images/jarditou_photos/'.$produits->pro_id.".".$produits->pro_photo) ;?> " max-height="300px" style="max-width:200px" class="img-fluid rounded-lg tabvig " alt="...">

  <div class="card-body">
     <a class="btn btn-outline-danger" href="<?= site_url('Panier/add/'.$produits->pro_id) ;?>" title="SUPPRIMER">SUPPRIMER</a>


    <h5 class="card-title"><?= $produits->pro_libelle." ".$produits->pro_couleur; ?></h5>
    <h5 class="card-title"><?php echo $produits->pro_prix; ?> </h5>
    <p class="card-text"><small class="text-muted"><?php echo " Il reste ". $produits->pro_stock.' '.$produits->pro_libelle.' '.$produits->pro_couleur." en stock"; ?></small>
</p>
   
  </div>
</div>
</div>
</div>





</body>
</html>
