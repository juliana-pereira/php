<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays - Laços</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>

    <h1> Array - Laços</h1>
    <h2>Array: Definição Explícita (sem chave)</h2>
    <pre>
<?php
        $var = array (1, 2, 3, 4);

    echo $var[0];
    echo $var[1];
    echo $var[2];
    echo $var[3];
        ?>
    </pre>

    <h2>Impressao com for </h2>
    <pre>
<?php
        for($a=0; $a<4; $a++){
            echo "$var[$a]";
        }
        ?>
    </pre>

    <h2>Impressao com foreach</h2>
    <pre>
<?php
        foreach($var as $dados){
            echo $dados;
        }
        ?>
        </pre>

    <pre>
<?php
    $var = array( "Maria" => 25,
                  "João"  => 44,
                  "José"  => 12,
                  "Neusa" => 73

    );

    foreach ($var as $dados){
        echo "$dados <br>";
    }
    ?>
    </pre>

    <h2>Foreach com chave e valor</h2>
    <pre>
<?php 
        foreach ($var as $chave => $valor){
            echo "$chave: tem $valor anos <br>";
        }
        ?>
    </pre>

<h2>print_r -> mostra o que tem armazenado no array</h2>
<pre>
<?php 
    print_r($var);
    ?>
</pre>

<pre>
<?php 
$alunos = array("Maria" =>
                        array("endereco" => "Rua Chile 1046",
                        "bairro" => "Rebouças"),
                        
                "Juliana" => array("endereco" => "Rua Pindaí 234",
                "bairro" => "Boa Vista"),

                "Hubert" => array("endereco" => "Rua Guirapá",
                "bairro" => "Centro")
                        
                        )
?>
</pre>
<pre>
<?php
    print_r($alunos);
    ?>
    </pre>

    <pre>
<?php
    print_r($alunos["Maria"]);
    ?>
    </pre>

</body>
</html>