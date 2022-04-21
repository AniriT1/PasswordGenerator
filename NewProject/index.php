<?php

/* Lalalisa\PasswordGenerator;
use Lalalisa\RulesPassword;
use Lalalisa\HTMLFormater;
use Lalalisa\StrongPassword;*/
require ('src/PasswordGenerator.php');
require ('src/HTMLFormater.php');
require ('src/RulesPassword.php');
require ('src/StrongPassword.php');


$passwordRules = new RulesPassword();

/**<div>
    <?php echo $genPassword;?>
</div>
 * $_POST['number'] = true
 */
$passwordGen = new PasswordGenerator();
if ($_POST['submit']) {
    //var_dump($_POST);
    $number = $_POST['number'] ?? false;
    $letter = $_POST['letter'] ?? false;
    $symbol = $_POST['symbol'] ?? false;
    $genPassword = $passwordGen->generate($_POST['text'], $number, $letter, $symbol);
    $rulesPassword = $passwordRules->generate($_POST['text'], $number, $letter, $symbol);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Генератор паролей</title>
    <link href="css/style.css" rel="stylesheet"  type="text/css"/>
    
</head>
<body>
<div class="container">
    <div class="box">
            <h1>Сгенерируйте новый пароль</h1>
            <div class="passw">
            <?php echo $genPassword; ?>
            </div>
            <br>
            <?php echo $rulesPassword; ?>
            <h2>Введите количество символов в пароле</h2>
            
        <form action="" method="post">
            <input class="inp" type="textbox" required name="text">
            <input class="btn" type="submit" name="submit" value="Сгенерировать">
            <ul>
                <li>
                    <p class="p1">Цифры</p> </li> <li>
                    <input class="check" type="radio" name="number"> 
                </li>
                <li>
                    <p class="p1">Символы</p></li>
                    <li><input class="check"  type="radio" name="symbol">
                </li>
            </ul>
            
                
        </form>
    </div>
          </div>
</body>
</html>


