<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Tabela BootStrap!</title>
    <link rel="stylesheet" type="text/css" href="table.css">
    <!--Ajax para HTML -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<?php
//SQL com SQLITE
require_once("conexao.php");
?>

<body class="bg-dark text-light">

    <div class="container">
        <?php
        try {
            // Conectar ao banco de dados SQLite
            $conexao = new PDO('sqlite:C:/xampp/htdocs/Biblioteca/livros.db3');
            
            // Definir o modo de erro do PDO para exceções
            $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            // ID do registro que você deseja atualizar
            $id = 7;
            
            // Novos valores dos campos a serem atualizados
            $novoeditora = "ender";
            
            // Consulta de atualização
            $consulta = "UPDATE cadastro SET editora = :editora WHERE id = :id";
            
            // Preparar a consulta
            $stmt = $conexao->prepare($consulta);
            
            // Atribuir valores aos parâmetros
            $stmt->bindValue(':editora', $novoeditora);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            
            // Executar a consulta
            $stmt->execute();
            
            // Verificar se a atualização foi bem-sucedida
            if ($stmt->rowCount() > 0) {
                echo "Atualização realizada com sucesso.";
            } else {
                echo "Nenhum registro foi atualizado.";
            }
        } catch (PDOException $e) {
            echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
        }
        ?>
        <div>
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col" class="text-light">QTD<i class="bi bi-box m-1"></i></th>
                        <th scope="col" class="text-light">Código<i class="bi bi-upc-scan m-1"></i></th>
                        <th scope="col" class="text-light">Titulo<i class="bi bi bi-journal-text m-1"></i></th>
                        <th scope="col" class="text-light">Autor<i class="bi bi-person-badge m-1"></i></th>
                        <th scope="col" class="text-light">Editora<i class="bi bi-buildings m-1"></i></th>
                        <th scope="col" class="text-light">Ações<i class="bi bi-gear m-1"></i></th>
                    </tr>
                </thead>

                <tbody>
                    <?php 
                    $sql = $pdo_SQLITE->query("SELECT * FROM cadastro");
                    /* fetch all results */
                    $sql_dados = $sql->fetchAll(PDO::FETCH_ASSOC);
                    $linhas = count($sql_dados);
                    echo "<center><h3 class='text-light m-3'>Quantidade de dados na tabela são " . $linhas . "</h3></center>";
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
                        echo "<a href='#excluir.php'><i class='bi bi-trash text-danger'></i></a><a href='#editar.php'><i class='bi bi-pencil-square text-warning ms-3'></i></a></td>";
                        echo"</tr>";
                    }
                    ?>
                </tbody>






            </table>
        </div>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

</body>


</html>