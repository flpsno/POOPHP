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
        <pre>
        <?php
            require_once 'Video.php';
            require_once 'Gafanhoto.php';
        
            $v[0] = new Video("Aula 1 de  POO");
            $v[1] = new Video("Aula 12 de PHP");
            $v[2] = new Video("Aula 5 de html 5");
            
            $g[0] = new Gafanhoto("felipe", 29, "M", "flpsno");
            print_r($v);
            print_r($g);
        ?>
        </pre>
    </body>
</html>
