<?php


$this->load->view('includes/header');
$this->load->view('includes/'.$view_principal);//Aqui carregaremos nossa body, de acordo com o dado enviado na view_principal
$this->load->view('includes/footer');