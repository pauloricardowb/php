<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <?php 
        $tempo = $_GET['tempo']??0;       
        ?>
        <section>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="itempo">Qual é o total de segundos</label>
            <input type="number" name="tempo" id="itempo" value="<?=$tempo?>">
        </form>
        </section>
    </main>
    <?php 
    
    $sobra = $tempo;
    // Total de Semanas
    $semana = (int)($sobra / 604_800);
    $sobra = $sobra % 604_800;
    // Total de Dias
    $dia = (int)($sobra / 86_400);
    $sobra = $sobra % 86_400;
    // Total de Horas
    $hora = (int)($sobra / 3600);
    $sobra = $sobra % 3600;
    // Total de minutos
    $minuto = (int)($sobra / 60);
    $sobra = $sobra % 60;
    // Total de segundos
    $segundo = $sobra;

    ?>
    <section>
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você digitou, <strong><?=number_format($tempo, 0, ",",".")?> segundos</strong> equivalem a um total de:</p>
        <ul>
            <li>Semanas = <strong><?=$semana?></strong></li>
            <li>Dias = <strong><?=$dia?></strong></li>
            <li>Horas = <strong><?=$hora?></strong></li>
            <li>Minutos = <strong><?=$minuto?></strong></li>
            <li>Segundos = <strong><?=$segundo?></strong></li>
        </ul>
    </section>
</body>
</html>