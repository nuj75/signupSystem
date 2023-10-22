<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    
    try { //try block to catch errors for db conn
        require_once "dbh.inc.php";

        
        $post = $_POST["uploadText"];
        $user = $_SESSION["username"];
        
        
        
        
        $stmt = $pdo->prepare("INSERT INTO posts(username, post) VALUES(?, ?);");
        $stmt->execute([$user, $post]);


        
        $pdo = null;
        $stmt = null;
        

    } catch(PDOException $e) {
        echo "Database Connection Error:".$e->getMessage();
        
    }


} 


//return to chat system 
header("Location: ../chatSystem.php");
die();

    
    
    
