<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Faleconosco extends CI_Controller {
    
    
    public function index(){
        //Url padrão: http://localhost/frameworkcodeign/ci/faleConosco 
        //echo __FUNCTION__; //Irá mostrar o nome da funçao (index)
        $this->load->view('faleconosco'); //Isso carregara a nossa view faleconosco, não é necessario colocar ali o .php
    }
    
     public function incluir(){
        //Url padrão: http://localhost/frameworkcodeign/ci/faleConosco/incluir 
        //echo __FUNCTION__; //Irá mostrar o nome da funçao (incluir)
    }
    
    
}