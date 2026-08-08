
<div class="popup">
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
    <div>
        <h1>
            Você deseja mesmo deletar a tarefa
            "<?= htmlspecialchars($tarefa["titulo"]); ?>"?
        </h1>
    </div>
    <div>
        <form action="acoes/delete.php" method="POST">

            <input
                type="hidden"
                name="id"
                value="<?= $id ?>">

            <button type="submit">
                Sim
            </button>

        </form>
        <button><a href="index.php">Não</a></button>
        
    </div>
</div>