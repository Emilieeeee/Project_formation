	<?php
// application/controllers/Produits.php
 
defined('BASEPATH') OR exit('No direct script access allowed');

class Produits extends CI_Controller{

     

// Appels des differentes fonctions pr la page liste
// 1 class  par table regroupe l'ensemble des methodes qui font appel à cette table 
// 1 function par page qui utilise la même table
// public function acceuil (){
// $this->load->view('header');
// $this->load->view('header');



//         }



    public function bienvenue(){
        
            if ($this->session->user){

                if ( $this->session->user->Admin==1){
                     $this->load->view('navigation'); 

                    $this->load->view('bienvenueAdmin');

                    $this->load->model('produits_model');
// On appelle la méthode liste() du modèle,
                    $aListe = $this->produits_model->liste();
                    $aView["liste_produits"] = $aListe;
                    $this->load->view('liste', $aView);

                }

                else{
                    $this->load->view('navigationClient');
                    $this->load->view('bienvenueClient');

                // On charge le modèle 'produits_model'
                    $this->load->model('produits_model');
                // On appelle la méthode liste() du modèle,
                    $aListe = $this->produits_model->liste();
                    $aView["liste_produits"] = $aListe;

                // Appel de la vue avec transmission du tableau  
                    $this->load->view('listeClient', $aView);
                }
        }

        else {
        redirect(site_url("Users/connexion"));
        }
    }




// methode liste de la classe produit
        public function liste(){ 
            if($this->session->user){ 

                if($this->session->user->Admin==1){
                        $this->load->view('navigation');

                        $this->load->view('BarreRecherche');



                        $this->load->model('produits_model');
                        $aListe = $this->produits_model->liste();
                        $aView["liste_produits"] = $aListe;

                        $this->load->view('liste', $aView);







                }
                else{
                        $this->load->view('navigationClient');
                        $this->load->model('produits_model');
                        $aListe = $this->produits_model->liste();
                        $aView["liste_produits"] = $aListe;
                        $this->load->view('listeClient', $aView);

                }

            }
            else{
                    $this->load->view('navigationClient');
// On charge le modèle 'produits_model'
                    $this->load->model('produits_model');
// On appelle la méthode liste() du modèle,
                    $aListe = $this->produits_model->liste();

// Déclaration du tableau associatif à transmettre à la vue
// Ajoute des résultats de la requête au tableau des variables à transmettre à la vue      
                    $aView["liste_produits"] = $aListe;

// Appel de la vue avec transmission du tableau  
                    $this->load->view('listeClient', $aView);
        }

    }


