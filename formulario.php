<?php 
    if(isset($_GET['cadastro'])) {
        // // echo "Cadastro realizado com sucesso";
        // echo "<pre>";
        // var_dump($_GET);
        // echo "</pre>";

        foreach ($_GET as $key => $value) {
            if($value == ""){
                echo "Preencha o campo $key <br>";
            }
        }

        if($_GET['senha'] != $_GET['confirmar-senha']) {
            echo "<br>Senhas estão diferentes!";
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário</title>
</head>
<body>
    <a href="login.php">Já tenho uma conta</a>
    <h1>Cadastro de Usuário</h1>
    <form action="formulario.php" methor="get">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="<?php echo isset($_GET['nome']) ? $_GET['nome'] : ""; ?>">
        <br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="<?php echo isset($_GET['email']) ? $_GET['email'] : ""; ?>">
        <br>
        <label for="nascimento">Data de Nascimento</label>
        <input type="date" name="nascimento" id="nascimento" value="<?php echo isset($_GET['nascimento']) ? $_GET['nascimento'] : ""; ?>">
        <br>
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha">
        <br>
        <label for="confirmar-senha">Confirmar Senha</label>
        <input type="password" name="confirmar-senha" id="confirmar-senha">
        <br>
        <input type="submit" name="cadastro" value="Enviar">
    </form>
</body>
</html>