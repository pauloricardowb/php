<?php
// Cálculo de média simples e ponderada
    $v1 = 10;
    $p1 = 2;
    $v2 = 16;
    $p2 = 3;
    
    $ma = ($v1 + $v2) / 2;
    $mp = ($v1*$p1 + $v2*$p2)/($p1+$p2);

    echo "<p>A média aritmética entre $v1 e $v2 é igual a $ma</p>";
    echo "<p>A média ponderada entre $v1 (tendo peso $p1) e $v2 (tendo peso $p2) é igual a $mp</p>";
?>