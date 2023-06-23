<?php
require_once("conexao.php");
$sql = $pdo_SQLITE->query("SELECT * FROM cadastro order by titulo");
$sql_dados = $sql->fetchAll(PDO::FETCH_ASSOC);//traz todos os registros da pergunta
$linhas = count($sql_dados);
echo "<center><h1>Você possui " . $linhas . " registros na Tabela</h1>";
echo "<h3>Dados Cadastrado na tabela</h3>";
for ($i = 0; $i < count($sql_dados); $i++) {
    foreach ($sql_dados[$i] as $key => $value) {
    }
    $id = $sql_dados[$i]['ID'];
    $titulo = $sql_dados[$i]['titulo'];
    echo "<h3>" . "(" . ($id) . ")" . " Livro: " . $titulo . "</h3>";
}
echo "</></table>";
echo "<button>Gerar PDF</button>";
exit();