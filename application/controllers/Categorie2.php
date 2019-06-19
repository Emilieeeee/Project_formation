<?php
// application/controllers/Categorie2.php
 
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorie2 extends CI_Controller{



		public function cat1_json() {
//specifie au navigateur  le type de donnée qu'il va reecvoir , là comme c du jason il les enregistrera sous forme de tableau json
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
	













	;}