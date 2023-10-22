<?php

try { 
    require_once 'dbh.inc.php';

    $stmt = $pdo->prepare("SELECT username FROM siteUsers WHERE id = ?");

    $stmt->execute([$_SESSION['id']]);

    $username = "";      

    $login = False;

    while($row = $stmt->fetch(PDO::FETCH_NUM)) {
        $login = True;
        $username = $row[0]; 
         
    }


    if ($login == False){
        header("Location: ../login.php");
        
    }


    
    $stmt = $pdo->query("SELECT (username, posted, post) from posts");
    $row = $stmt->fetch(PDO::FETCH_NUM);
    

} catch (PDOException $e) {
    
}


  

die();