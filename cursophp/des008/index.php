<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
</head>
<body>
    <?php 
        $num = $_GET['num'] ?? 0;
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="inum">Número</label>
            <input type="number" name="num" id="inum" value="<?=$num?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h2>Resultado final</h2>
        <?php 
        //$qnum = sqrt($num);
        $qnum = $num ** 0.5; //cálculo para raíz quadrada
        $cnum = $num ** (1/3); //cálculo para raíz cúbica

        echo "<p>A raiz quadra de <strong>".number_format($num, 2, ",",".")."</strong> é <strong>".number_format($qnum, 2, ",",".")."</strong></p>";
        echo "<p>A raiz cúbica de <strong>".number_format($num, 2, ",",".")."</strong> é <strong>".number_format($cnum, 2, ",",".")."</strong></p>";
        ?>
    </section>
</body>
</html>