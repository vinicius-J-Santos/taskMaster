<div class="container">
    <h1>Criar Tarefa</h1>
    <form action="../taskMaster/acoes/salva.php" method="post">
        <input type="hidden" name="criado_em" value="<?php time() ?>">
        <div>
            <label for="titulo">Título: </label>
            <input type="text" name="titulo" id="titulo" required placeholder="Digite o título da tarefa">
        </div>
        <div>
            <label for="desc"> Descrição: </label> <br>
            <textarea name="descricao" id="desc" placeholder="Digite a descrição da tarefa"></textarea>
        </div>
        <div>
            <label for="estimado">Horas estimadas: </label>
            <input type="time" name="horas_estimada" id="estimado" required placeholder="Digite o tempo estimado em horas">
        </div>
        <div>
            <label for="data">Data limite: </label>
            <input type="date" name="data_limite" id="date" required>
        </div>
        <div>
            <input class="botao" type="submit" value="Criar Tarefa">
            <input class="botao" type="reset" value="Limpar">
        </div>
    </form>
</div>