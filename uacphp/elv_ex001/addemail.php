<!-- 2. Crie um formulário web e um script PHP "Adicionar Email" para adicionar novos clientes à lista -->
<?php 
    $dbc = mysqli_connect('localhost','root','','elvis_store')
        or die ('Erro ao se conectar com o servidor MYSQL server.');

    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];

    $query = "insert into email_list (first_name, last_name, email)" . "values('$first_name','$last_name','$email')";

    mysqli_query ($dbc, $query)
        or die ('Erro ao acessar o banco de dados');

    echo 'cliente adicionado.';

    mysqli_close($dbc);
?>