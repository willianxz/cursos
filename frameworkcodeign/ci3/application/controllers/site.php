<?php

defined('BASEPATH') OR exit('No direct script access allowed'); //Para não ser acessado diretamente.

class Site extends CI_Controller {
    
    
        public function __construct(){
            parent::__construct();
            $this->load->helper('url');//Tem que carregar essa biblioteca para poder utilizar a função base_url() em todos os métodos.
        }
    
    
    
    
       public function index(){ // o nome da função(metodo) sempre aparece na url.
            
            $dados = array( //URL PADRÃO: http://localhost/frameworkcodeign/ci3/site
              
                'titulo_pagina' => 'Bem vindo ao Site',
                'view_principal' => 'home', //Essa será a nossa body que iremos carregar ao ser passada para a view site.
               
            );
            
            $this->load->view('site',$dados);
        }
        
        
         public function faleconosco(){ // o nome da função(metodo) sempre aparece na url.
            
            $dados = array(
              
                'titulo_pagina' => 'Fale Conosco',
                'view_principal' => 'faleconosco', //Essa será a nossa body que iremos carregar ao ser passada para a view site.
               
            );
            
          $this->load->view('site',$dados);
        }
        
        
         public function sobrenos(){ // o nome da função(metodo) sempre aparece na url.
            
            $dados = array(
              
                'titulo_pagina' => 'Sobre Nós',
                'view_principal' => 'sobrenos', //Essa será a nossa body que iremos carregar ao ser passada para a view site.
               
            );
            
          $this->load->view('site',$dados);
        }
        
        
        public function dicas(){ // o nome da função(metodo) sempre aparece na url.
           
            //$this->load->helper('url'); //Tem que carregar essa biblioteca para utilizar a função base_url();
            //Poderia carregar arquivos de imagens dessa forma, porem só funcionaria para este método, então colocarei no construct
            //Que todos os metodos poderam utiliza-lo.
            
            $dados = array(
              
                'titulo_pagina' => 'Dicas',
                'view_principal' => 'dicas', //Essa será a nossa body que iremos carregar ao ser passada para a view site.
               
            );
            
          $this->load->view('site',$dados);
        }
        
        
         public function produtos(){ // o nome da função(metodo) sempre aparece na url.
           
            //$this->load->helper('url'); //Tem que carregar essa biblioteca para utilizar a função base_url();
            //Poderia carregar arquivos de imagens dessa forma, porem só funcionaria para este método, então colocarei no construct
            //Que todos os metodos poderam utiliza-lo.
            
            $dados = array(
              
                'titulo_pagina' => 'Produtos',
                'view_principal' => 'produtos', //Essa será a nossa body que iremos carregar ao ser passada para a view site.
               
            );
            
          $this->load->view('site',$dados);
        }
    
    
}