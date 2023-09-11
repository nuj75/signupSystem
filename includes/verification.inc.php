<?php 

$returnMessage = "";



try { //try block to catch errors for db conn
    require_once 'dbh.inc.php';

    //Gather username and email from url
    $email = $_GET['email'];
    $token = $_GET['token'];

    //update confirmation of account in db
    $stmt = $pdo->query("UPDATE siteUsers SET confirmed = 1, token = NULL WHERE email = '".$email."' AND token = '".$token."';");
    
    $returnMessage = "Account successfully made.";

} catch (PDOException $e) {
    $returnMessage = "Verification Error:".$e->getMessage();
}


  
//return to signup page with appropriate return message
header("Location: ../signup.php?q=$returnMessage");

die();


