<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="../style.css">
    <style>
        img {
            height: 55px;
        }
        ul {
            columns: 2;
            list-style-type: none;/* tirar decoração de lista */
        }
    </style>
</head>
<body>
    <?php 

    $saque = $_GET['saque']??0;
    
    ?>

    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="saque">Qual valor você deseja sacar? (R$)<sup>*</sup></label>
            <input type="number" name="saque" id="saque" step="1" value="<?=$saque?>" required>
            <p style="font-size: 0.7em"><sup>*</sup>Notas disponíveis: R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
        <?php 
        
        $sobra = $saque;
        // Saque de R$100
        $tot100 = floor($sobra / 100);
        $sobra %= 100;
        // Saque de R$50
        $tot50 = floor($sobra / 50);
        $sobra %= 50;
        // Saque de R$20
        $tot20 = floor($sobra / 20);
        $sobra %= 20;
        // Saque de R$10
        $tot10 = floor($sobra / 10);
        $sobra %= 10;
        // Saque de R$5        
        $tot5 = floor($sobra / 5);
        $sobra %= 5;
        // Saque de R$2
        $tot2 = floor($sobra / 2);
        $sobra %= 2;
        // Saque de R$1
        $tot1 = floor($sobra / 1);
        $sobra = $tot1;
        
        ?>
        <h2>Saque de R$<?=$saque?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src="imagens/100-reais.jpg" alt=""> <strong><?=$tot100?></strong> Unidade(s)</li>
            <li><img src="imagens/50-reais.jpg" alt=""> <strong><?=$tot50?></strong> Unidade(s)</li>
            <li><img src="imagens/20-reais.jpg" alt=""> <strong><?=$tot20?></strong> Unidade(s)</li>
            <li><img src="imagens/10-reais.jpg" alt=""> <strong><?=$tot10?></strong> Unidade(s)</li>
            <li><img src="imagens/5-reais.jpg" alt=""> <strong> <?=$tot5?></strong> Unidade(s)</li>
            <li><img src="imagens/2-reais.jpg" alt=""> <strong> <?=$tot2?></strong> Unidade(s)</li>
            <li><img src="imagens/1-real.jpg" alt=""> <strong> <?=$tot1?></strong> Unidade(s)</li>
        </ul>
    </section>
    
</body>
</html>


