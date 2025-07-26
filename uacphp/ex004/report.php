<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aliens Abducted Me - Report an Abduction</title>
</head>
<body>
    <h2>Aliens Abducted Me - Report an Abduction</h2>
    <?php 
    //$name = $_POST['firstname'].' '.$_POST['lastname']; //concatenação
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $when_it_happened = $_POST['whenithappened'];
    $how_long = $_POST['howlong'];
    $how_many = $_POST['howmany'];
    $alien_descption = $_POST['aliendescription'];
    $what_they_did = $_POST['whattheydid'];
    $fang_spotted = $_POST['fangspotted'];
    $email = $_POST['email'];
    $other = $_POST['other'];

    /* Conectando ao banco de dados mySQL */
    
    $dbc = mysqli_connect( //Use esta variável para realizar outras ações no banco de dados.
        'localhost', //Localização do banco de dados. 
        'root', //Nome de usuário
        '', //Senha
        'aliendatabase' //Nome do banco de dados
        )
            or die('Error connecting to MySQL server.');
    
    /* Inserindo valores */
    
    $query = "insert into aliens_abduction (first_name, last_name, " . 
    "when_it_happened, how_long, how_many, alien_descption, " . "what_they_did, fang_spotted, other, email) " . 
    "values ('$first_name', '$last_name', '$when_it_happened', '$how_long', '$how_many', " .
    "'$alien_descption', '$what_they_did', " .
    "'$fang_spotted', '$other', " . 
    "'$email'";

    /* Comunicação com o servidor mySQL */
    
    $result = mysqli_query ($dbc, $query)
        or die('Error querying database.');

    /* Encerrando conexão */
    
    //Altamente recomendado sempre fechar as conexões
    mysqli_close($dbc);

    echo 'Thanks for submitting the form.<br>';
    echo "-------------------------------------<br>";
    echo "Your name is $name<br>";
    echo "You were abducted $when_it_happened<br>";
    echo "and were gone for $how_long<br>";
    echo "and they were $how_many<br>";
    echo "describe them: $alien_description<br>";
    echo "What they did? $what_they_did<br>";
    echo "was Fang there? $fang_spotted<br>";
    echo "Your email addres is $email<br>";
    echo "Anything else... $other"

    //phpinfo()
?>
</body>
</html>