<?php

session_start();

function getNome($id){
    global $servicos;
    return $servicos[$id]["nome"];
}

function getDescricao($id){
    global $servicos;
    return $servicos[$id]["descricao"];
}

function getImagem($id){
    global $servicos;
    return $servicos[$id]["imagem"];
}

if(isset($_POST['cadastrar_servico'])) {
    $arquivoServicos = 'servicos.json';
    $imagemServico = '';
    if($_FILES) {
        $nome = $_FILES['imagem']['name'];
        $nomeTemp = $_FILES['imagem']['tmp_name'];
        $erro = $_FILES['imagem']['error'];
        $pastaRaiz = dirname(__FILE__);
        $pasta = "servicos/";
        $caminhoCompleto = $pastaRaiz . '/' . $pasta . $nome;

        if($erro == UPLOAD_ERR_OK) {
            move_uploaded_file($nomeTemp, $caminhoCompleto);
            $imagemServico = $pasta . $nome;
        }
    }

    if(file_exists($arquivoServicos)) {
        $jsonServicos = file_get_contents($arquivoServicos);
        $arrayServicos = json_decode($jsonServicos, true);
        $infoServico = $_POST;
        
        $infoServico['imagem'] = $imagemServico;
        $arrayServicos['servicos'][] = $infoServico;
        $jsonServicos = json_encode($arrayServicos, true);
        file_put_contents($arquivoServicos, $jsonServicos);
    } else {
        $arquivo = fopen($arquivoServicos, 'w');
        $arrayServicos = ["servicos" => []];
        $infoServico = $_POST;
        $infoServico['imagem'] = $imagemServico;
        $arrayServicos["servicos"][] = $infoServico;
        $jsonServicos = json_encode($arrayServicos, true);
        file_put_contents($arquivoServicos, $jsonServicos);
    }
}

function listarSevicos(){

    $arquivoJson = 'servicos.json';
    $servicos = [];

    if(file_exists($arquivoJson)) {
        $jsonServicos = file_get_contents($arquivoJson);
        $arrayServicos = json_decode($jsonServicos, true);

        $servicos = $arrayServicos['servicos'];
    }

    return $servicos;
}

if(isset($_POST['login'])) {

    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $senha = isset($_POST['senha']) ? $_POST['senha'] : '';

    if($email == "" || $senha == "") {
        $erro = "Preencha os campos de login corretamente, por favor";
    } else {
        unset($erro);
        $_SESSION['logado'] = true;
        if(isset($_POST['manterLogado'])) {
            setcookie("email", $email, time() + 3600, '/');
            setcookie("senha", $senha, time() + 3600, '/');
        }

        header('Location: index.php');
    }
}

if(isset($_GET['logout'])){
    session_destroy();
}

?>