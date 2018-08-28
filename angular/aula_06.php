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
                <h1> Sorte:<?php $sorte = rand(0,5);?> </h1>
                
                <p>{{texto=$sorte}}</p>
                    
           </div>
       </div>
    </body>
</html>
