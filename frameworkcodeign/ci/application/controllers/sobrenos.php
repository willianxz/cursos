<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Sobrenos extends CI_Controller {
    
   
    
    public function index(){
        //Url padrão: http://localhost/frameworkcodeign/ci/sobrenos
        //echo __FUNCTION__; //Irá mostrar o nome da funçao (index)
        $this->load->view('sobrenos'); //Isso carregara a nossa view sobrenos, não é necessario colocar ali o .php
    }
    
     
    
}
