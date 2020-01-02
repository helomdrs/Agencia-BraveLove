<?php require_once("functions.php"); ?>
<!doctype html>
<html lang="pt-br">

<head>
    <title>Agência Brave Love</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <nav class="fixed-top navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><img src="imagens/Brave Love-logo horizontal.png" alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#servicos">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sobre">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contato">Contato</a>
                    </li>
                    <?php 
                            if(isset($_SESSION['logado'])) {
                                echo  "<li><a class='nav-link'>Bem-vinde, usuarie!</a></li>";
                                echo "<li><a class='nav-link' href='login.php?logout=true'>Sair</a></li>";
                            } else {
                                echo "<li><a class='nav-link' href='login.php'>Entrar</a></li>";
                            }
                        ?>
                </ul>
            </div>
        </nav>
    </header>