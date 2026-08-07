<?php

$id = (int)($_GET["id"] ?? 0);

if (!$id) {
    header("Location: /index.php");
    exit;
}

$sql = "SELECT * FROM tarefas WHERE id = $id";

$resultado = $conn->query($sql);

$tarefa = $resultado->fetch_assoc();

if (!$tarefa) {
    header("Location: /index.php");
    exit;
}
?>

<div class="popup">

    <h1>
        Você deseja mesmo deletar a tarefa
        "<?= htmlspecialchars($tarefa["titulo"]); ?>"
    </h1>

    <form action="acoes/delete.php" method="POST">

        <input
            type="hidden"
            name="id"
            value="<?= $id ?>">

        <button type="submit">
            Sim
        </button>

    </form>

    <a href="index.php">Não</a>

</div>