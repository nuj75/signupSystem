<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@1&family=Source+Serif+4:opsz@8..60&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@1&display=swap" rel="stylesheet">
<style>

body {
    position: relative;
    font-family: 'Source Serif 4', serif;
    height: 100%; width: 100%; margin: 0;
    background: #c4c4c4;

    
}

h1 {
    position: absolute;
    top: 10%;
    left: 50%;
    transform: translate(-50%, 40%);
    font-family: 'Instrument Serif', serif;
    font-style: italic;
    font-size: 100px;
    
}



.square {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, 25%);
    display: flex;   
    justify-content: center;
    align-items: center;
    width: 30%;
    height: 10%;
    border:1px solid black;
    background: black;

}

.returnMessage{
    position: absolute;
    top: 73%;
    left: 50%;
    transform: translateX(-50%);
    text-align: center;
}


.form {
    display: flex;
    flex-direction: column;     
    justify-content: center;
    align-items: center;
    width: 70%;
    height: 200%;
    
}

.login {
    display: flex;
    flex-direction: column;
    width: 100%;
}




.form input{
    font-size:25px;
    font-family: 'Source Serif 4', serif;
    text-align: center; 
    width: 100%;
    height: 100%;
}
.form button {
    font-size:25px;
    font-family: 'Source Serif 4', serif;
    text-align: center; 
    border-radius: 0%;
    width: 100%; 
    

}
</style>




<body>

    <h1>sign up</h1>  
    
    <div class = "square">
        <div class="form">
            <form class="login" action="includes/formhandler.inc.php" method="POST">
                <input type="text" name="email" placeholder="Email">
                <input type="text" name="user" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <input type="password" name="pwdAgain" placeholder="Password Again">   
                <button>Submit</button>
            </form>

        
           

        </div>
    </div>
    <div class="returnMessage">
        <?php
            echo $_GET['q'];
        ?>
    </div>

</body>




