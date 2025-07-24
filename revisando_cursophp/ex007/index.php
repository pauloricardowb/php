<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $n1 = $_GET['num1']??0;
        $n2 = $_GET['num2']??0;
    ?>
    <main>
        <h1>Somador de valores</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="inum1">Digite o primeiro número</label>
            <input type="number" name="num1" id="inum" value="<?=$num1?>">
            <label for="inum1">Digite o segundo número</label>
            <input type="number" name="num2" id="inum2" value="<?=$num2?>">
            <input type="submit" value="Enviar">
        </form>
    </main>
    <section id="resultado">
        <h2>Reultado da soma</h2>
        <?php 
            $t = $n1 + $n2;

            echo "<p>O número <mark>$n1</mark> somado com o número <mark>$n2</mark> é igual a <strong>$t</strong>.</p>"        
        ?>
    </section>
</body>
</html>