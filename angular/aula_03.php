<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Escolhendo a imagem</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    </head>
    <body>
       <div ng-app="">
           
           <div class="w3-container w3-center">
                <h1> Escolha a imagem: </h1>
                <p>Opções disponiveis: 1,2,3,4</p>
                <p>Imagem: <input type="text" ng-model="imagem" value="3"></p>


              <h1> Escolha o estilo: </h1>
             <select class="w3-select w3-border" ng-model="estilo" >
                 <option value="" disabled selected>Escolha o estilo</option>
                 <option value="w3-circle">w3-circle</option>
                 <option value="w3-round-xxlarge">w3-round-xxlarge</option>
                 <option value="w3-round-jumbo">w3-round-jumbo</option>
                 <option value="w3-border w3-padding w3-padding-16 w3-padding-top">w3-border w3-padding w3-padding-16 w3-padding-top</option>
                 <option value="w3-border w3-padding-4 w3-padding-tiny w3-padding-top">w3-border w3-padding-4 w3-padding-tiny w3-padding-top</option>

             </select></br>

                <div class="w3-container">
                    <div class="w3-row">
                        <div class="w3-col m5">
                         <img src="img/{{imagem}}.png" class="{{estilo}}" style="width: 100%;"/>
                        </div>
                    </div>
               </div>
           </div>
        </div>
    </body>
</html>
