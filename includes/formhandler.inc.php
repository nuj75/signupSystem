<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$returnMessage = "";



//Gather username and email from form
$username = $_POST['user'];
$email = $_POST['email'];



if($_POST["pwd"] !== $_POST["pwdAgain"]) {//invalidate signup if passwords don't match
    $returnMessage = "Passwords don't match.";
    
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {//invalidate signup if email isn't in proper form
    
    $returnMessage = "Not a valid email.";

} else if ($_SERVER['REQUEST_METHOD'] == "POST") {//php file must be accessed through form submission to work
    
    try { //try block to catch errors for db conn
        require_once "dbh.inc.php";

        $password = $_POST['pwd'];

        
        //select existing rows from db with same used username/email to prevent duplicates
        $counter = 0;

        $stmt = $pdo->prepare("SELECT username, password FROM siteUsers WHERE (email=? OR username=?) AND confirmed=1");
        $stmt->execute([$email, $username]);
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $counter = $counter + 1;  
        }

        if($counter !== 0) {//send error message and return to signup page
            $returnMessage = "Username and/or email in use.";

            header("Location: ../signup.php?q=$returnMessage");
            die();
        }

   


        //if valid, insert new row with signup form information along with verification token
        $token = substr(md5(openssl_random_pseudo_bytes(20)), 20);

        $stmt = $pdo->prepare("INSERT INTO siteUsers(username, password, email, token) VALUES(?, ?, ?, ?);");
        $stmt->execute([$username, $password, $email, $token]);


        //send verification email with token 
        require '../vendor/autoload.php';
        $mail = new PHPMailer(true);
        try {//try catch block to catch mail sending errors
            $mail->SMTPDebug = 2;                   
            $mail->isSMTP();                        
            $mail->Host       = 'smtp.gmail.com;';    
            $mail->SMTPAuth   = true;               
            $mail->Username   = 't00942167@gmail.com';     
            $mail->Password   = 'hmycbvyzjahzimsz';         
            $mail->SMTPSecure = 'tls';              
            $mail->Port       = 587;

            $mail->setFrom('t00942167@gmail.com');          
            $mail->addAddress($_POST['email']);
            
            $mail->isHTML(true);                                 
            $mail->Subject = 'Email Confirmation';
            $mail->Body    = 'Click the following link to confirm your account: <a href = "localhost/testing1/includes/verification.inc.php?email='.$_POST['email'].'&token='.$token.'">Confirm</a>';
            $mail->send();

            $returnMessage = "Account verification email has been sent.";

        } catch (Exception $e) {
            $returnMessage = "Confirmation could not be sent: [$mail->ErrorInfo]";
        }


        $pdo = null;
        $stmt = null;
        

    } catch(PDOException $e) {
        $returnMessage = "Database Connection Error:".$e->getMessage();
        
    }


} 


//return to signup page with appropriate return message
header("Location: ../signup.php?q=$returnMessage");

die();

    
    
    
