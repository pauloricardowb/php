<?php 
    /* Conectando ao banco de dados mySQL */
    
    $dbc = mysqli_connect( //Use esta variável para realizar outras ações no banco de dados.
        'localhost', //Localização do banco de dados. 
        'root', //Nome de usuário
        '', //Senha
        'aliendatabase' //Nome do banco de dados
        )
            or die('Error connecting to MySQL server.');
    
    /* Inserindo valores */
    
    //$query É uma variável string do PHP, que agora armazena a query INSERT
    $query = "insert into aliens_abduction (first_name, last_name, " . //O ponto final diz ao PHP para juntar esta string com a que vier na linha seguinte
    "when_it_happened, how_long, how_many, alien_descption, " . "what_they_did, fang_spotted, other, email) " . 
    "values ('Amy', 'Jones', '3 dias atrás', '1 dia', 'quatro', " .
    "'verde com seus tentáculos', 'Nós só conversamos e brincamos com cachorro', " .
    "'sim', 'acho que posso ter visto seu cão ente em contato', " . //A string de consulta se divide em várias linhas, para tornálo mais legível - os pontos finais instruem o PHP a transformar tudo isto em uma única string.
    "'sally@gregs-list.net')";// Uma vez que tudo isto é código PHP, é preciso finalizá-lo com ponto e vírgula.

    /* Comunicação com o servidor mySQL */
    
    //$result É o resultado da query
    //$dbc É o banco de dados
    //$query É a query
    $result = mysqli_query ($dbc, $query)
        or die('Error querying database.');

    /* Encerrando conexão */
    
    //Altamente recomendado sempre fechar as conexões
    mysqli_close($dbc);
?>