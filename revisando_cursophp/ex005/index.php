<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interação com Formulários</title>
</head>
<body>
    <header>
        <h1>Apresente-se para nós meu caro</h1>
    </header>
    <?php 
    //var_dump($_GET); $_POST | $_REQUEST(junção de $_POST | $_GET | $_COOKIES)

    $nome = $_GET['nome']??""; // ?? operador de coalescência nula
    $sob = $_GET['sob']??"";

    ?>
    <section>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="inome">Qual o seu Nome?</label>
            <input type="text" name="nome" id="inome" value="<?=$nome?>"><br>
            <label for="iisob">Qual seu Sobrenome?</label>
            <input type="text" name="sob" id="isob" value="<?=$sob?>"><br>
            <input type="submit" value="Enviar">
        </form>
    </section>
    <?="<p>Muito prazer <strong>$nome $sob</strong>, sejá bem vindo ao meu site!</p>"?>
    <p><a href="javascript:history.go(-0)">Reload</a></p>
</body>
</html>