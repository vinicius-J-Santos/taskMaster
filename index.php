<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Master</title>
</head>
<link rel="stylesheet" href="css/style.css">
<body>
    <header>
        <a href="?pag=criar" class="<?= ($_GET["pag"] ?? "dash") == "criar" ? "ativo" : ""; ?>">Criar tabela</a>
        <a href="?pag=dash" class="<?= ($_GET["pag"] ?? "dash") == "dash" ? "ativo" : ""; ?>">Dashboard</a>
    </header>
    <main>
        <?php
        $pag =isset($_GET["pag"])? $_GET["pag"]: "dash";
        include "paginas/$pag.php";
        ?>
    </main>
</body>
</html>