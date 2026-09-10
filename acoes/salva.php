<?php
session_start();

require_once "../bd.php";

$titulo = $_POST["titulo"];
$descricao = $_POST["descricao"];
$horas_estimada = $_POST["horas_estimada"];
$data_limite = $_POST["data_limite"];

$sql = "insert into tarefas(titulo,descricao,horas_estimada,data_limite) values ('$titulo','$descricao','$horas_estimada','$data_limite');";

$conn->query($sql);

$_SESSION["alerta"] = "Tarefa $titulo criada com sucesso!";
header("location: ../index.php");
exit()

?>