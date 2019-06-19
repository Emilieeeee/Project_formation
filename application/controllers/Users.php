<!-- Users controller -->


	<?php
// application/controllers/Produits.php
 
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    public  function FormulaireCreationCompte() {

              
         if ($data = $this->input->post()) {
            //crypte la donnée utilisateur autre selon la methode par defaut
                $data["utilisateur_autre"] = password_hash($data["utilisateur_autre"],PASSWORD_DEFAULT);
                $this->db->insert("utilisateur", $data);

                redirect(site_url("Users/connexion"));
            }
            else {
            $this->load->view('navigationClient');
            $this->load->view('FormulaireCreationCompte');
          
            }
        }




    public    function connexion(){

        if($data = $this->input->post()) {
            // debugage magique 
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
                            $this->session->message = "Problème d'identification !!!";
                            $this->session->message = "";
                            redirect(site_url("Users/connexion"));
                            //saisie invalide

                            
                            }
                    }
                    else {
//si mail INvalide
                            $this->session->user = null;
                            $this->session->message = "Problème d'identification !!!";
                            redirect(site_url("Users/connexion"));
                            //saisie invalide
                            // echo "mail";
                    }
            
        }
        //si pas de post (premier chargement de la page)
        else {

            $this->load->view('navigationClient');
            $this->load->view('connexion.php');
        }
    }
    




    public function deconnexion()
    {
        $this->session->user = null;
    
        redirect(site_url("Users/connexion"));
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