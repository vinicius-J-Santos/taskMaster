<?php
session_start();

require_once "../bd.php";

if (!isset($_POST["id"])) {
    header("Location: ../index.php");
    exit;
}

$id = (int)$_POST["id"];
$titulo = $_POST["titulo"];

$sql = "delete from tarefas where id = $id";

$conn->query($sql);

$_SESSION["alerta"] = "Tabela deletada com sucesso!";
header("Location: ../index.php");
exit;
?>