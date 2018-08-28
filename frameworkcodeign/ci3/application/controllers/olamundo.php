<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Olamundo extends CI_Controller {

	
	public function index()
	{
		$this->load->view('home');
	}
        
        
        public function ex3(){
            
            $dados = array(
              
                'titulo' => 'Este foi um titulo passado via controller',
                'texto' => 'Texto enviado pelo controlador',
                'menu' => array(
                  
                    0 => '<a href="#">Home</a>',
                    1 => '<a href="#">Dicas</a>',
                    2 => '<a href="#">Produtos</a>',
                    3 => '<a href="#">Sobre Nós</a>',
                    4 => '<a href="#">Fale Conosco</a>',
                ),
                
               // 'segmento' => $this->url->segment(3),
            );
            
            //Esse segmento irá pegar o segmento 3, a terceira barra na url e mostrar por exemplo:
            // 
            
            
            $this->load->view('exemplo3',$dados);
        }
        
}
