<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Caneta.php';
            
            $c1 = new Caneta("Bic", "Azul", 0.5, TRUE);
            print_r($c1);
            
//            print "Eu tenho uma caneca {$c1->getModelo()} de pontao {$c1->getPonta()}";
        ?>
        </pre>
    </body>
</html>
