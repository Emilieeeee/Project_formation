<?php
// application/controllers/Panier.php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panier extends CI_Controller{

	public function listePanier() {

        $this->load->view('navigationClient');
		$this->load->view('listePanier');
		
    }


public function add($id) {
    if ($this->session->user){
//requete poour aller chercher la ligne des produits qui correspond à l'id cliqué dans liste produit et la stocker dans la variable pro
        $pro = $this->db->query("select * from produits where pro_id=?", $id)->row();
//on met les elements de la ligne dans un tableau 
        $data["produits"] = $pro;
//si produit ajouté 
 //var_dump($pro);
 //var_dump($pro->pro_id);
// $pro->quantite==0;
        if ($qte=$this->input->post("qte")) {
            
             //$this->output->enable_profiler(TRUE);

            


// si il n'y a pas encore de variable de session panier declarée
            if ($this->session->panier == null) {
//on cree une variable de session "panier" qui est un tableau vide 
                    $this->session->panier = array();
            }
//la variable panier est déjà crée (soit juste avt soit à un produit precedent )on peut maintenant stocker les infos de la variable de session panier dans la $tab  
            $tab=$this->session->panier;

// On regarde si le produit choisis est déjà dans le panier : si (en parcourant le tableau panier "$tab", pour chercher si la variable $pro existe),
            //var_dump(isset($tab[$pro->pro_id]));
            $pro_id=$pro->pro_id;
            //var_dump(in_array($pro_id,$tab));
            //var_dump(array_values($tab));

//cherche si l'id existe et retourne sa position dans le tableau 

//var_dump($ligne=array_search($pro->pro_id, array_column($tab,'pro_id')));
        // if($ligne=array_search($pro->pro_id,array_column($tab,'pro_id'))) 

            //EN 2 fois (pr regler le soucis du produit 0) on stocke la position dans la variable ligne 
            $ligne=array_search($pro->pro_id,array_column($tab,'pro_id'));
           
            //if (!isset($tab[$pro->pro_id]))
            if(is_int($ligne)) 
                 
//si il y a déjà le produit dans le tableau 
            {
                    //var_dump($ligne);
                    // $q = $tab[$ligne]->quantite;
                    // $q += $qte;
                    // $tab[$ligne]->quantite = $q;

//recupère la qté dejà enregistrée qui correspond à la ligne concernée d ela liste 
                    var_dump($tab[$ligne]->quantite);        
//var_dump(($tab[$ligne]->quantite));
//var_dump($tab);
         
                    var_dump($qte);

                    // var_dump($pro->quantite);
                    $qte=$tab[$ligne]->quantite+$qte;
                    var_dump($qte);
                    $pro->quantite=$qte;
                    
                    $prod['']=$pro;
                    // var_dump($pro);
                    // var_dump($prod);
                    // exit;
                     // var_dump($pro->quantite);
                   
                     //array_push($tab, $pro);
                     // var_dump($tab);
                     // var_dump($ligne);
                     // var_dump($tab);
                     array_splice($tab,$ligne,1,$prod);

                     // var_dump($tab);
          
            //array_splice(input, offset)($tab,$pro);

            }
             else 
            {
//si la lgne n'est pas un entier , car pas de ligne avec cet id dans la liste: renvoie false 
                // initialise la variable qte
                        $pro->quantite=$qte;
// on ajoute la variable $pro dans le tableau panier $tab
                        array_push($tab, $pro);
            } 


// on actualise la variable panier avec les nouveaux produits ajoute 
        $this->session->panier=$tab;

         redirect(site_url("Panier/listePanier"));

        } 

        else {
        $this->output->enable_profiler(TRUE);
        $this->load->view('navigationClient');
        $this->load->view('ficheDetailAddProduit', $data);
        
            }

}else{
        redirect(site_url("Users/connexion"));

}

}


public function supprimeligne($id){


            // $this->output->enable_profiler(TRUE);
            $pro = $this->db->query("select * from produits where pro_id=?", $id)->row();
            $tab=$this->session->panier;

            $ligne= array_search($pro->pro_id, array_column($tab,'pro_id'));
            $nbreligne= count($tab);
            // var_dump($ligne);
            // var_dump($nbreligne);
           
            
            // var_dump(array_slice($tab,0,$ligne));
            $tab1=array_slice($tab,0,$ligne);
            // var_dump(array_slice($tab,$ligne+1,$nbreligne));
            $tab2=array_slice($tab,$ligne+1,$nbreligne);

            // $lignesupprime=array_slice($tab,$ligne,1);
            // $tab=array_diff($tab,$lignesupprime);
            $tab=array_merge($tab1,$tab2);
            
         
            
            $this->session->panier=$tab;
            
            redirect(site_url("Panier/listePanier"));


    }


public function modifqte($id,$qte){
      
         // $qte=$_POST['qte'];
         // $id=$_POST['id'];
var_dump($id);
         $pro = $this->db->query("select * from produits where pro_id=?",$id)->row();

         $ligne=array_search($pro->pro_id,array_column($tab,'pro_id'));
         $tab=$this->session->panier;
         
         



         if ($qte>0){
               var_dump($qte);
               $pro->quantite=$qte;
               var_dump($pro->quantite);

            $this->output->
            set_content_type("application/json")->
            set_output(json_encode($pro->quantite));
               

         }
         else {
             echo "la quantité min est 1 ";
         }

    }



    public function clear(){

        $this->session->panier = array();
        

        redirect(site_url("Panier/listePanier"));
    }






    public function qte_panier1_jason($qte){

        header("Content-type:application/json");



    }



    function test() {

        $tab = $this->session->panier;

        var_dump (array_search(30, array_column($tab,'pro_id')));
    }




public function addmodif($id){


    $pro = $this->db->query("select * from produits where pro_id=?", $id)->row();


    $data["produits"] = $pro;
   

//recupere le post pour creer une nvelle ligne 
    if ($qte=$this->input->post("qte")) {
             $tab=$this->session->panier;

//supprime la ligne existante 
    $ligne= array_search($pro->pro_id, array_column($tab,'pro_id'));
    $nbreligne= count($tab);
           
    $tab1=array_slice($tab,0,$ligne);
    $tab2=array_slice($tab,$ligne+1,$nbreligne);
    $tab=array_merge($tab1,$tab2);
    $this->session->panier=$tab;


           if ($this->session->panier == null) {
                    $this->session->panier = array();
                }

            $tab=$this->session->panier;


            // $pro_id=$pro->pro_id;
            $pro->quantite=$qte;

            array_push($tab, $pro);

            $this->session->panier=$tab;
            redirect(site_url("Panier/listePanier"));

    }



 

        else {
        
        $this->load->view('navigationClient');
        $this->load->view('ficheDetailAddProduit',$data);
        
            }


}
}