<?php
$sql = "select * from tarefas";

$resultado = $conn->query($sql);

while($tarefas=$resultado->fetch_assoc()):
?>
<div class="card">
    <div class="titulo">
        <h1><?= htmlspecialchars($tarefas["titulo"]); ?></h1>
        <h3><?= date("d/m/Y H:i", strtotime($tarefas["criado_em"])) ?></h3>
    </div>
    <div class="desc">
        <h1>Descrição:</h1>
        <h2><?= htmlspecialchars($tarefas["descricao"]); ?></h2>
    </div>
    <div>
        <h1>Estimativa em horas: <?= date("h:i", strtotime($tarefas["horas_estimada"]));?></h1>
        <h1>Prazo limite: <?= date("d/m/Y", strtotime($tarefas["data_limite"])); ?></h1>
    </div>
    <div class="opcoes">
        <a href="">check</a>
        <a href="">edite</a>
        <a href="index.php?pag=delete&id=<?= $tarefas["id"]; ?>">delete</a>
    </div>
</div>
<?php
endwhile;
?>
