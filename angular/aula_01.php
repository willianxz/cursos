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
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    </head>
    <body>
       <div ng-app="">
 	<p>Name : <input type="text" ng-model="name"></p>
 	<h1>Hello {{name}}</h1>
        </div>
    </body>
</html>
