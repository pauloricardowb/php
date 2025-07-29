<?php 
    $from = 'elmer@makemeelvis.com';// Colocar seu endereço
    $subject = $_POST['subject'];
    $text = $_POST ['elvismail'];

    if (!empty($subject)) { //o ponto de exclamação inverte a lógica da função empty().
        if (!empty($text)) {
            
            $dbc = mysqli_connect('localhost','root','','elvis_store')
                or die('Erro ao se conctar ao servidor MySql');
        
            $query = "select * from email_list";
            
            $result = mysqli_query($dbc, $query)
                or die('Erro ao consultar o banco de dados');
        
            while($row = mysqli_fetch_array($result)) {
                $first_name = $row['first_name'];
                $last_name = $row['last_name'];
        
                $msg = "Dear $first_name $last_name,\n  $text"; //O destinatário do email, o assunto e o corpo da mensagem são passados para função mail(), junto com o endereço "from" de Elmer.
                $to = $row ['email']; //A coluna "email" do banco de dados armazena os endereços dos clientes, aos quais a mensagem deve ser enviada.
                mail('$to' , '$subject' , '$msg' , 'From:' . '$from'); //O email destinatário, assunto da mesagem e corpo da mensagem, são passado na função mail(), com o endereço "de" Elmer.
                echo 'Email sento to: ' . $to . '<br>'; //Uma mensagem de confirmação é enviada para a página, com o endereço de cada cliente a quem foi enviada a mensagem.
            }
            mysqli_close($dbc);
        } //finalizando a declaração if interna
    } //finalizando a declaração if externa
?>