    public function listeClient()
        { 

        $this->load->view('navigation');

        // On charge le modèle 'produits_model'
       $this->load->model('produits_model');
        // On appelle la méthode liste() du modèle,
       $aListe = $this->produits_model->liste();

     // Déclaration du tableau associatif à tranmettre à la vue
    // Ajoute des résultats de la requête au tableau des variables à transmettre à la vue      
        $aView["liste_produits"] = $aListe;

    // Appel de la vue avec transmission du tableau  
    $this->load->view('listeClient', $aView);


    }

// public function navigation(){
//     if ($user){
//         $message = (echo "session de ". $user->utilisateur_nom ;)
//         $this->load->view('navigation, $message');

// }


// PAGE AJOUT DE NOUVEAU PRODUIT
 public function ajout(){
    $this->load->view('navigation');

    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->load-> library ('upload') ;
    $this->load->helper('date');
    date_default_timezone_set('Europe/Paris');
        
        if($this->input->post()){ // 2ème appel de la page: au post : traitement du formulaire

            // On charge le modèle 'produits_model'
            $this->load->model('produits_model');

            // On appelle la méthode liste() du modèle,(syntaxe $this->nom_modele->methode() ):upload de tout les champs saisi (sauf image)et creation de l'id en bdd
            $aListe=$this->produits_model->ajout(); 

            // On appelle la méthode configfichier() du modèle et stocke le resultat dans une variable 
            $config=$this->produits_model->configfichierajout(); 

 

            // UPLOAD de l'image 

            //avec appel de methode model, ne fonctionne pas
            // $this->produits_model->ajoutphoto();

            //sans modele
            $this->load->library('upload');
            $this->upload->initialize($config);
            //ou à la place des 2 lignes au dessus Ne fonctionne pas: 
            //$this->load->library('upload',$config);

                    if (!$this->upload->do_upload('nouvellephoto')){
                        // fait l'upload photo et en même temps condition :le upload de photo n'a pas fonctionné

                        // $this->upload->display_errors( '<p>' , '</ p>' ); 
                        $error=array('error'=>$this->upload->display_errors());
                        // on réaffiche la vue du formulaire en passant les erreurs
                        $this->load->view('ajout', $error);
                        }

                    else{
                    // le upload de photo a fonctionné
                    redirect('produits/liste');
                        }
        }   
    else { // 1er appel de la page: affichage du formulaire avec variable error vide
      $this->load->view('ajout',array('error'=> ''));
    }

 }

// gestion des CATEGORIES 

public function cat1_json() {
//specifie au navigateur  le type de donnée qu'il va recevoir , là comme c du jason il les enregistrera sous forme de tableau json
            header("Content-type:application/json");
// recupere les données et les renvoie dans result (comme c du jason pas la peine de dire qu'on les stocke dans une variable qui est un tableau comme on le faisait en ajax qui recuperait du html)
            echo json_encode($this->db->query("SELECT * FROM categories WHERE cat_parent IS null")->result());

        }
        
public function cat2_json($cat_id) {

        $listecat = $this->db->query("SELECT * FROM categories WHERE cat_parent=?", $cat_id)->result();
        $this->output->
        set_content_type("application/json")->
        set_output(json_encode($listecat));
    }


// PAGE AJOUT CATEGORIE
public function ajout_categorie(){

    
    

    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->load-> library ('upload') ;


   



    if( $data=$this->input->post()){

      
        var_dump($data);
        $this->db->insert('categories',$data);
        $this->output->enable_profiler(TRUE);




    }
    else{

    $this->load->view('navigation');
    $this->load->view('ajout_categorie');

    }

}















public function f_modif($id) {
     $this->load->view('navigation');
    $this->load->helper('url');
    $this->load->helper('form');
    $this->load->library('upload');
    $this->load->helper('date');
    date_default_timezone_set('Europe/Paris');

                if ($this->input->post()) 
    
                        {   
                            // récupérer les données envoyées par le formulaire
                            $data = $this->input->post();

                            // charger  le modele et appeler la methode 
                            $this->load->model('produits_model');
                            $this->produits_model->f_modif($id); 

//config pour l'import de photo ou autre fichier 
                            $this->produits_model->configfichiermodif($id);
                            $config=$this->produits_model->configfichiermodif($id);

                    

                            $this->load->library('upload');
                            $this->upload->initialize($config); 
   
                            if (!$this->upload->do_upload('nouvellephoto2')){
                                 
                        
                                    $error=array('error'=>$this->upload->display_errors());
                                    $this->load->view('erreurs', $error);
                                     var_dump($config);
                                    var_dump($error);
                                    exit;
                                }

                            else{

                               redirect('produits/liste');
                            }
                        } 
    
                else 
    
                        {
    
                             $aListe = $this->db->query("SELECT * FROM produits WHERE pro_id= ?", array($id));
                             $aView["produits"] = $aListe->row(); // première ligne du résultat
                             $this->load->view('f_modif', $aView);
    
                        }


        }


public function fiche_supprime($id){

            $this->load->helper('url');
            $this->load->helper('form');

    
                  //  affichage de la vignette et mini formulare 
                         $aListe = $this->db->query("SELECT * FROM produits WHERE pro_id= ?", array($id));
    
                            $aView["produits"] = $aListe->row(); 
                            $this->load->view('fiche_supprime',$aView,$id);
                   
                        }


public function supprime($id){

                            $this->db->where('pro_id', $id);
                            $this->db->DELETE('produits');
                            redirect('produits/liste');

                        }
    







// ADD PANIER 


    
    public function ficheDetailAddProduit($id){

        if ($this->session->user){
            $this->load->view('navigation');

            $aListe = $this->db->query("SELECT * FROM produits WHERE pro_id= ?", array($id));
            $aView["produits"] = $aListe->row(); 
            $this->load->view('ficheDetailAddProduit',$aView,$id);


        }
        else {
        redirect(site_url("Users/connexion")); 
        }


}



    public function barreRecherche (){


        
        $this->load->view('navigation');
        $this->load->view('barreRecherche');
       
      

}





 }
 ?>