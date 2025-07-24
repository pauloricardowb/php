<?php 
    // 0x = dexadecimal 0b = binário 0 = Octal

    $v = "Ricardo";
    var_dump($v); 

    echo "<p>-------------------</p>";

    $num = (integer) 3e2; //3 x 10² = 300 //coerção
    echo "o valor de $num é ";
    var_dump($num);

    echo "<p>-------------------</p>";

    $num = (float) "950";
    var_dump($num);

    echo "<p>-------------------</p>";

    $casado = true;
    var_dump($casado);

    echo "<p>-------------------</p>";

    print "O valor para casado é $casado"; //1 para true e Vazio para false

    echo "<p>-------------------</p>";

    $vet = [3, 2.5, "Maria", 3, false];
    var_dump($vet);

    echo "<p>-------------------</p>";

    class Pessoa {
        private string $nome;
    }

    $p = new Pessoa;
    var_dump($p)
?>