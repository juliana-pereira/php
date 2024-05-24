<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 21/05</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<style>
table, td, th {
  border: 1px solid;
}

th{
    background-color: rgb(186, 159, 210);
}

td{
    background-color: rgb(237, 227, 245);
}

table {
  width: 100%;
  border-collapse: collapse;
}
</style>
<body>
    
<h1>Tabela</h1>

    <table>
<th>Nome</th>
  <th>Endereço</th>
  <th>Idade</th>
  <th>Cidade</th>
    <?php 
    
    $var = [
        'alunos' => [
            [
                'nome' => 'Juliana',
                'endereco' => 'Rua do Chafaris',
                'idade' => 17,
                'cidade' => 'Pindaí'
            ],
            [
                'nome' => 'Hubert',
                'endereco' => 'Rua 2 de maio',
                'idade' => 17,
                'cidade' => 'Guirapá'
            ],
            [
                'nome' => 'Ryan',
                'endereco' => 'Centro',
                'idade' => 17,
                'cidade' => 'Tauape'
            ],
            
            
        ]
    ]
    
    ?>
  <tr>
</tr>
  <tr>
  <td> <?php echo $var['alunos'] [0] ['nome'] ?></td>
  <td> <?php echo $var['alunos'] [0] ['endereco'] ?></td>
  <td> <?php echo $var['alunos'] [0] ['idade'] ?></td>
  <td> <?php echo $var['alunos'] [0] ['cidade'] ?></td>
        </tr>

        <tr>
  <td> <?php echo $var['alunos'] [1] ['nome'] ?></td>
  <td> <?php echo $var['alunos'] [1] ['endereco'] ?></td>
  <td> <?php echo $var['alunos'] [1] ['idade'] ?></td>
  <td> <?php echo $var['alunos'] [1] ['cidade'] ?></td>
        </tr>

        <tr>
  <td> <?php echo $var['alunos'] [2] ['nome'] ?></td>
  <td> <?php echo $var['alunos'] [2] ['endereco'] ?></td>
  <td> <?php echo $var['alunos'] [2] ['idade'] ?></td>
  <td> <?php echo $var['alunos'] [2] ['cidade'] ?> </td>
        </tr>
        </table>
        <?php echo"<br>" ?>

      

        <table>
<th>Nome</th>
  <th>Endereço</th>
  <th>Idade</th>
  <th>Cidade</th>
    <?php 
    
    $var = [
        'alunos' => [
            [
                'nome' => 'Juliana',
                'endereco' => 'Rua do Chafaris',
                'idade' => 17,
                'cidade' => 'Pindaí'
            ],
            [
                'nome' => 'Hubert',
                'endereco' => 'Rua 2 de maio',
                'idade' => 17,
                'cidade' => 'Guirapá'
            ],
            [
                'nome' => 'Ryan',
                'endereco' => 'Centro',
                'idade' => 17,
                'cidade' => 'Tauape'
            ],
            
            
        ]
    ]
    
    ?>
    <?php
       for($a=0; $a<count($var['alunos']); $a++){
        ?>
        <tr>
            <td> <?php print_r($var['alunos'][$a]['nome']) ?></td>
            <td> <?php print_r($var['alunos'][$a]['endereco']) ?></td>
            <td> <?php print_r($var['alunos'][$a]['idade']) ?></td>
            <td> <?php print_r($var['alunos'][$a]['cidade']) ?></td>

    </tr>
     <?php  }?>
</table>

<?php 
        $listaordenada = array(
            'Juliana', 'Hubert', 'Ryan'
        );
        ?>

        <pre>
<?php print_r($listaordenada); 
            ?>
        </pre>

        <?php 
        echo '<h2> 1.1 - adicionar dados ao array </h2>';
        $listaordenada[] = 'Juliana';
        $listaordenada[] = 'Hubert';

        echo '<pre>';

        print_r($listaordenada);
        echo '<pre>';

        echo '<h2> 2 - array associativa </h2>';
        $var = [
            'nome' => 'Juliana',
            'endereco' => 'Rua Sete de Setembro',
            'idade' => 17
        ];

        echo '<pre>';
        print_r($var);
        echo '</pre>';
        ?>
        <?php
        echo '<h2> 2.1 - adicionar dados ao array associativo </h2>';
        $var ['telefone'] = 779912345;
        $var['cep'] = 460000;
        
        echo '<pre>';
echo print_r($var) ?>;
echo '</pre>';
?>

<?php
echo  '<h2> 2.2 - substitui os dados ao array associativa </h2>';

$var['cidade'] = 'pindai';
?>
echo '<pre>';
<?php echo print_r($var) ?>;
echo '</pre>'

        ?>
</body>
</html>