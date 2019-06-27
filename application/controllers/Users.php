<!-- Users controller -->


	<?php
// application/controllers/Produits.php
 
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    public  function FormulaireCreationCompte() {

                $this->load->helper('form');
                $this->load->library('form_validation');
//reglages des criteres de validation 
            //    $this->validation_formulaire->set_rules ('nom du chaps du formulaire','nom visible','regle de validation' , 'message erreur personnalisé');
                $this->form_validation->set_rules('utilisateur_mail', 'Email', 'required','Vous devez entrer un email valide');
                $this->form_validation->set_rules('utilisateur_nom', "Nom d'utilisateur", 'trim|required|min_length[5]|max_length[12]',"Votre nom d'utilisateur doit contenir entre 5 et 12 caractères" );
                $this->form_validation->set_rules('utilisateur_a', 'Mot de Passe', 'required');
                $this->form_validation->set_rules('utilisateur_autre','Confirmation du mot de passe','required');
                





         if ($data = $this->input->post()) {

                if($this->form_validation->run()){ 
                        
                   
                   if ($data['utilisateur_a']==$data["utilisateur_autre"]){
                        unset($data['utilisateur_a']);
                   

//crypte la donnée utilisateur_autre selon la methode par defaut
                        $data["utilisateur_autre"] = password_hash($data["utilisateur_autre"],PASSWORD_DEFAULT);
                    $this->db->insert("utilisateur", $data);
                    // $this->db->protect_identifiers('utilisateur', TRUE);

                    redirect(site_url("Users/nouveau_user_ok"));  
                    }
                    else{
                        
                        $this->session->message = "Les mots de passe saisis ne sont pas identiques";
                        // $this->session->message = "";
                        redirect(site_url("Users/FormulaireCreationCompte"));
                        $this->session->message = null;

                    }


                } 
                else 
                {   
                    $this->load->view('navigationClient');
                    $this->load->view('FormulaireCreationCompte');

                } 
          
         }
         else {
            $this->load->view('navigationClient');
            $this->load->view('FormulaireCreationCompte');
          
            }
        }




    public    function connexion(){

         $this->load->helper('form');
         $this->load->library('form_validation');


         $this->form_validation->set_rules('utilisateur_mail', 'Email', 'required','Vous devez entrer un email valide');
         $this->form_validation->set_rules('utilisateur_autre','Mot de passe','required');



        
        if($data = $this->input->post()) {
            if($this->form_validation->run()){    
            
            // $this->output->enable_profiler(TRUE);
//si post
                $email = $data["utilisateur_mail"];
                $password = $data["utilisateur_autre"];

//on stocke la ligne correspondant au mail dans $user
                $user = $this->db->query("select * from utilisateur where utilisateur_mail=?", $email)->row();
//si mail valide
                    if ($user) {
//si mdp valide
                            if(password_verify($password, $user->utilisateur_autre)) {
                            // mot de passe ok
                                //enregistrement de la variable session
                                $this->session->user = $user;

                                redirect(site_url("Produits/bienvenue"));

                                }

                            else {
//si mdp INvalide       
                            $this->session->user = null;
                            $this->session->message = "Saisie invalide!!!";
                            // $this->session->message = "";
                            redirect(site_url("Users/connexion"));
                            $this->session->message = null;
                            //saisie invalide

                            
                            }
                    }
                    //si mail INvalide
                    else {

                            $this->session->user = null;
                            $this->session->message = "Erreur d'identification !!!";
                            // $this->load->view('navigationClient');
                            // $this->load->view('connexion.php');
                            redirect(site_url("Users/connexion"));
                            $this->session->message = null;
                            //saisie invalide
                            // echo "mail";
                    }
                }
            else {
            $this->session->user = null;
            $this->session->message = "Vous devez renseigner les champs !!!";

             redirect(site_url("Users/connexion"));
             $this->session->message = null;
        }
            
        }

        //si pas de post (premier chargement de la page)
        else {
            
            $this->load->view('navigationClient');
            $this->load->view('connexion.php');
            $this->session->message = null;
        }
    }
    





    public function deconnexion()
    {
        $this->session->user = null;
    
        redirect(site_url("Users/connexion"));
    }

   
    
    public function nouveau_user_ok() {


            $this->load->view('navigationClient');
            $this->load->view('success_creation_compte');
            




    }





     



	
		






		// function form()
  //   	{
  //       $this->load->helper(array('form', 'url'));
  //       $this->load->library('form_validation');
  //       $this->form_validation->set_rules('login', 'Username', 'required');
  //       $this->form_validation->set_rules('password', 'Password', 'required');
  //       $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
  //       $this->form_validation->set_rules('email', 'Email', 'required');
  //       if ($this->form_validation->run() == FALSE) {
  //           $this->load->view('FormulaireCreationCompte.php');
  //       } else { $this->load->view('validationok'); }
  //   	} 








	}