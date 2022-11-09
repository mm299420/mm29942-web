<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>mm29942</title>
    <link rel="icon" href="Images/cicada.png" type="image/png">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="script.js"></script>
    <script src="jquery-3.6.1.js"></script>
    <style>
        #BTNHome {
            display: none;
        }
    </style>
<body id="body">
<div id="screen">
    <h1>Wilkommen!</h1>
    <?php
        require 'indexClass.php';
        menuBTN();
        menuWindows();
        database_C();
    ?>
</div>
</body>
</html>'
