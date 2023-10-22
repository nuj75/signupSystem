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
    background: gray;

    
}

h1 {
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
    background:    #262626;

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
    
    top: 1%;
    

}

.rectangle {
    width: 50%;
    height: 2%;

    
    display: flex;
    justify-content: center;
    align-items: center;

    
    position: absolute;
    top: 35%;
    left: 50%;
    transform: translate(-50%, -50%);
    
    background-color:  #8f8f8f;
    border: solid black;
    border-width: 0.5px;

}
</style>



<div class="rectangle"><h1>sign up</h1>  </div>
<body>

    
    
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




