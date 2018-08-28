<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Dicas extends CI_Controller {
    
    public function __construct() 
        { 
            parent::__construct();
            $this->load->helper('url'); //Tem que carregar essa biblioteca para utilizar a função base_url();
        } 
    
    public function index(){
        //Url padrão: http://localhost/frameworkcodeign/ci/dicas
        //echo __FUNCTION__; //Irá mostrar o nome da funçao (index)
        $this->load->view('dicas'); //Isso carregara a nossa view faleconosco, não é necessario colocar ali o .php
    }
    
     
    
}
