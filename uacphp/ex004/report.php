    <?php 
    //$name = $_POST['firstname'].' '.$_POST['lastname']; //concatenação
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $when_it_happened = $_POST['whenithappened'];
    $how_long = $_POST['howlong'];
    $how_many = $_POST['howmany'];
    $alien_description = $_POST['aliendescription'];
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
    "when_it_happened, how_long, how_many, alien_description, " . "what_they_did, fang_spotted, other, email) " . 
    "values ('$first_name', '$last_name', '$when_it_happened', '$how_long', '$how_many', " .
    "'$alien_description', '$what_they_did', " .
    "'$fang_spotted', '$other', " . 
    "'$email')";

    /* Comunicação com o servidor mySQL */
    
    $result = mysqli_query ($dbc, $query)
        or die('Error querying database.');

    /* Encerrando conexão */
    
    //Altamente recomendado sempre fechar as conexões
    mysqli_close($dbc);

  /*   echo 'Thanks for submitting the form.<br>';
    echo "-------------------------------------<br>";
    echo "Your name is $first_name $last_name<br>";
    echo "You were abducted $when_it_happened<br>";
    echo "and were gone for $how_long<br>";
    echo "and they were $how_many<br>";
    echo "describe them: $alien_description<br>";
    echo "What they did? $what_they_did<br>";
    echo "was Fang there? $fang_spotted<br>";
    echo "Your email addres is $email<br>";
    echo "Anything else... $other"; */

    //phpinfo()

echo 'Thanks for submitting the form.<br>';
echo 'You were abducted ' . $when_it_happened;
echo ' and were gone for ' . $how_long . '<br>';
echo 'Number of aliens: ' . $how_many . '<br>';
echo 'Describe them: ' . $alien_description . '<br>';
echo 'The aliens did this: ' .$what_they_did . '<br>';
echo 'Was Frang there? ' . $fang_spotted . '<br>';
echo 'Other comments: ' . $other . '<br>';
echo 'You email address is ' . $email;

//select * from aliens_abduction where fang_spotted = 'yes';

?>