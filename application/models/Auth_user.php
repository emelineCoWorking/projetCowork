<?php
/**
 * Created by PhpStorm.
 * User: emeli
 * Date: 08/05/2017
 * Time: 17:06
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_user extends CI_Model{

    public $_email;
    public $_id;

    public function __construct(){
        parent::__construct();
        $this->load_from_session();
    }

    public function __get($key){
        $method_name = 'get_property_' . $key;
        if(method_exists($this,$method_name)){
            return $this->$method_name();
        }else{
            return parent::__get($key);
        }
    }

    protected function clear_data(){
        $this->_email=NULL;
        $this->_id=NULL;
    }

    protected function  clear_session(){
        $_SESSION['id']=NULL;
        $_SESSION['email']=NULL;
    }

    protected function get_property_id(){
        return $this->_id;
    }

    public function get_property_is_connected(){
        return $this->_id !== NULL;
    }

    public function get_property_email(){
        return $this->_email;
    }

    protected function load_from_session(){
        if($this->session->auth_user){
            $this->_id = $this->session->auth_user['id'];
            $this->_email = $this->session->auth_user['email'];
        }else{
            $this->clear_data();
        }
    }

    protected function load_user($email){
        return $this->db
                ->select('id_utilisateur, email, pwd')
                ->from('user')
                ->where('email',$email)
                ->get()
                ->first_row();
    }

    public function login($email, $pwd){
        $user= $this->load_user($email);
        if(($user !== NULL) && password_verify($pwd,$user->pwd)){
            $this->_id=$user->id_utilisateur;
            $this->_email=$user->email;
            $this->save_session();
        }else{
            $this->logout();
        }
    }

    public function logout(){
        $this->clear_data();
        $this->clear_session();
    }

    public function save_session(){

      $_SESSION['id']=$this->_id;
      $_SESSION['email']=$this->_email;
    }


}