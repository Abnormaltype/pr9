<?php

session_start();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style>
        .container {
            width: 550px;
        }
    </style>
</head>
<body style="padding-top: 3rem;">
<div class="container">
    <?php
    if ($_SESSION['auth'] == true) {
        echo '<img src="wttc.png" alt="Welcome to the club!" width="656" height="300"><br>';
        echo "You are authorised user.";
    } else {
        echo "You aren`t authorised user. Please log in.<br>";
        echo '<a class="btn" href="login.php">Login</a><hr>';
    }

    ?>
</div>
    
</body>
</html>

