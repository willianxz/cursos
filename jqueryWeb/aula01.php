<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body><!-- URL DO CURSO: https://www.youtube.com/watch?v=fX7UwiH5qnk&list=PLH4WTsFKLXIcswDAqSge13AC76FiX4fCk&index=2 -->
        
         <script src="../jquery-1.12.4.js"></script> 
         
         <script>
             
             $(document).ready(function(){                
                alert("Foi carregado o DOM!");//Primeiro carrega o DOM e emite o alerta que foi carregado.                
             });
             
             $(window).load(function(){
                alert("Elementos carregados!");//Segundo carrega os elementos da página e emite o alerta que foram carregados.
             });
             
         </script>
       
         <img src="http://orig09.deviantart.net/ed4c/f/2014/007/e/a/stargate_atlantis_city_2014___cam__7_by_coldilian-d718lya.png"/>
         <!-- Essa imagem foi colocada grande para mostrar que será exibido o alerta do load apenos quando todos os elementos html forem carregados. -->
    </body>
</html>
