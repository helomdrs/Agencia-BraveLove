<?php

$servicos = [
    [
        "nome" => "Live Marketing",
        "imagem" => "imagens/undraw_share_766i.svg",
        "descricao" => "É através de experiências reais que mudanças acontecem"
    ],
    [
        "nome" => "Costumer Happiness",
        "imagem" => "imagens/undraw_chasing_love_3v98.svg",
        "descricao" => "Aprenda a língua de seus clientes coloridos"
    ],
    [
        "nome" => "Recursos Humanos",
        "imagem" => "imagens/undraw_connection_b38q.svg",
        "descricao" => "Conscientização da equipe para o combate da LGBTQ+ fobia"
    ],
    [
        "nome" => "Produtos",
        "imagem" => "imagens/undraw_connection_b38q.svg",
        "descricao" => "Diversifique a lojinha de sua empresa"
    ],
    [
        "nome" => "Campanhas",
        "imagem" => "imagens/undraw_connection_b38q.svg",
        "descricao" => "Interaja com o público"
    ],
    [
        "nome" => "Não sei mais",
        "imagem" => "imagens/undraw_connection_b38q.svg",
        "descricao" => "socorro"
    ]
];

function listarSevicos(){

    global $servicos;

    foreach ($servicos as $index => $servico) {
        echo 
        "<div class='col-md-4 mt-4'>
            <div class='card'>
                <img class='card-img-top' src='$servico[imagem]' alt='Card image cap'>
                <div class='card-body'>
                    <h2 class='card-text text-center'>$servico[nome]</h2>
                    <p><a href='servico.php?id=$index'>$servico[descricao]</a></p>

                </div>
            </div>
        </div>";
    }

}

function getNome($id) {

    global $servicos;
    return $servicos[$id]["nome"];
}


?>