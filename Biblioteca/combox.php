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
    <div class="container text-light">

        <?php
        require_once("conexao.php");
        $sql = $pdo_SQLITE->query("SELECT * FROM cadastro order by titulo");
        $sql_dados = $sql->fetchAll(PDO::FETCH_ASSOC);//traz todos os registros da pergunta
        $linhas = count($sql_dados);
        echo "<center><h1>Você possui " . $linhas . " registros na Tabela</h1>";
        echo "<h3>Dados Cadastrado na tabela</h3>";
        ?>

        <select class="form-select m-5" aria-label="Default select example">
            <option selected>Ver Títulos</option>
            <?php
                for ($i = 0; $i < count($sql_dados); $i++) {
                foreach ($sql_dados[$i] as $key => $value) {
                }
                $titulo = $sql_dados[$i]['titulo'];
                echo "<option value='1'>" . $titulo . "</option>";
                }
                ?>
        </select>
    </div>

</body>

</html>