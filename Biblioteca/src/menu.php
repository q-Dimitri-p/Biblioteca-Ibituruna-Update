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

<body class="bg-success">

    <nav class="navbar col-12 d-flex justify-content-between navbar-expand-lg navbar-light bg-dark fw-bold">
        <div class="d-flex">
            <a class="navbar-brand text-light" href="#" style="margin-left:25px;">Painel Administrativo</a>
        </div>
        <div class="d-flex flex-column" style="margin-right:25px;">
            <a class="nav-link active text-light" aria-current="page" href="#">Grupo A</a>
            <a class="nav-link text-light" href="#">ADM</a>
        </div>


    </nav>


    <div class="d-flex align-items-start m-5">
        <div class="nav flex-column nav-pills bg-dark p-2 me-3" id="v-pills-tab" role="tablist"
            aria-orientation="vertical"
            style="border: 2px solid white; border-radius: 10px; color:white; font-weight:bold;">
            <button class="nav-link active text-light" id="v-pills-home-tab" data-bs-toggle="pill"
                data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                aria-selected="true"><i class="bi bi-house m-2"></i>Home</button>
            <button class=" text-light nav-link" id="v-pills-livros-tab" data-bs-toggle="pill"
                data-bs-target="#v-pills-livros" type="button" role="tab" aria-controls="v-pills-livros"
                aria-selected="false"><i class="bi bi-book m-2"></i>Livros</button>
            <button class=" text-light nav-link" id="v-pills-leitores-tab" data-bs-toggle="pill"
                data-bs-target="#v-pills-leitores" type="button" role="tab" aria-controls="v-pills-leitores"
                aria-selected="false"><i class="bi bi-person-vcard-fill m-2"></i>Leitores</button>
            <button class=" text-light nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                data-bs-target="#v-pills-emprestimos" type="button" role="tab" aria-controls="v-pills-emprestimos"
                aria-selected="false"><i class="bi bi-arrow-left-right m-2"></i>Empréstimos</button>
            <button class=" text-light nav-link" id="v-pills-relatorios-tab" data-bs-toggle="pill"
                data-bs-target="#v-pills-relatorios" type="button" role="tab" aria-controls="v-pills-relatorios"
                aria-selected="false"><i class="bi bi-clipboard-data m-2"></i>Relatórios</button>
            <button class=" text-light nav-link" id="v-pills-empregados-tab" data-bs-toggle="pill"
                data-bs-target="#v-pills-empregados" type="button" role="tab" aria-controls="v-pills-empregados"
                aria-selected="false"><i class="bi bi-people m-2"></i>Empregados</button>
            <button class=" text-light nav-link" id="v-pills-sistema-tab" data-bs-toggle="pill"
                data-bs-target="#v-pills-sistema" type="button" role="tab" aria-controls="v-pills-sistema"
                aria-selected="false"><i class="bi bi-gear m-2"></i>Sistema</button>

        </div>
        <div class="tab-content w-75" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <?php include_once("./pages/home.php")?>
            </div>
            <div class="tab-pane fade" id="v-pills-livros" role="tabpanel" aria-labelledby="v-pills-livros-tab">
                <?php include_once("./pages/livros.php")?>
            </div>
            <div class="tab-pane fade" id="v-pills-leitores" role="tabpanel" aria-labelledby="v-pills-leitores-tab">
                <?php include_once("./pages/leitores.php")?>
            </div>
            <div class="tab-pane fade" id="v-pills-emprestimos" role="tabpanel"
                aria-labelledby="v-pills-emprestimos-tab">
                <?php include_once("./pages/emprestimos.php")?>
            </div>

            <div class="tab-pane fade" id="v-pills-relatorios-tab" role="tabpanel"
                aria-labelledby="v-pills-relatorios-tab">
                <?php include_once("./pages/relatorios.php")?>
            </div>

            <div class="tab-pane fade" id="v-pills-empregados" role="tabpanel" aria-labelledby="v-pills-empregados-tab">
                <?php include_once("./pages/empregados.php")?>
            </div>
            <div class="tab-pane fade" id="v-pills-sistema" role="tabpanel" aria-labelledby="v-pills-sistema-tab">
                <?php include_once("./pages/sistema.php")?>
            </div>

        </div>
    </div>





</body>

</html>