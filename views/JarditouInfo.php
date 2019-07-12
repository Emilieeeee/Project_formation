<!-- JarditouInfo.php  -->


<?php
// application/controllers/Panier.php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="row ">
 	
	
	

   
 	      <div class="col-md-12 card-img-overlay justify-content-center">
          <h2 class="card-title titrejardi text-center justify-content-center vertical-align-middle"><span class="jardi font-italic" >Jardi </span><span class="tou" >Tou</span></h2>
          
       
          </div>
        </div>
</div> 

<div class="groupevig">
       <div class="row">
 				   <div class="col-md-4  viginfo">
              <div class="card text-center vigcard">

                <div class="card-body viginfoint titrev " id="titrev1"   >
                    <h2 class="card-title text-white h2v  "> L'entreprise</h2>
               
                </div>

               <div class="card-body viginfoint textev text-left" id="textev1" > 
          			<!-- <h5 class="card-title" >L'entreprise</h2> -->

          		    	<p class=""> Créée il y a 70 ans, notre entreprise reste familiale.</p> <p class="">Nous vendons fleurs, arbustes, matériel à main et motorisés.</p>
                    <p class="">Nous proposons toute une gamme de service paysagers à domicile</p>
          			   <p class=" ">Implantés à Amiens, nous intervenons dans tout le département de la Somme : Albert, Doullens, Péronne, Abbeville, Corbie.</p>
                   <p class="text-center">
                    <i class="fas fa-angle-double-up closev" id="closev1"></i></p>
                </div>
          </div>
       </div>

       <div class="col-md-4  viginfo">
          <div class="card text-center vigcard">

            <div class="card-body viginfoint titrev " id="titrev2" >
                <h2 class="card-title text-white h2v"> Qualité</h2>
               
            </div>

            <div class="card-body viginfoint textev text-left"  id="textev2" > 
                <!-- <h5 class="card-title" >L'entreprise</h2> -->
                <p class=""> Notre entreprise c'est forgé une experience solide.</p>

                <p class=""> Nous mettons tout notre savoir-faire à votre disposition dans le domaine du jardin et du paysagisme.</p>
               
                <p class="">Nous travaillons avec les meilleurs fabricants, pour vous garantir du materiel de qualité </p>
                 <p class="">Nous avons des partenariats avec des producteurs de confiance, respectueux de l'environnement. Nous favorisons chaque fois que c'est possible une production de proximité. </p>
                  <p class="text-center">
                <i class="fas fa-angle-double-up closev text-center" id="closev2"></i></p>
            </div>
          </div>
       </div>
       <div class="col-md-4  viginfo">
          <div class="card text-center vigcard">

            <div class="card-body viginfoint titrev" id="titrev3"  >
                <h2 class="card-title text-white h2v">Devis gratuit</h2>
               
            </div>

            <div class=" card-body viginfoint textev text-left" id="textev3"> 
                <!-- <h5 class="card-title" >L'entreprise</h2> -->

                <p class="text-justify">Vous souhaitez un devis? Nous vous le réalisons gratuitement.</p>
                <p class="">Vous pouvez bien sûr contacter pour de plus amples informations ou pour une demande d’intervention.</p>
               <p class="">Implantés à Amiens, nous intervenons dans tout le département de la Somme : Albert, Doullens, Péronne, Abbeville, Corbie.</p>
               <P class="text-center">
                <i class="fas fa-angle-double-up closev text-center" id="closev3"></i></P>
            </div>
          </div>
       </div>

<script>

 $("#textev1").hide();
  // $( ".texte" ).hide();
 $("#titrev1").click(function(){
       // $(".titrev" ).hide();
      // $(".textev" ).toggle(display);
      $("#textev1").show(); 
 });

  $("#closev1").click(function(){
        // $("#titrev1" ).show();
      // $(".textev" ).toggle(display);
        $("#textev1").hide(); 

});

 $("#textev2").hide();
  // $( ".texte" ).hide();
 $("#titrev2").click(function(){
       // $(".titrev" ).hide();
      // $(".textev" ).toggle(display);
      $("#textev2").show(); 
 });
  $("#closev2").click(function(){
        // $("#titrev2" ).show();
      // $(".textev" ).toggle(display);
        $("#textev2").hide(); 

});

  $("#textev3").hide();
  // $( ".texte" ).hide();
 $("#titrev3").click(function(){
       // $(".titrev" ).hide();
      // $(".textev" ).toggle(display);
      $("#textev3").show(); 
 });

  $("#closev3").click(function(){
        // $("#titrev3" ).show();
      // $(".textev" ).toggle(display);
        $("#textev3").hide(); 

});

 //  $("#titrev").mouseover(function(){
 //      // $(".titre" ).toggle(display);
 //      // $(".textev" ).toggle(display);
 //     $(".textev").show(); 
 // });
</script>
      
        
 				<!-- <div class="col-md-4 viginfo">
          <div class="card">
              <div class="viginfoint card-body">
          

          			<h2 class="card-title" >Qualité</h2>
          			
          			<p class=""> Nous mettons tout notre savoir-faire à votre disposition dans le domaine du jardin et du paysagisme.</p>
          			<p class=""> Créée il y a 70 ans, notre entreprise vend fleurs, arbustes, matériel à main et motorisés.</p>
          			<p class="">Implantés à Amiens, nous intervenons dans tout le département de la Somme : Albert, Doullens, Péronne, Abbeville, Corbie.</p>
       			  </div>
            </div>
          </div>
        
 				<div class="col-md-4 viginfo">
          <div class="card text-center">
            <div class="viginfoint card-body">
          			<h2 class="card-title" >Devis gratuit</h2>
          
          			<p class="text-justify">Vous souhaitez un devis? Nous vous le réalisons gratuitement.</p>
          			<p class="">Vous pouvez bien sûr contacter pour de plus amples informations ou pour une demande d’intervention.</p>
         			 <p class="">Implantés à Amiens, nous intervenons dans tout le département de la Somme : Albert, Doullens, Péronne, Abbeville, Corbie.</p>
        		</div>
      	  </div>
        </div>
</div> -->

 </div>
 



     