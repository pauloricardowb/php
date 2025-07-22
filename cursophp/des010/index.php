<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
</head>
<body>
    <?php
        $atual = date("Y");
        $nas = $_GET['nas']??2000;
        $ano = $_GET['ano']??$atual;
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nas">Em que nao você nasceu?</label>
            <input type="number" name="nas" id="inas" min="1900" max="<?=$atual-1?>" value="<?=$nas?>" required><br>
            <label for="iano">Quer saber sua idade em que ano? (atualmente estamos em <strong><?=$atual?></strong>)</label>
            <input type="number" name="ano" id="iano" min="1900" value="<?=$ano?>" required><br>
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php
            $idade = $ano - $nas;
        ?>
        <p>Quem nasceu em <?=$nas?> vai ter <strong><?=$idade?> anos</strong> em <?=$ano?></p>
    </section>
</body>
</html>