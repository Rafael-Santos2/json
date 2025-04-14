<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario em JSON</title>
</head>
<body>
    <h2>Cadastro de Usuários</h2>
    <form action="salvar.php" method="post">
        Nome: <input type="text" name="nome" required><br><br>
        Marca: <input type="text" name="marca" required><br><br>
        idade: <input type="date" name="idade" required>  <br><br>
        Valor: <input type="number" name="valor" required>
        <button type="submit">Salvar</button>
    </form>
    <h2>Carros Cadastrados</h2>
    <ul>
        <?php
            // Pega os valores do $dados
            $dados = json_decode(file_get_contents("dados.json"), true);
            
            //Coloca os respectivas valores em seus lugares  
            if(!empty($dados)){
                foreach($dados as $carros){
                    echo "<li>{$carros['nome']} - 
                    {$carros['idade']} - 
                    {$carros['marca']} - 
                    {$carros['valor']} </li>";
                }
            }else{
                    echo "<li>Nenhum veiculo cadastrado</li>";
                }
            
        
        
        ?>
    </ul>
</body>
</html>