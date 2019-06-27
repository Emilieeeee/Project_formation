
<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
	
 
	
class Produits_model extends CI_Model
	
{
	
 		     public function liste() 
	
     {
	
    // $aListe = $results->result(); Récupération des résultats    
   
         $requete = $this->db->query("SELECT * FROM produits");
	
         $aListe = $requete->result(); 

         return $aListe;      

     }  

	


 public function ajout(){

     $this->load->helper('form');
    

      $data = $this->input->post();
      unset($data['cat1']);
      unset($data['cat2']);
      $this->db->insert('produits', $data);

	  return $data;
      // selectionner le pro_id de la ligne créee
     
     }


public function configfichierajout(){

           $name=$_FILES["nouvellephoto"]["name"];//stocke dans la variable name la saisie de fichier dans l'input type file dont le  "name" du champs est nouvelle photo 
          
           $file_ext=pathinfo($name, PATHINFO_EXTENSION);//recupere l'extension du fichier saisi 

           $config=array(
			'upload_path' => './assets/images/jarditou_photos/', // chemin où sera stocké le fichier 
			'allowed_types' => 'gif|jpg|png|jpeg',
			'file_name'=>$this->db->insert_id().'.'.$file_ext,
			'overwrite'=> 'TRUE',  // ecrase le fichier du même nom

			'max_size'=> '1024' , // Peut être défini pour une taille de fichier particulière, ici 2 MB (2048 Ko)
			'max_height'=> '1024' ,
			'max_width'=> '768'
			);
			return $config;


// Autre methode par requete remplacé par insert_id qui donne le dernier id entré 
// $requete = $this->db->query("SELECT MAX(pro_id) FROM `produits` ");
// $pro_id = $requete->result(); 
// $config=array(
// 'upload_path' => './assets/images/jarditou_photos/',
// 'allowed_types' => "gif|jpg|png|jpeg|pdf",
// 'file_name'=>$pro_id.'.'.$file_ext,

// 'max_size'=> '1024' , 
// 'max_height'=>  '1024'  ,
// 'max_width'=> '768'
// );
// return $config;

//AUTRE METHODE DE CONFIG de fichier uploadé entrée par entrée 

           // $config['upload_path'] = './assets/images/jarditou_photos/'; // chemin où sera stocké le fichier
           // // $config['file_name'] = $maxid.".".$file_ext;      // nom du fichier final
           //  $config['file_name']= $this->db->insert_id().'.'.$file_ext;
           // $config['allowed_types'] = 'gif|jpg|png|jpeg';    // Types autorisés (ici pour des images)
           // $config['overwrite']= TRUE;                 // ecrase le fichier du même nom
           // $config['max_size']= '1024';
           // $config['max_width']= '1024';
           // $config['max_height']= '768';


			}

// ne fonctionne pas
// public function ajoutphoto(){

// 			$this->load->library('upload');
//             $this->upload->initialize($config);
//             $this->upload->do_upload('nouvellephoto');
// $etat="ajoutok";
// return $etat;

// }


public function f_modif($id){

		
      	 // récupérer les données envoyées par le formulaire
         $data = $this->input->post();
       	 // selectionner le pro_id de la ligne créee
         $this->db->where('pro_id', $id);
         $this->db->update('produits', $data);

     	}

public function configfichiermodif($id){

           $name=$_FILES["nouvellephoto2"]["name"];//stocke dans la variable name la saisie de fichier dans l'input type file dont le  "name" du champs est nouvelle photo 
          
           $file_ext=pathinfo($name, PATHINFO_EXTENSION);//recupere l'extension du fichier saisi 

           $config=array(
			'upload_path' => './assets/images/jarditou_photos/', // chemin où sera stocké le fichier 
			'allowed_types' => 'gif|jpg|png|jpeg',
			'file_name'=>$id.'.'.$file_ext,
			'overwrite'=> 'TRUE',  // ecrase le fichier du même nom

			'max_size'=> '1024' , // Peut être défini pour une taille de fichier particulière, ici 2 MB (2048 Ko)
			'max_height'=> '1024' ,
			'max_width'=> '768'
			);
			return $config;
			}


// public function ajoutphoto{

//       $this->load->helper('form');
    

  
//       $data = $this->input->post();
      
//       $this->db->insert('produits', $data);


// }


 


}      
?>