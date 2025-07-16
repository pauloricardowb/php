<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <!-- Minha solução -->
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <p>Gerando um número aleatório entre 0 e 100...</p>

        <a href="javascript:history.go(-0)">Gerar novo número</a><br>
        
        <?php
        echo "O valor gerado foi ". rand(1, 100)."";
        ?>
    </main>

    <!-- Solução do Professor -->

    <!--
        $min = 0;
        $max = 100;

        $num = mt_rand($min, $max);
        // rand() = 1951 - Linear Congrential Generator

        // mt_rand() = 1997 - Mersenne Twister
        // A partir do PHP 7.1, rand() é um simples apontamento para mt_rand()
        // random_int() gera números aleatórios criptograficamente seguros

        echo "Gerando um número aleatório entre $min e $max... \n";
        echo "O número gerado foi $num";

        ----------------------------------

        obs: a solução pelo servidor interno ficou parecido com a solução acima

        <button>&#x1F%04; Gerar novo </button>

        ou

        <button onclick="javascript:document.location.reload()">&#x1F504; Gerar outro</button>
    -->



</body>
</html>