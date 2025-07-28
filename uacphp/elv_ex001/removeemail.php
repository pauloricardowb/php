<?php 

    $email = $_POST['email'];

    $dbc = mysqli_connect("localhost", "root", "", "elvis_store")
        or die("Erro ao se conectar ao servidor mySQL");

    $query = "delete from email_list where email = '$email'";
    
    mysqli_query($dbc, $query)
        or die('Erro ao consultar o banco de dados');
    
    echo 'Cliente removido: ' . $email;

    mysqli_close($dbc);

?>