<?php
session_start();

// Destroyer of all session variables

session_unset();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Session Page</title>
</head>
<body>

    <p>Session variables destroyed!</p>
    <br>
    <br>
    <a href="create_session.php">Create Session</a>
    <br>
    <br>
    <a href="read_session.php">Read Session</a>
    <br>
    <br>
    <a href="destroy_all_session.php">Destroy ALL Session</a>
    

</body>
</html>