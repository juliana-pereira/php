<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 28/05</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <h2>Soma simples</h2>
    <?php 
   function soma(){
    echo 5+6;
   }
   soma();
    ?> 

<h2> Soma parametro</h2>
    <?php 
    function somaparametro($p1, $p2){
        $s1 = $p1 + $p2;
        echo $s1;
    }

    for($i=0; $i<1000; $i++);
    somaparametro($i, 1);
    ?>

    <h2>Função somar</h2>
    <?php
    function somar($p1, $p2){
        $s1 = $p1 + $p2;
        return $s1;
    }

    echo somar(11, 15);
    echo somar(20, 5);
    ?>

    <h2>Função multiplicar</h2>
    <?php
    function multiplica3($x1, $x2, $x3){
        $x = $x1*$x2*$x3;
        return $x;
        
    }
echo multiplica3(4,3,2);
?>

<h2>Função divisão</h2>
<?php
 function dividi($x1, $x2, $x3){
    $x = $x1/$x2/$x3;
    return $x;
    
}
echo dividi(80, 4, 2);
    ?>

<h2>Função somadivmultsub</h2>
<?php
 function somamultdivsub($x1, $x2, $x3, $x4, $x5){
    $x = $x1 + $x2 / ($x3* $x4) - $x5;
    return $x;
    
}
echo somamultdivsub(60, 20, 2, 1, 4);
    ?>

<h2>Função eleva2</h2>
<?php
 function somando($x1, $x2){
    $x = $x1 + $x2;
    return $x;
}

echo somando(4,4);

function eleva2($n1){
    $x = $n * $n;
    return $x;
}
    ?>

    <?php 
    preencherarray($qnt, $inicio){
        
    }
    ?>





</body>
</html>