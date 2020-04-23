<?php
session_start();
isset($_SESSION['views']) ? $_SESSION['views'] = $_SESSION['views'] + 1 : $_SESSION['views'] = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Session Page</title>
</head>
<body>

    <!-- Using ternary's to check for session isset's and then printing values dependant on that -->
    <p><?php echo isset($_SESSION['views']) ? "<b>Views: </b>" . $_SESSION['views'] : "<b>Views: </b>0" ?></p>
    <p><?php echo isset($_SESSION['browser']) ? "<b>Browser Type:  </b>" .  $_SESSION['browser'] : "<b>Browser Type: </b>"?></p>    
    <p><?php echo isset($_SESSION['role']) ? "<b>Current Role: </b>" . $_SESSION['role'] : "<b>Current Role: </b>" ?></p>
    <a href="create_session.php">Create Session</a>
    <br>
    <br>
    <a href="destroy_session.php">Destroy Session</a>
    <br>
    <br>
    <a href="destroy_all_session.php">Destroy ALL Session</a>
    

</body>
</html>