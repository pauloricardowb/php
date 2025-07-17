<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <main>
        <!-- Minha solução -->

        <h1>Conversor de Moedas</h1> 

        <?php 
        $n = $_GET["num"] ?? 0;
    
        $d = 5.56;

        $c = $n / $d;

        echo "<p>Seus R$ $n equivalem a <strong>US$". ($n / $d) ."</strong>" // poderia simplesmente não concatenar e colocar a $c...
        ?>

        <button onclick="javascript:window:location.href='index.html'">&#x2B05;Voltar</a></button>
    </main> 

        <!-- Solução do professor -->

        <!--

        //Cotação copiada do Google
        $cotação = 5.17

        //Quanto $$ você tem?
        $real = 1000;

        //Equivalência em dólar
        $dólar = $real / $cotação;

        //Mostrar o resultado

            //Tradicional
        
        //echo "Seus R\$" . number_format($real, 2) . " equivalem a US\$" . number_format($dólar, 2);

            //Profissional

        //Formatação de moedas com internacionalização!
        //Biblioteca intl (Internallization PHP)

        $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo "<p>Seus " . numfmt_format_currency($padrão, $real, "BRL") . " equivalem a </strong>" . numfmt_format_currency($padrão, $dólar, "USD"). "</strong></p>";

        -->
</body>
</html>