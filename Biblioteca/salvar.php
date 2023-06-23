<?php
require_once("conexao.php");
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$editora = $_POST['editora'];
$volume = $_POST['volume'];
$codigo = $_POST['codigo'];
$paginas = $_POST['paginas'];
$classificacao = $_POST['classificacao'];
$prateleira = $_POST['prateleira'];
$ano = $_POST['ano'];
$anoregistro = $_POST['anoregistro'];
$descricao = $_POST['descricao'];

if(empty($titulo) || empty ($autor) || empty ($editora) || empty ($volume) || empty ($codigo) || empty ($paginas) || empty ($classificacao) || empty ($prateleira) || empty ($ano) || empty ($anoregistro) || empty ($descricao)) {
    echo "<script>alert('Algum campo ficou vazio.');</script>";
    exit();
}

//SALVAR NO BANCO
$sql_inserir = $pdo_SQLITE -> prepare("INSERT INTO cadastro (titulo,autor,editora,volume,codigo,paginas,classificacao,prateleira,ano,anoregistro,descricao) VALUES (:titulo,:autor,:editora,:volume,:codigo,:paginas,:classificacao,:prateleira,:ano,:anoregistro,:descricao)");
$sql_inserir->bindValue(":titulo", $titulo);
$sql_inserir->bindValue(":autor", $autor);
$sql_inserir->bindValue(":editora", $editora);
$sql_inserir->bindValue(":volume", $volume);
$sql_inserir->bindValue(":codigo", $codigo);
$sql_inserir->bindValue(":paginas", $paginas);
$sql_inserir->bindValue(":classificacao", $classificacao);
$sql_inserir->bindValue(":prateleira", $prateleira);
$sql_inserir->bindValue(":ano", $ano);
$sql_inserir->bindValue(":anoregistro", $anoregistro);
$sql_inserir->bindValue(":descricao", $descricao);
$sql_inserir->execute();
echo "Salvo no banco de dados!";