<?php
$id = (int)($_GET["id"]);
if (!$id) {
    header("Location: index.php");
    exit;
}
$sql = "select * from tarefas where id = $id";
$resultado = $conn->query($sql);
$tarefa = $resultado->fetch_assoc();
if (!$tarefa) {
    header("Location: index.php");
    exit;
}
?>
<div class="container">
    <h1>Editar Tarefa</h1>
    <form action="../taskMaster/acoes/editar.php" method="post">
        <input type="hidden" name="id" value="<?= $tarefa["id"] ?>">
        <div>
            <label for="titulo">Título: </label>
            <input type="text" name="titulo" id="titulo" required placeholder="Digite o título da tarefa" value="<?= htmlspecialchars($tarefa["titulo"]) ?>">
        </div>
        <div>
            <label for="desc"> Descrição: </label> <br>
            <textarea name="descricao" id="desc" placeholder="Digite a descrição da tarefa"><?= htmlspecialchars($tarefa["descricao"]) ?></textarea>
        </div>
        <div>
            <label for="estimado">Horas estimadas: </label>
            <input type="time" name="horas_estimada" id="estimado" required placeholder="Digite o tempo estimado em horas"  value="<?= date('H:i', strtotime($tarefa['horas_estimada'])) ?>">
        </div>
        <div>
            <label for="data">Data limite: </label>
            <input type="date" name="data_limite" id="date" required value="<?= htmlspecialchars($tarefa["data_limite"]) ?>">
        </div>
        <div>
            <input class="botao" type="submit" value="Salvar">
            <a href="index.php">Cancelar</a>
        </div>
    </form>
</div>