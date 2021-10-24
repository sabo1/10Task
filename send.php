<?php
  

    // $pdo = new PDO("mysql:host=localhost;dbname=rahimcourseseptember", "root", "");
    /* if(!$pdo){
        die("DB error connection");
    }else {
        echo "good";
    } */    
        
/* 
        $result =  $pdo->prepare("INSERT INTO 'mailer' ('id', 'text') VALUES (NULL,'text')");
        $result->execute();
        if (!$result) {
            die("Error add new article");
        }
        die("Success!!"); */
        
       
/*         header("location: ");
        exit; */

        // как провально надо внизу

    // 0. без нее не пашет
    $text = $_POST['text'];
    // 1. связали с БД
    $pdo = new PDO("mysql:host=localhost;dbname=rahimcourseseptember", "root", "");
    // 2. что делать с таблице
    $sql =  "INSERT INTO mailer (text) VALUES (:text) ";   //:text набирается в любом количестве и вида
    // 3. выполняем запрос 
    $statement = $pdo->prepare($sql);
    $statement->execute(['text'=> $text]);
    if (!$sql) {
        die("Error add new article");
    }
    echo("Success!!");
    // header("Location: ./");
    
?>
<style>
    .button{
        background: linear-gradient(to left, green, red);
        width: 10rem;
        height: 2rem;
    }
</style>
<br>
<br>
<button class="button" onclick="window.location.href='http://rahimcourseseptember/10Task/task_9.php';">Back</button>
