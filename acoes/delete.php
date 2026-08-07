<?php

require_once __DIR__ . "/../bd.php";

if (!isset($_POST["id"])) {
    header("Location: ../index.php");
    exit;
}

$id = (int)$_POST["id"];

$sql = "DELETE FROM tarefas WHERE id = $id";

$conn->query($sql);

header("Location: ../index.php");
exit;