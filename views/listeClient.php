	<!-- application/views/listeClient.php -->
  

<div class="container" id="hautpdroduits" class="produits">
<h1>Nos produits  </h1>



<!-- <table class="table   ligne   table-sm"> --> <!-- <thead>
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

<div class="groupevigp hautpdroduits" id="">
       <div class="row">
          <?php 
            foreach($liste_produits as $row){ 
            $photo= $row->pro_id.".".$row->pro_photo ; ?>  
          

            <div class="col-md-4  vigp">
              <div class="card text-center vigcardp">
                
                <div class="card-body viginfoint titrevp " id=""   >
                  <div class="divimvigp">
                  <img  class="imvigp " src="
          
                    <?php echo  base_url('assets/images/jarditou_photos/'.$photo) ;?> " max-height="100px" style="max-width:130px" class="img-fluid rounded-lg tabvig im" alt="..."> 
                    </div>
                    <h2 class="card-title  h2vp  "> <?php echo $row->pro_libelle; ?> </h2>
<p class=" ">
                                <?php if (!$row->pro_bloque==1){ ?>
          
                                   <a  class="supprimer btn-sm rounded-circle" href="<?= site_url("Panier/add/").$row->pro_id ?>"  title="formulaire ajout au panier "><i class="fas fa-cart-plus orangep"></i>
                                    </a> 
                                <?php ;} 
                                else { echo '
          
                <i class="fas fa-exclamation-triangle"></i>  '
                                ;} ?>

                                </p>
                </div>

                <div class="card-body vigpint textevp text-center" id="" > 

               
                <!-- <h5 class="card-title" >L'entreprise</h2> -->
                    <?php if ($row->pro_bloque==1){ echo ' <p class=""> <i class="fas fa-exclamation-triangle"></i> Indisponible </p>'; }

           ?>
                    <p class=""> <?php echo $row->pro_couleur;   ?> </p> 
                    <p class=""><?php echo $row->pro_stock.' en stock';   ?></p>
                    <p class=""><?php echo $row->pro_prix;    ?> €  </p>
                    
    </div>
                
          </div>
        </div>

                                <?php ;} ?>



                      

      
                   <!-- <p class="text-center">
                    <i class="fas fa-angle-double-up closev" id="closev1"></i></p> -->
            
      

    
        

<a href=".hautpdroduits" class="boutonliste  btn-sm"  title="Retour en début de liste"> Retour en début de liste </a>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>