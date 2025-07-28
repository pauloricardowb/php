<?php 
/* alguns exêmplos de condições com php */

if (isValid($credit_card_num)) { //se o cartão for válido então atender ao pedido
    fillOrder();
}

echo "------";

if ($shipping_state == 'nevada') { //se o cliente mora em nevada então aplicar desconto
    $total = $total * 0.9;
}

echo "------";

($num_itens == 10); //variavél com número
($shipping_address == $billing_address) //variavél com variavél
(2 + 2 == 4); //operações matemáticas

echo "------";

$small_number = 2;
$big_number = 98065;

if ($small_number <> $big_number) { echo 'True'; };
if ($small_number != $big_number) { echo 'True'; };

if ($small_number > $big_number) { echo 'True'; };

if ($small_number < $big_number) { echo  'True'; };

if ($small_number >= $big_number) { echo 'True'; };

if ($small_number <= $big_number) { echo 'True'; };

echo "------";

$my_name = 'Buster';
$a_number = 3;
$a_decimal = 4.6;
$favorite_song = 'Trouble';
$another_number = 0;
$your_name = $my_name;

($a_number == 3) // true
($another_number == "") // true
($favorite_song == "Trouble") // true
($my_name == 'your_name') // false
($my_name == "$your_name") //
($your_name == $my_name) // true
($favorite_song == 'Trouble') // true
($a_number > 9) //false
($favorite_fodd = 'hamburguer'); // verdadeiro (qualquer coisa que não seja 0, NULL ou false é interpretada como true pelo PHP)

echo "------";

/* Funções que subistituem == */

isset($x); // verifica se determinada variável existe
empty($x); // verifica se a variável contém um valor vázio (só retorna true se a variável tiver sido definida como 0, um string vazia, false ou NULL.)

echo "------";

$v1 = 'aloha'; //$v1 contém um valor
$v2 = ''; //$v2 é uma string vazia

if (isset($v1)) { echo '$v1 está definida<br>'; }; //true
if (empty($v1)) { echo '$v1 está vazia<br>'; }; //false - $v1 não está vazia.
if (isset($v2)) { echo '$v2 está definida<br>'; }; //true - $v2 está definida mesmo que contenha uma string vazia
if (empty($v2)) { echo '$v2 está vazia<br>'; }; //true - $v2 está vazia porque a string que ela contém é vazia
if (isset($v3)) { echo '$v3 está definida<br>'; }; //false - $v3 não existe
if (empty($v3)) { echo '$v3 está vazia<br>'; } //true - $v3 é considerada vazia, mesmo que nem exista.
?>