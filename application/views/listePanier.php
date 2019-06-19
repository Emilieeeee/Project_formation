
<!-- listePanier -->
<?php
// application/controllers/Panier.php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class=" clearfix">
    <a  href="<?= site_url('produits/liste') ;?>" title="début de liste produit " class="lien btn btn_info      float-left ">Continuer mes achats </a>

</div>
<table class="table">
    <tr>
    <th>Ref</th>
    <th>Libelle</th>
    <th>couleur</th>
    <th>Quantite</th>
    <th>Prix</th>
    <th>Total</th>
    </tr>


    <?php 
        $total=0; 
        if($this->session->panier){
        foreach ($this->session->panier as $pro):
        $idqte= $pro->pro_id;
    ?>
        <tr>
            <td><?= $pro->pro_ref ?></td>
            <td><?= $pro->pro_libelle ?></td>
            <td><?= $pro->pro_couleur ?></td>
           <!--  <td> <a href=" <?=site_url('panier/modifqte/'.$pro->pro_id) ; ?>  "><?= $pro->quantite ?></a> </td>
            <td><?= $pro->pro_prix ?></td> -->
            <td>  
              
                <input type="hidden" value="<?= $pro->pro_id ?>" name="" id="" class="inputqte" size="20">

                <input type="number" value="<?= $pro->quantite ?>" data-id="<?= $pro->pro_id ?>"  class="inputqte" size="20">

              <a  id=""  class="supprimer btn-sm rounded-circle" href=" <?=site_url('panier/addmodif/'.$pro->pro_id);?>"  title="modifier la qte">modifier la qte</a>
                
            </td>

            <td class="tot"><?= $pro->pro_prix*$pro->quantite ?></td>  
            <td><a  id="qteliste"  class="supprimer btn-sm rounded-circle" href=" <?=site_url('panier/supprimeligne/'.$pro->pro_id);?>"  title="supprimer le produit">


          <i class="fas fa-ban fa-xs" style="color: #ff6b6b;"></i>
        </a> </td> 
        </tr>
    <?php 
            $total = $total + $pro->pro_prix*$pro->quantite;
            //ou $total =+ $pro->pro_prix*$pro->quantite;
     ?>       
         
<?php 
        endforeach;}

        else{ ?>
            <H3> Votre panier est vide </H3>
      <?php   ;} ?>

</table>
<hr id="tot">
TOTAL= <?= $total ?>
<hr>

<div class=" clearfix">
    <a  href="<?= site_url('produits/liste') ;?>" title="début de liste produit " class="lien btn btn_info      float-left ">Continuer mes achats </a>

</div>
<div class=" clearfix">

<a href="<?= site_url("") ?>" class="lien btn float-leftbtn-sm">Valider mon panier</a>
<a href="<?= site_url("Panier/clear") ?>" class="lien btn float-right btn-sm">Vider le panier</a>

</div>
<script>


 



// definir ici la classe de l'input pr que ça remarche 
  $("").change(function(){ 
 // var donnees = $(this).serialize();
 
         var qte = $(this).val();
         var id = $(this).data('id');
         // var qte = $(this)[name='qteliste']['val()'];

        // var qte = $(this.'#qteliste:selected').val();

         console.log(qte);
         console.log(id);


   

        $.ajax({
        type: "POST",
        url: "http://localhost/ci/index.php/Panier/modifqte/" + id + "/" + qte,
        data:qte,id,       
        dataType: 'json',
        success: function(data){  console.log('ok');   
                                }
        // $(#tot).html(data);


// façon raccourcie pr ecrire ajax 
        // $.post("http://localhost/ci/index.php/Panier/modifqte/", {
        // qte, 
        // id

        // }, 
        // function(data) {
        //         console.log(data);
        //     $( ".result" ).html( data );
        //     });
        
});
    });

</script>