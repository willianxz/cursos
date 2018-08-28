<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Produtos extends CI_Controller {
    
   
    
    public function index(){
        //Url padrão: http://localhost/frameworkcodeign/ci/produtos
        //echo __FUNCTION__; //Irá mostrar o nome da funçao (index)
        $this->load->view('produtos'); //Isso carregara a nossa view produtos, não é necessario colocar ali o .php
    }
    
     
    
}
