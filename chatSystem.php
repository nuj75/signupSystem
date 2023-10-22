<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@1&family=Source+Serif+4:opsz@8..60&display=swap" rel="stylesheet">


<?php  

session_start();

// try {
//     require_once "includes/dbh.inc.php";

//     $stmt = $pdo->prepare("SELECT username FROM siteUsers WHERE id = ?");

//     $stmt->execute([$_SESSION['id']]);

//     $username = "";

//     $login = False;

//     while($row = $stmt->fetch(PDO::FETCH_NUM)) {
//         $login = True;
//         $username = $row[0]; 
         
//     }


//     if ($login == False){
//         header("Location:  login.php");
        
//     }



// } catch (PDOException $e) {
//     echo "Database Connection Error:".$e->getMessage();

    
// }


?> 


<style>


.headerClass {
    /* setting size and aligning div */
    width: 50%;
    height: 2%;
    margin: auto;

    position: absolute;
    top: 17%;
    left: 50%;
    transform: translate(-50%, -50%);

    /* allowing children to align within class */
    display: flex;
    align-items: center;
    justify-content: center;
    background-color:  #8f8f8f;
    border: solid black;
    border-width: 0.5px;
}

h1 { /* styling header of page */
    font-family: 'Instrument Serif', serif;
    font-style: italic;
    font-size: 100px;

    /* positioning header correctly */
    transform: translateY(-3%);
    
    
}
body { /*allowing alignment of contents, background color */
    background-color: gray;
    position: relative;
    font-family: 'Source Serif 4', serif;
}

.uploadTextDiv {
    position: absolute;
    height: 100%;
    width: 100%;

    transition: all 0.2s ease-in;

  


}


.uploadTextDiv.animation {
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(5px);
    transition: all 0.2s ease-in;

}






input[name="uploadText"] {
    /* dimensions and style of textbox */
    border-radius: 5px;
    border-width:5px;
    border-style: solid;
    border-color:  #a6a6a6;
    width: 100%;
    height: 40%;
    font-size: 15px;
    padding: 0px 17px;

    font-family: 'Source Serif 4', serif;
        
    text-align: center ;

}

.poster {
    /* aligning textbox within site */
    position: absolute;
    top: 29%;
    left: 50%;
    transform: translate(-50%, -50%);
    
    height: 11%;
    width: 25%;



    

}



.chatFeed {
    border: black dotted;
    width: 50%;
    height: 67%;
    top: 30%;
    left: 50%;
    transform: translate(-50%, 0%);
    background:  #8f8f8f;
    border-width: 3px; 

    transition: all 0.2s ease-in;

    

    position: absolute;

    display: flex;
    align-items: center; 
    justify-content: center;  
    





    
}

.postsChatFeed {
    position: relative;
    max-height: 75%;
    overflow: scroll;

    width: 75%;
    text-align: center;
    
}









</style>



<script>

document.addEventListener("DOMContentLoaded", function() {

    const textBox = document.querySelector('input[name="uploadText"]');

    const box = document.querySelector('.uploadTextDiv');

    textBox.addEventListener('focus', function() {
        box.classList.add('animation');

    });

    textBox.addEventListener('blur', function() {
        box.classList.remove('animation');  
    });

});






</script>





<div class="headerClass">
    <h1>text feed</h1>  
</div>



<body>

 

<div class="uploadTextDiv">
    <form class="poster" action="includes/chatUpload.inc.php" method="POST">  
        <input name="uploadText" placeholder="Share a Message" ></input>
        
    </form>
</div>


<div class="chatfeedBack">
    <div class="chatFeed" >
        

        <div class="postsChatFeed">
            <?php
                try {
                    require_once 'includes/dbh.inc.php';
                    
                    $stmt = $pdo->query("SELECT username, posted, post FROM posts");

                
                    while($row = $stmt->fetch(PDO::FETCH_NUM)) {
                
                        echo $row[0], "<br>", $row[1], "<br>", "<p style='font-size:20px;'><b>$row[2]</b></p>", "<br> <br>";
                        
                    }
                } catch (Exception $e) {
                    echo "wrong";
                }
            
            ?>
        </div>
        </div>
    </div>
</div>



    

</body>