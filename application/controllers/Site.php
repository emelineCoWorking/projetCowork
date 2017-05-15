<?php
/**
 * Created by PhpStorm.
 * User: emeli
 * Date: 30/04/2017
 * Time: 17:03
 */
defined('BASEPATH') OR exit('No direct script access allowed');

    class Site extends CI_Controller{

        public function index(){

            $data["title"]="Page accueil";
            $this->load->view('common/header');
            $this->load->view('site/index');
            $this->load->view('common/footer',$data);

        }

        public function login(){

            $this->form_validation->set_rules('mail', '"Le mail"', 'trim|required|valid_email|xss_clean');
            $this->form_validation->set_rules('mdp', '"Le mot de passe"', 'trim|required|xss_clean');

            if($this->form_validation->run()){
               $mail= $this->input->post('mail');
               $mdp=$this->input->post('mdp');
               $this->auth_user->login($mail,$mdp);
               redirect('index');
            }else{
                $this->load->view('common/header');
                $this->load->view('site/login');
                $this->load->view('common/footer');
            }
        }

        public function logout(){
            $this->auth_user->logout();
            redirect('index');
        }

        public function inscription(){
            $this->form_validation->set_rules('nom', '"Le nom"', 'trim|required|xss_clean');
            $this->form_validation->set_rules('prenom', '"Le prenom"', 'trim|required|xss_clean');
            $this->form_validation->set_rules('mail', '"Le mail"', 'trim|required|valid_email|xss_clean');
            $this->form_validation->set_rules('tel', '"Le téléphone"', 'trim|required|xss_clean');
            $this->form_validation->set_rules('mdp', '"Le mot de passe"', 'trim|required|xss_clean');
            $this->form_validation->set_rules('confirme_mdp', '"Le mot de passe"', 'trim|required|xss_clean|matches[mdp]');

            if($this->form_validation->run()){
                $nom= $this->input->post('nom');
                $prenom= $this->input->post('prenom');
                $mail=$this->input->post('mail');
                $tel=$this->input->post('tel');
                $mdp=$this->input->post('mdp');
                $data = array(
                    'nom' => $nom,
                    'prenom'=>$prenom,
                    'email'=>$mail,
                    'phone'=>$tel,
                    'pwd'=>password_hash($mdp,PASSWORD_DEFAULT)
                );
                $this->register_user->insert($data);
                redirect('index');
            }else{
                $this->load->view('common/header');
                $this->load->view('site/inscription');
                $this->load->view('common/footer');
            }
        }
    }