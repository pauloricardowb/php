<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <!-- Minha solução -->

    <header>
        <h1>Resultado do número</h1>
    </header>
    <main>
        <?php 
        
        $n = $_GET["numero"] ?? 0;
        $n1 = $n + 1;
        $n2 = $n - 1;

        echo "<p>Seu número escolhido foi $n</p>";
        echo "<p>O seu sucessor é $n1</p>";
        echo "<p>O seu antecessor é $n2</p>";

        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
        <!--<button onclick="javascript:window:location.href='index.html'">&#x2B05;Voltar</button>-->
    </main>

    <!-- Solução do Professor -->

    <!--
    
        $num = 15
         
        $ant = $num -1;
        $suc = $num +1;

        echo "O antecessor de $num é $ant \n";
        echo "O sucessor de $num é $suc \n";

        --------------------------------------

        $num = 15
         
        //$ant = $num -1;
        //$suc = $num +1;

        echo "O antecessor de $num é".($num - 1)."\n";
        echo "O sucessor de $num é".($num + 1)."\n";

        ---------------------------------------

        obs: A solução pelo servidor local foi a mesma lógica da minha.

    -->
</body>
</html>