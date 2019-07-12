<!-- accueil -->
<?php
// application/controllers/Panier.php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- <div class="col-md-12" >
 <img src="
          
       <?php echo  base_url('assets/images/baniere fleurs.jpg') ;?> " max-height="" style="width:100%" class="img-fluid imgaccueil" alt="..."> 

</div> -->

 <!-- 
<div background="<?php echo base_url('../images/baniereFleurs.jpg');?>"></div>
<div class="contenu-carrousel">
<div class="carrousel">
<div class="carrousel1"background="<?php echo base_url('assets/images/baniereFleurs.jpg.jpg');?>"></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
</div>
</div>
<div class=controle>
<button onclick="carrousel('-')">❮</button>
<button onclick="carrousel('')">❯</button>
</div>
<script>
	var angle = 0;
	function carrousel(sign){spinner=document.querySelector(".carrousel");
	if(!sign){angle = angle + 60}else{ angle = angle - 60}spinner.setAttribute("style","transform:rotateY("+ angle +"deg);")}	
</script>

<!-- <img src="/assets/images/baniere fleurs.jpg"> -->
<style type="text/css">
	.carrousel div:nth-child(1) {
background-image:url(<?php echo base_url('assets/images/baniere fleurs.jpg');?> background-size:100%; width: 100%; no-repeat center center/cover;
}
</style> -->
<div class="bd-example">


  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active ">
        <img src="<?php echo base_url('assets/images/baniereFleursO.jpg');?>" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block ">
          <h2 class="titrecarroussel"><span class="font-italic ">jardi</span> TOU</h2>
          <h2 class="fonce" >TOUT pour le Jardin</h2>
          <p class="font-italic fonce"> Notre entreprise familiale met tout son savoir-faire à votre disposition dans le domaine du jardin et du paysagisme.</p>
          <p class="font-italic fonce"> Créée il y a 70 ans, notre entreprise vend fleurs, arbustes, matériel à main et motorisés.</p>
          <p class="font-italic fonce">Implantés à Amiens, nous intervenons dans tout le département de la Somme : Albert, Doullens, Péronne, Abbeville, Corbie.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="..." class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="..." class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>