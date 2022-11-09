<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>mm29942</title>
    <link rel="icon" href="Images/cicada.png" type="image/png">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="script.js"></script>
    <script src="jquery-3.6.1.js"></script>
<body id="body">
<h1>Anmelden</h1>
<div class="login" id="login">
    <form action="login/SignUp.php" method="post">
        <input type="submit" name="SignUp"  value="Sign Up" id="BTNLogin" class="btn loginBTN" />
    </form>
</div>
<div class="loginDATA" id="loginDATA">
    <form action="login.php" method="post">
        <input type="text" name="username" value="<?php echo $_POST['username'] ?>" id="username" class="loginDATA" /><br />
        <input type="text" name="passwd" value="<?php echo $_POST['passwd'] ?>" id="passwd" class="loginDATA" /><br />
        <input type="submit" name="login"  value="login" id="BTNLogin" class="btn loginDATA" />
    </form>
</div>
<div class="menu" id="menu">
    <div class="menuBtn btn" id="MenuBTN" onclick="menu()">
        <div class="menuBtnIcon">
            <img src="Images/menu.png" height="100" width="100">
        </div>
        <div class="menuBtnLabel">
            <div class="menuBtnLabelIcon" id="MenuField">
            </div>
        </div>
    </div>
    <div class="menuWindow" id="menuW"
    <form action="all.php" method="post">
        <input type="submit" name="All Items"  value="All Items" id="BTNAllItems" class="btn" />
    </form>
</div>
</div>
</body>
</html>