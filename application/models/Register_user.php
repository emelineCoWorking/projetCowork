<?php
/**
 * Created by PhpStorm.
 * User: emeli
 * Date: 14/05/2017
 * Time: 17:06
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_user extends CI_Model{

    public $_id;
    public $_nom;
    public $_prenom;
    public $_email;
    public $_tel;
    public $_mdp;


    public function __construct(){
        parent::__construct();
       // $this->load_from_session();
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
        $this->_id=NULL;
        $this->_nom=NULL;
        $this->_prenom=NULL;
        $this->_email=NULL;
        $this->_tel=NULL;
        $this->_mdp=NULL;
    }

    public function insert($data) {
        $this->db->insert('user', $data);
    }

    protected function get_property_id(){
        return $this->_id;
    }

    public function get_property_email(){
        return $this->_email;
    }




}