<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuários</title>
    <!-- Link para o Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <!-- Link para fontes do Google -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href="https://img.icons8.com/ios-filled/50/000000/car.png"/>
    <style>
        body {
            background-color: #f4f7fb;
            font-family: 'Roboto', sans-serif;
        }

        .container {
            max-width: 800px;
            margin-top: 50px;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }

        .form-container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .form-label {
            color: #495057;
        }

        .form-control {
            border-radius: 8px;
            border: 1px solid #ced4da;
            box-shadow: none;
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.25);
        }

        .btn-submit {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 6px;
            width: 100%;
            font-weight: 500;
        }

        .btn-submit:hover {
            background-color: #0056b3;
        }

        .list-group-item {
            background-color: #fff;
            border: none;
            color: #495057;
            padding: 15px;
            font-size: 16px;
            border-radius: 6px;
        }

        .list-group-item:hover {
            background-color: #f1f1f1;
        }

        .card-header {
            background-color: #007bff;
            color: white;
            font-weight: 500;
            font-size: 18px;
            padding: 15px;
            border-radius: 8px 8px 0 0;
        }

        .footer {
            text-align: center;
            padding: 20px;
            font-size: 14px;
            color: #6c757d;
            margin-top: 50px;
        }

        .footer a {
            color: #007bff;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- Formulário de Cadastro -->
        <div class="form-container">
            <h2>Cadastro de Usuários</h2>
            <form action="salvar.php" method="post">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>
                <div class="mb-3">
                    <label for="marca" class="form-label">Marca</label>
                    <input type="text" class="form-control" id="marca" name="marca" required>
                </div>
                <div class="mb-3">
                    <label for="idade" class="form-label">Idade</label>
                    <input type="date" class="form-control" id="idade" name="idade" required>
                </div>
                <div class="mb-3">
                    <label for="valor" class="form-label">Valor</label>
                    <input type="number" class="form-control" id="valor" name="valor" required>
                </div>
                <button type="submit" class="btn-submit">Salvar</button>
            </form>
        </div>

        <!-- Lista de Carros Cadastrados -->
        <div class="card mt-5">
            <div class="card-header">Carros Cadastrados</div>
            <div class="card-body">
                <ul class="list-group">
                    <?php
                        // Pega os valores do $dados
                        $dados = json_decode(file_get_contents("dados.json"), true);
                        
                        // Coloca os respectivos valores em seus lugares
                        if(!empty($dados)){
                            foreach($dados as $carros){
                                echo "<li class='list-group-item'>{$carros['nome']} - 
                                {$carros['idade']} - 
                                {$carros['marca']} - 
                                R$ {$carros['valor']}</li>";
                            }
                        } else {
                            echo "<li class='list-group-item'>Nenhum veículo cadastrado</li>";
                        }
                    ?>
                </ul>
            </div>
        </div>

        <!-- Rodapé -->
        <div class="footer">
            <p>&copy; 2025 <a href="https://www.seusite.com" target="_blank">SeuSite</a>. Todos os direitos reservados.</p>
        </div>
    </div>

    <!-- Scripts do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

</body>
</html>
