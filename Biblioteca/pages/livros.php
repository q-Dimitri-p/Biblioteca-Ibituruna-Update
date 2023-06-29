<?php
//SQL com SQLITE
require_once("conexao.php");
?>



<div class="d-flex justify-content-center flex-column align-items-center">
    <div class="area-card d-flex justify-content-between align-items-center">
        <div class="row" style="background-color:white; 
            border:2px solid black; 
            border-radius: 10px; 
            width: 1000px;
            height: 70px;
            margin-bottom: 30px; 
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;">
            <div class="col-12 text-dark mx-2 fw-bold d-flex justify-content-between">
                <button type="button" class="btn btn-success fw-bold" data-bs-toggle="modal" data-bs-target="#livros">
                    Cadastre um livro
                </button><input class="from-control m-2 w-50" type="text" placeholder="Digite sua Busca" /><button
                    class="btn btn-success" type="button"><i class="bi bi-search"></i></button>
            </div>
        </div>
    </div>
    <div class="container">
        <?php
        //pegando dados
        $sql = $pdo_SQLITE->query("SELECT * FROM cadastro order by titulo");
        /* fetch all results */
        $sql_dados = $sql->fetchAll(PDO::FETCH_ASSOC);
        $linhas = count($sql_dados);
        echo "<center><h3 class='text-light m-3'>Quantidade de dados na tabela são " . $linhas . "</h3></center>";
        ?>
        <div>
            <table class="table table-light table-striped">
                <thead>
                    <tr>
                        <th scope="col" class="text-dark">QTD<i class="bi bi-box m-1"></i></th>
                        <th scope="col" class="text-dark">Código<i class="bi bi-upc-scan m-1"></i></th>
                        <th scope="col" class="text-dark">Titulo<i class="bi bi bi-journal-text m-1"></i></th>
                        <th scope="col" class="text-dark">Autor<i class="bi bi-person-badge m-1"></i></th>
                        <th scope="col" class="text-dark">Editora<i class="bi bi-buildings m-1"></i></th>
                        <th scope="col" class="text-dark">Ações<i class="bi bi-gear m-1"></i></th>
                    </tr>
                </thead>

                <tbody>
                    <?php 
                    for ($i = 0; $i < count($sql_dados); $i++) {
                        foreach ($sql_dados[$i] as $key => $value) {
                        }
                        $id = $sql_dados[$i]['ID'];
                        $titulo = $sql_dados[$i]['titulo'];
                        $autor = $sql_dados[$i]['autor'];
                        $editora = $sql_dados[$i]['editora'];
                        echo "<tr>";
                        echo "<td>" . sprintf("%03d", $i+1) . "</td>";
                        echo "<th scope='row'>" . sprintf("%06d", $id) . "</th>";
                        echo "<td>" . $titulo . "</td>";
                        echo "<td>" . $autor . "</td>";
                        echo "<td>" . $editora . "</td>";
                        echo "<td>";
                        echo "<a href='#excluir.php'><i class='bi bi-trash text-danger'></i></a><a href='#editar.php'><i class='bi bi-pencil-square text-warning ms-3' data-bs-toggle='modal' data-bs-target='#livros'></i></a></td>";
                        echo"</tr>";
                    }
                    ?>
                </tbody>






            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="livros" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h1 class="modal-title fs-5 text-dark" id="exampleModalLabel" style="color: rgb(255, 255, 255);">
                    Cadastro de
                    Livro</h1>
                <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body bg-light" id="FormCadastro" name="FormCadastro" method="post">
                <form method="POST">
                    <div class="d-flex mb-3">
                        <div class="form-floating m-auto">
                            <input class="form-control" placeholder="name@example.com" type="text" name="titulo"
                                id="titulo" placeholder="Título" required>
                            <label for="titulo">Título</label>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="form-floating m-3">
                            <input class="form-control" placeholder="name@example.com" type="text" name="autor"
                                id="autor" placeholder="Autor" required>
                            <label for="autor">Autor</label>
                        </div>
                        <div class="form-floating m-3">
                            <input class="form-control" placeholder="name@example.com" type="text" name="editora"
                                id="editora" placeholder="Editora" required>
                            <label for="editora">Editora</label>
                        </div>
                        <div class="form-floating m-3">
                            <input class="form-control" placeholder="name@example.com" type="text" name="volume"
                                id="volume" placeholder="Volume" required>
                            <label for="volume">Volume</label>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="form-floating m-auto">
                            <input class="form-control" placeholder="name@example.com" type="text" name="codigo"
                                id="codigo" placeholder="Código" required>
                            <label for="codigo">Cód</label>
                        </div>
                        <div class="form-floating m-auto">
                            <input class="form-control" placeholder="name@example.com" type="text" name="paginas"
                                id="paginas" placeholder="Páginas" required>
                            <label for="paginas">Páginas</label>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="form-floating m-auto">
                            <input class="form-control" placeholder="name@example.com" type="text" name="classificacao"
                                id="classificacao" placeholder="Classificação" required>
                            <label for="classificacao">Classificação</label>
                        </div>
                        <div class="form-floating m-auto">
                            <input class="form-control" placeholder="name@example.com" type="text" name="prateleira"
                                id="prateleira" placeholder="Prateleira" required>
                            <label for="prateleira">Prateleira</label>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="form-floating m-auto">
                            <input class="form-control" placeholder="name@example.com" type="text" name="ano" id="ano"
                                placeholder="Ano" required>
                            <label for="ano">Ano</label>
                        </div>
                        <div class="form-floating m-auto">
                            <input class="form-control" placeholder="name@example.com" type="text" name="anoregistro"
                                id="anoregistro" placeholder="Ano registro" required>
                            <label for="anoregistro">Ano Registro</label>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="form-floating w-100 m-auto">
                            <input class="form-control" placeholder="name@example.com" type="text" name="descricao"
                                id="descricao" placeholder="Descrição" required>
                            <label for="descricao">Descrição</label>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer bg-light">

                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                <button id="btn-salvar" name="btn-salvar" class="btn btn-primary">Cadastrar</button>
            </div>
            <div id="result" style="text-align: center; margin: 10px; font-weight: bold;"></div>

        </div>
    </div>
</div>

<script>
// JAVASCRIPT Quando o HTML for lido
$("document").ready(function() {
    //Quando o Botão btn-salvar  for clicado 
    $("#btn-salvar").click(function(event) {
        // Evita que o formulário faça seu envio normal
        event.preventDefault();

        //Função do Ajax para enviar uma solicitação get
        var dados = $('form').serialize();
        var msg = "Salvo com Sucesso " + $('#titulo').val();

        $.ajax({

            url: "salvar.php",
            method: "POST",
            async: true,
            data: dados,
            dataType: "json",
            success: $('#result').text(msg),

        });
    });

});
</script>