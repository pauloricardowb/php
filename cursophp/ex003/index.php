<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        // 0x = hexadecimal 0b = binário 0 = Octal 
        
        //$num = 0x1A;
        //echo "O valor da variável é $num";


        //$v = "Gustavo";
        //var_dump($v);
    
        //$num = (integer) 3e2; //3 x  10^2 = 300 //coerção
        //echo "O valor é $num";
        //var_dump($num);

        //$num = (float) "950";
        //var_dump($num);

        //$casado = true;
        //var_dump($casado);

        //print "O valor para casado é $casado"; //1 para true e Vazio para false
    
        //$vet = [6, 2.5, "Maria", 3, false];
        //var_dump($vet);
    
        class Pessoa {
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p);

    ?>
</body>
</html>