<!--  validationok.php -->

 <?php
   defined('BASEPATH') OR exit('No direct script access allowed');
   
  ?>

<html>
   <head>
    <meta charset="utf-8">
    <title>formulaire valide</title>

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
     <link rel="stylesheet" href="<?= base_url("assets/css/style.css"); ?>">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">


</head>
	
    <body>
        <h3>Le formulaire de création de compte a bien été transmis !</h3>
        <p><?php echo anchor('formulaire', 'Essayez à nouveau'); ?></p>
    </body> 
</html>
