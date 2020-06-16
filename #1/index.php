<?php
$usuarios = [
    array("nome"=>'Matheus', "sobrenome" => 'Coimbra', "idade" => 22),
    array("nome"=>"Vanessa", "sobrenome" => 'Magalhães', "idade" => 20),
    array("nome"=>"Matheus", "sobrenome" => 'Magalhães', "idade" => 20),
    array("nome"=>'Pedro', "sobrenome" => 'Coimbra', "idade" => 22)
]
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HELLLLOOOU</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Idade</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
            if(empty($usuarios)){
                echo '<td colspan="3">Lista vazia</td>';
            } else{
                foreach($usuarios as $usuario){
            
            ?>
                <tr>
                    <td><?= $usuario['nome']?> </td>
                    <td><?= $usuario['sobrenome']?> </td>
                    <td><?= $usuario['idade']?> </td>
                </tr>
            <?php }}?>

        </tbody>
    </table>
</body>
</html>