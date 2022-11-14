<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>JayAre</title>
    <link rel="icon" href="Images/logo.jpg" type="image/png">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="script.js"></script>
    <script src="jquery-3.6.1.js"></script>
    <style>
        #btnHome {
            display: none;
        }
        .btnClear {
             display: none;
         }
    </style>
</head>
<body id="body">
<div id="screen">
    <div id="greetings" class="welcome">
        <h1 class="header">Welcome to Jay-Are!</h1>
        <?php include 'templates/elements.php';
        menuBTN();
        menuWindows();
        //include 'templates/db.php';
        //connectDB();
        ?>
    </div>
</div>
    <?php
        $value = 1;
        error_reporting(0);
        session_start();

        if (!isset($_SESSION['visited'])) {
            echo 'erster Besuch!';
            $_SESSION['visited'] = true;
        } else {
            echo 'Erneuter Besuch!';
        }
    ?>
    <div id="imgDiv">
        <img id="img" src="Images/home_abb.jpg" class="avoid-clicks" style="position: absolute; bottom: 0; margin: auto 0; width: 50%; height: auto">
    </div>
</body>
</html>
