<?php

require_once __DIR__ . "/../bd.php";

if (!isset($_POST["id"])) {
    header("Location: ../index.php");
    exit;
}

$id = (int)$_POST["id"];
$titulo = $_POST["titulo"];
$descricao = $_POST["descricao"];
$horas_estimada = $_POST["horas_estimada"];
$data_limite = $_POST["data_limite"];

$sql = "update tarefas set titulo = '$titulo', descricao = '$descricao', horas_estimada = '$horas_estimada', data_limite = '$data_limite' where id = $id";

$conn->query($sql);

header("Location: ../index.php");
exit;
?>