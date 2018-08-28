<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
https://jaison.com.br/video/95/framework-w3-css-curso-completo-parte-10-barras-de-navegacao-lateral-com-botao-de-recolher-e-expandir
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<title> W3.css</title>
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
        <!-- LINK PARA CHAMAR O W3.CSS -->
    </head>
    <body>
	  
    <nav class="w3-sidenav w3-white w3-card-2" style="display:none;">
	  <a href="javascript:void(0)" onclick="w3_close()" class="w3-closenax w3-large">
	   Fechar X
	  </a>
	  
	  <a href="#">Link</a>
	  <a href="#">Link</a>
	  <a href="#">Link</a>
	  <a href="#">Link</a>
	  <a href="#">Link</a>
	  </nav>
	  
	  
	   <header class="w3-container w3-teal">
	   <span class="w3-opennav w3-xlarge" onclick="w3_open()">&#9776;</span>
	    <h1>Seja bem vindo!</h1>
	   </header>
	   
	   <img src="img/01.jpg" style="width:100%">
	   
	   <div class="w3-container">
	   <p>texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto</p>
	   </div>
	   
	  
	  <footer class="w3-container w3-teal">
	    <h5>Rodapé</h5>
		<p>Texto rodapé</p>
	  </footer>
	  
	  
	  <script>
	    function w3_open(){
                //document.getElementsByClassName("w3-sidenav")[0].style.width = "100%";
		  document.getElementsByClassName("w3-sidenav")[0].style.display = "block";
		}
		
		function w3_close(){
		  document.getElementsByClassName("w3-sidenav")[0].style.display = "none";
		}
		
	  </script>

    </body>
</html>
