<?php
    echo "hello PHP :)";
    if( isset($_POST['email']) && $_POST['email'] == 'admin'){
        echo 'E-mail exists';
    }else{
        echo 'E-mail does not exist';
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login app</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Hello PHP</h1>
            </div>
        </div>
        <form>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="e-mail" name="email">
                </div>
                <div class="col">
                    <input type="password" class="form-control" placeholder="senha" name="senha">
                </div>
                <button>Entrar</button>
                <button>Cadastrar</button>
            </div>
        </form>
    </div>
</body>
</html>