<?php

if($_SERVER['REQUEST_METHOD'] == "POST") {
    $enteredID = $_POST['user'];
    $enteredPass = $_POST['pwd'];


    try {
        require_once "dbh.inc.php";
        
    
        $stmt = $pdo->prepare("SELECT id FROM siteUsers WHERE (username = :userOne OR email = :userOne) AND password = :pass AND confirmed = 1");
        
      
        $stmt->execute(array(
            ':userOne' => $enteredID,
            ':pass' => $enteredPass
        ));
        
        
        $counter = 0;

        $id = "";

    
        while($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $counter = $counter + 1;

            $id = $row[0];
            
        }
    
        if($counter == 1) {

            
             
            session_start();

            $_SESSION["id"] = $id;
            $_SESSION["username"] = $enteredID;

            header("Location: ../chatSystem.php");

            die();
        }


        $pdo = null;
        $stmt = null;
    
    
    
    
        
    } catch (PDOException $e) {
        $returnMessage = "Database Connection Error:".$e->getMessage();
    
        
    }
}



header("Location: ../login.php?q=$returnMessage");