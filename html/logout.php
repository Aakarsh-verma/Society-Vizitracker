<?php  
    session_start();
    session_destroy();  
    header("Location: index.html");
    //<a type='button' href="logout.php">Logout</a>
?>  