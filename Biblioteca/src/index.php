<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Inserindo Dados no Banco PHP</title>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <!--<link rel="stylesheet" href="./style.css">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css"
        integrity="sha512-ZnR2wlLbSbr8/c9AgLg3jQPAattCUImNsae6NHYnS9KrIwRdcY9DxFotXhNAKIKbAXlRnujIqUWoXXwqyFOeIQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--  Bundle Necessário para o BootStrap  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js"
        integrity="sha256-a2yjHM4jnF9f54xUQakjZGaqYs/V1CYvWpoqZzC2/Bw=" crossorigin="anonymous"></script>
    <!--Popper para Animações com BootStrap-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"
        integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--JQUERY para usar o AJAX-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>

<body class="container bg-dark d-flex flex-column m-auto vh-100">
    <div class="container-fluid d-flex flex-column m-auto vh-100 bg-dark">
        <div class="d-flex m-auto flex-column text-center col-sm-12 col-xl-6">
            <div class="titulo fw-bold mb-5 fs-4 p-2 text-white bg-success rounded">
                Biblioteca Ibituruna Digital<br>CADASTRAR LIVRO
            </div>
            <div>
                <img class="mb-5 img-fluid col-6" src="img/lvros.png">
            </div>
        </div>
        <div class="d-flex">
            <button type="button" class="btn btn-warning fw-bold fs-5 col-sm-12 col-lg-2 m-auto mb-3"
                data-bs-toggle="modal" data-bs-target="#livros">
                Cadastre um livro
            </button>
        </div>
        <div class="texto_esp fw-bold fs-5 text-white d-flex justify-content-center m-4 mr-0">
            © Todos direitos reservados.
        </div>
    </div>
    <!--MODAL 1-->

    <div class="modal fade" id="livros" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: rgb(255, 255, 255);">Cadastro de
                        Livro</h1>
                    <button type="button" class="btn-close bg-light" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body bg-dark" id="FormCadastro" name="FormCadastro" method="post">
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
                                <input class="form-control" placeholder="name@example.com" type="text"
                                    name="classificacao" id="classificacao" placeholder="Classificação" required>
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
                                <input class="form-control" placeholder="name@example.com" type="text" name="ano"
                                    id="ano" placeholder="Ano" required>
                                <label for="ano">Ano</label>
                            </div>
                            <div class="form-floating m-auto">
                                <input class="form-control" placeholder="name@example.com" type="text"
                                    name="anoregistro" id="anoregistro" placeholder="Ano registro" required>
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
                <div class="modal-footer bg-dark">

                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    <button id="btn-salvar" name="btn-salvar" class="btn btn-primary">Cadastrar</button>
                </div>
                <div id="result" style="text-align: center; margin: 10px; font-weight: bold;"></div>

            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>


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

</body>

</html>