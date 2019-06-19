<!-- ficheDetailAddProduit.php  -->
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



<div class="container col-md-12">

<div class="card text-center ">

 <div class="card-header " style="">

 <h2 class="card-title"><?= $produits->pro_libelle." ".$produits->pro_couleur; ?></br></h2></br>

  <img src="
      <?php   echo base_url('assets/images/jarditou_photos/'.$produits->pro_id.".".$produits->pro_photo) ;?> " max-height="300px" style="max-width:200px" class="img-fluid rounded-lg tabvig " alt="...">
    </br>
     </br>

  <div class="card-body">
     

<p class="card-text"><small class="text-muted"><?php echo  $produits->pro_description ; ?></small>
</p>
   
    <h5 class="card-title"><?php echo $produits->pro_prix; ?> </h5>
    <p class="card-text"><small class="text-muted"><?php echo " Il reste ". $produits->pro_stock.' '.$produits->pro_libelle.' '.$produits->pro_couleur." en stock"; ?></small>
</p>




   </div>
  </div>
  <form action="" method="post">

    <label for="qte">Choisir nombre d'article  </label>
    <input type="number" value="1"name="qte" class="inputqte" size="3">

   
    <input type="submit" value="AJOUTER" class="btn btn-outline-danger" >
    
</form>
</div>

</div>

</div>





</body>
</html>
