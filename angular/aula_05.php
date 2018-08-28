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
                <h1> Escolha o seu pokemon: </h1>
                

             <select class="w3-select w3-border" ng-model="pokemon" >
                 <option value="" disabled selected>Escolha o Pokemon</option>
                 <option value="picaxu">Picaxu</option>
                 <option value="bulbasouro">Bulbasouro</option>
                 <option value="charmander">Charmander</option>
                 <option value="margikarp">Margikarp</option>

             </select></br>
             
             <h1>Você escolheu um: {{pokemon}}</h1>
                <div class="w3-container">
                    <div class="w3-row">
                        <div class="w3-col m5">
                            <img src="img/{{pokemon}}.gif"  style="width: 100%;"/>
                        </div>
                    </div>
               </div>
           </div>
        </div>
    </body>
</html>
