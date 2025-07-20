<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $sal = $_GET['sal'] ?? 0;
        $min = $_GET['min'] ?? 1;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            
            <label for="isal">Sálario(R$)</label>
            <input type="number" name="sal" id="isal" placeholder="Digite apenas números" value="<?=$sal?>"><br>
            
            <label for="imin">Sálario minímo(R$)</label>
            <input type="number" name="min" id="imin" placeholder="Digite apenas números" min="1" value="<?=$min?>">

            <p>Considerando o salário minímo <strong> anteriormente declarado.</strong></p>
            <input type="submit" value="Analisar">

        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php
        $dif = $sal % $min;
        //$tot = (int)($sal/$msal)
        $quoc = intdiv($sal, $min);

        echo "<p>Quem recebe um salário de <strong>R$".number_format($sal, 2, ",",".")."</strong> ganha <strong>".number_format($quoc, 0, ",",".")."</strong> salários + <strong>R$".number_format($dif, 2 ,",",".")."</strong></p>";
        ?>
    </section>
</body>
</html>