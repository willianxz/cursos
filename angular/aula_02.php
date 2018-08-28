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
           <h1> Escolha a imagem: </h1>
           <p>Opções disponiveis: 1,2,3,4</p>
           <p>Imagem: <input type="text" ng-model="imagem"></p>
 	 
           <img src="img/{{imagem}}.png"/>
        
        </div>
    </body>
</html>
