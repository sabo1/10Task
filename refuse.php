<?php
session_start();

$text = $_POST['text'];

$pdo = new PDO("mysql:host=localhost;dbname=rahimcourseseptember;", "root", "");

// запись сушествует или нет отвечает данный код
$sql = "SELECT * FROM mailer WHERE text=:text";
$statement = $pdo->prepare($sql);
$statement->execute(['text'=> $text]);
$aim = $statement->fetch(PDO::FETCH_ASSOC);

// за проверку сушествующего кода отвечает код ниже
// !empty - не пуста , сушествует
if(!empty($aim)) {
    //  функция внизу показывает что данная запись сушествует в базе
    $message = "Данная запись уже сушествует.";
    $_SESSION['danger'] = $message;
    // перенаправляет
    header("Location: task_10.php");
    // выход
    exit;
}


$sql = "INSERT INTO mailer (text) VALUES (:text)";
$statement = $pdo->prepare($sql);
$statement->execute(['text'=> $text]);
//  функция внизу показывает что новая запись отправили
$message = "Успешная запись!";
$_SESSION['success'] = $message;

header("Location: task_10.php");


?>
<!-- не работает код внизу, после того как на 20 линий написал header=перенаправить и exit=выход -->
<style>
    .button{
        background: linear-gradient(45deg, blue, yellow);
        width: 10rem;
        height: 2rem;
    }
</style>
<br>
<br>
<button class="button" onclick="window.location.href='http://rahimcourseseptember/10Task/task_10.php';">Back</button>