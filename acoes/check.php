<?php

require_once "../bd.php";

if (!isset($_POST["id"])) {
    header("Location: ../index.php");
    exit;
}

$id = (int)$_POST["id"];

$sql = "update tarefas set feito = NOT feito where id = $id";

$conn->query($sql);

header("Location: ../index.php");
exit;
?>