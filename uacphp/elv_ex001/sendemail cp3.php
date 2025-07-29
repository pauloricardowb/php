<?php 
    $from = 'elmer@makemeelvis.com';// Colocar seu endereço
    $subject = $_POST['subject'];
    $text = $_POST ['elvismail'];

    if ((!empty($subject)) && (!empty($text))) { //teste condiconais com operadores
        //Nós sabemos que tanto $subject e $text estão faltando
    } 
    else {
        if (empty($subject) || empty($text)) {
    // Nós sabemos que um doi dois, $subject ou $text, está faltando - vamos descobrir qual deles
            if(empty($subject)) {
                //$subject está vazia
                echo 'Você esqueceu do assunto..<br>';
            } 
            else {
                //$text está vazia
                echo 'Você esqueceu do corpo da mensagem..<br>';
            }
        }
        else {
            //Tudo certo, enviar email

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
        }
    }
?>