<!-- Login Session for users -->

<?php

    session_start();
    
    if(isset($_SESSION["userid"])) {  
        $session_name = $_SESSION["useruid"];
    }  
    else {  
        header("location:index.php");  
    }  

?>