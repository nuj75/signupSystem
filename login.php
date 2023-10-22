<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@1&family=Source+Serif+4:opsz@8..60&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@1&display=swap" rel="stylesheet">
<style>

body {
    position: relative;
    font-family: 'Source Serif 4', serif;
    height: 100%; width: 100%; margin: 0;
    background: gray;

    
}

h1 {
    position: relative;
 
    font-family: 'Instrument Serif', serif;
    font-style: italic;
    font-size: 100px;
    
}



.square {
    position: absolute;
    top: 48%;
    left: 50%;
    transform: translateX(-50%);
    display: flex;   
    justify-content: center;
    align-items: center;
    width: 30%;
    height: 10%;
    background:    #262626;

}

.returnMessage{
    position: absolute;
    top: 70%;
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
    font-size: 20px;
    font-family: 'Source Serif 4', serif;
    text-align: center; 
    width: 100%;
    height: 40%;
    

}
.form button {
    position: relative;
    font-size: 17px;
    font-family: 'Source Serif 4', serif;
    text-align: center; 
    border-radius: 0%;
    width: 100%; 
    height: 40%;
    
    top: 13%;
    

}

.rectangle {
    width: 50%;
    height: 2%;

    position: absolute;
    top: 35%;
    left: 50%;
    transform: translate(-50%, -50%);

    display: flex;
    align-items: center;
    justify-content: center;

    
    background-color:  #8f8f8f;
    border: solid black;
    border-width: 0.5px; 
}

</style>




<body>

    <div class="rectangle"><h1>login</h1>  </div>
    
    <div class = "square">
        <div class="form">
            <form class="login" action="includes/verificationlogin.inc.php" method="POST">


                <div class="textboxes">
                    <input type="text" name="user" placeholder="Username or Email">
                    <input type="password" name="pwd" placeholder="Password">
                </div>

            


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




