<?php
session_start();

if (isset($_SESSION)) {
    // Declaring variable values if session started
    isset($_SESSION['views']) ? $_SESSION['views'] = $_SESSION['views'] + 1 : $_SESSION['views'] = 0;
    $_SESSION['browser'] = $_SERVER['HTTP_USER_AGENT'];
    $_SESSION['role'] = 'admin';   
    
} else {
    // If session wasn't created, notify the client and set values to empty
   echo "Session not created!";
   $_SESSION['views'] = 0;
   $_SESSION['browser'] = "";
   $_SESSION['role'] = ''; 
   
   
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Session Page</title>
</head>
<body>

    <!-- Using ternary's to check for session isset's and then printing values dependant on that -->
    <p><?php echo isset($_SESSION['views']) ? "<b>Views: </b>" . $_SESSION['views'] : "<b>Views: </b>0" ?></p>
    <p><?php echo isset($_SESSION['browser']) ? "<b>Browser Type:  </b>" .  $_SESSION['browser'] : "<b>Browser Type: </b>"?></p>
    <p><?php echo isset($_SESSION['role']) ? "<b>Current Role: </b>" . $_SESSION['role'] : "<b>Current Role: </b>" ?></p>
    <a href="read_session.php">Read Session</a>
    <br>
    <br>
    <a href="destroy_session.php">Destroy Session</a>
    <br>
    <br>
    <a href="destroy_all_session.php">Destroy ALL Session</a>
    

</body>
</html>