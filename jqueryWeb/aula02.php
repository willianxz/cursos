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
    <body><!-- URL DO CURSO: https://www.youtube.com/watch?v=O1Rts9Goc9A&list=PLH4WTsFKLXIcswDAqSge13AC76FiX4fCk&index=3 -->
        <script src="../jquery-1.12.4.js"></script>
        
        <script>
        
        $(document).ready(function(){
           
          /*
         $("h1").css("color","#f66");
         $("h1").hide();
         $("h1").delay("1000");
         $("h1").fadeIn("slow");
         $("h1").text("O texto foi alterado.");
           */
         
          /* 2 - Modo
          $("h1").css("color","#f66").hide().delay("1000").fadeIn("slow").text("O texto foi alterado.");         
         */
        
        /*  3 - modo 
        
        $("h1")
          .css("color","#f66")
          .("h1").hide()
          .$("h1").delay("1000")
          .$("h1").fadeIn("slow")
          .$("h1").text("O texto foi alterado.")
          .click(function(){ 
            $("body").css("background","#30");
          
          });
        
        */
        
        function estilizarH1(){
            $("h1").css("color","#f66").hide().delay("1000").fadeIn("slow").text("O texto foi alterado."); 
        }
        
        estilizarH1();
        
        $("a").css({color: "red", display: "block"});
        $(".link2").css("color","green");
        $("#link3").css("color","yellow");
        
        });
        
        
        
        
        </script>
        
        <h1>Testando o h1!</h1>
        
        <a href="#">Link 1</a>
        <a href="#" class="link2">Link 2</a>
        <a href="#" id="link3">Link 3</a>
        
    </body>
</html>
