<?php
session_start();

require_once "../bd.php";

if (!isset($_POST["id"])) {
    header("Location: ../index.php");
    exit;
}

$id = (int)$_POST["id"];
$titulo = $_POST["titulo"];
$descricao = $_POST["descricao"];
$horas_estimada = $_POST["horas_estimada"];
$data_limite = $_POST["data_limite"];

$sql = "update tarefas set titulo = '$titulo', descricao = '$descricao', horas_estimada = '$horas_estimada', data_limite = '$data_limite' where id = $id;";
//die( $sql);
$conn->query($sql);

$_SESSION["alerta"] = "Tabela $titulo editada com sucesso!";
header("Location: ../index.php");
exit;
?>
