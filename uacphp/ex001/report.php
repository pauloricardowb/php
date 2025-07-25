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
    $name = $_POST['firstname'].' '.$_POST['lastname']; //concatenação
    $when_it_happened = $_POST['whenithappened'];
    $how_long = $_POST['howlong'];
    $how_many = $_POST['howmany'];
    $alien_description = $_POST['aliendescription'];
    $what_they_did = $_POST['whattheydid'];
    $fang_spotted = $_POST['fangspotted'];
    $email = $_POST['email'];
    $other = $_POST['other'];

    $to = 'rick1746@proton.me';
    $subject = 'Aliens Abducted Me - Abduction Report';
    $msg = "$name was abducted $when_it_happened an was gone for $how_long.\n".
        "Number of aliens: $how_many\n".
        "Alien description: $alien_description\n".
        "What they did: $what_they_did\n".
        "Fang spotted: $fang_spotted\n".
        "Other comments: $other";
    mail($to, $subject, $msg, 'From:' . $email);

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