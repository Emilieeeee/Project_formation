	<!-- application/views/liste.php -->
  

<div class="container" id="hautpdroduits" class="produits">
<h1>Liste des produits</h1>



<div class="alert info">
Chercher par catégorie 
<form action="">

<select name="cat1" id="cat1">
    
</select>

<br>

<select name="cat2" id="cat2">
    <option value="">...</option>
</select>

</form>
<script>
    $("#cat2").hide();
    $("#cat1").load("http://127.0.0.1/ci/index.php/Categorie/cat1/")
    
    $("#cat1").change(function() { 
      $("#cat2").show();
        let cat_id = $("#cat1").val();
        $("#cat2").load("http://127.0.0.1/ci/index.php/Categorie/cat2/"+cat_id);
    });
</script>

</div >
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
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>