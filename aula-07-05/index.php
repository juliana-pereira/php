<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>array: definição implicita</h2>
    <pre>
        <?php
        $var = array("Juliana", " Hubert", " Ryan", " Eduardo", " Guilherme", " Natan", " Pedro Castro", " Arthur");
        for($a=0; $a<8; $a++){
        echo "$var[$a]";
        }
        ?>
    </pre>


<h2>array: definição explicita</h2>
    <pre>
        <?php
        $var = array("Juliana", " Hubert", " Ryan", " Eduardo", " Guilherme", " Natan", " Pedro Castro", " Arthur");
        for($i=0; $i<count($var); $i++){
        echo "O indice é $i o nome do aluno é $var[$i]<br>";
        }


        $var=["Hubert" => 20, "Adriel" => 5, "Ryan" => 10];
        foreach($var as $chave => $valor){
            if($valor>=10){
            echo "na posicao: $chave <br>";
            echo "o valor é: $valor <br>";
            }
        }
        ?>
    </pre>

    

    
</body>
</html>