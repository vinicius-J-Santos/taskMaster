<?php
$sql = "select * from tarefas order by feito asc, data_limite asc";

$resultado = $conn->query($sql);

while($tarefas=$resultado->fetch_assoc()):
?>
<div class="card">
    <div class="titulo">
        <?php if($tarefas["feito"]){htmlspecialchars($tarefas["titulo"]);} ?>
        <h1><?php if($tarefas["feito"]) {
            echo "<s>" . htmlspecialchars($tarefas["titulo"]) . "</s>";
        }else{
            echo htmlspecialchars($tarefas["titulo"]);
        } 
        ?></h1>
        <h3><?= date("d/m/Y H:i", strtotime($tarefas["criado_em"])) ?></h3>
    </div>
    <div class="desc">
        <h1>Descrição:</h1>
        <h2><?= htmlspecialchars($tarefas["descricao"]); ?></h2>
    </div>
    <div>
        <h1>Estimativa em horas: <?= htmlspecialchars($tarefas["horas_estimada"]);?></h1>
        <h1>Prazo limite: <?= date("d/m/Y", strtotime($tarefas["data_limite"])); ?></h1>
    </div>
    <div class="opcoes">
        <form action="acoes/check.php" method="post">
            <input type="hidden" name="id" value="<?= $tarefas["id"] ?>">
            <input type="submit" value="check">
        </form>
        <a href="index.php?pag=confirmacaoEditar&id=<?= $tarefas["id"]; ?>">edite</a>
        <a href="index.php?pag=confirmacaoDelete&id=<?= $tarefas["id"]; ?>">delete</a>
    </div>
</div>
<?php
endwhile;
?>
