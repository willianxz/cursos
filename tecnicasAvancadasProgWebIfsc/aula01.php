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
    <body>
        <?php
         
        $texto1 = 'Qualquer dado';
        
        $md5 = md5($texto1);
        $sha1 = sha1($texto1);
        
        echo 'Texto1: '.$texto1.'<hr/>';
        echo 'Aplicado <b>md5</b> ao Texto 1: '.$md5.'<hr/>'; // Irá mostrar o texto codificado em 32 caracteres (32 digitos)
        echo 'Aplicado <b>sha1</b> ao Texto 1: '.$sha1.'<hr/>';
        
        ?>
    </body>
</html>
