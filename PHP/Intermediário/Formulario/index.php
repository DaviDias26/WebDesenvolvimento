<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_POST['acao'])){
            echo $_POST['num1']+$_POST['num2'];
        }
        
    ?>
    <form>
        <input type="text" name="num1"/>
        <input type="text" name="num2"/>
        <input type="submit" name="acao" value="Enviar"/>
    </form>
</body>
</html>