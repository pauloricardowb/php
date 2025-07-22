<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $preco = $_REQUEST['preco']??0;
    $reaj = $_REQUEST['reaj']??0;
    ?>
    <main>
        <h1>Reajuste de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco" min="0.1" step="0.01" value="<?=$preco?>">
            
            <label for="reaj">Qual será o percentual do reajuste? (<strong><span id="p">?<span></strong>%)</label>
            <input type="range" name="reaj" id="reaj" min="0" max="100" step="1" value="<?=$reaj?>" oninput="mudaValor()">

            <input type="submit" value="Reajustar">
        </form>
    </main>
    <?php 
        $aumento = $preco * $reaj / 100;
        $novo = $preco + $aumento;
    ?>
    <section>
        <h2>Resultado do Reajuste</h2>
        <p>O produto que custa R$<?=number_format($preco, 2, ",", ".")?> com <strong><?=$reaj?>% de aumento</strong> vai passar a custar <strong>R$<?=number_format($novo, 2, ",", ".")?></strong> a partir de agora.</p>
    </section>
    <?php 
    
    ?>
    <script>
        // Declarações automáticas
        mudaValor()
        function mudaValor() { //função para mudar valor
            p.innerText = reaj.value;
        }
    </script>
</body>
</html>
