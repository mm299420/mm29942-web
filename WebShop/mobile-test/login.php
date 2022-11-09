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
        h1 {
            float: left !important;
        }
        #loginBTN {
            display: none !important;
        }
        .signup {
            position: relative !important;
            left: 85%;
            top: 1.5em;
        }
        #signupBTN .signupBTN {
            margin-right: 1em !important;
            position: sticky !important;
            display: inline !important;
         }
    </style>
<body id="body">
<h1>Anmelden</h1>
<div class="signup" id="signup">
    <button class="btn signupBTN menuBTNForms" id="signupBTN" onclick="signup()">Sign Up</button>
</div>
<div class="loginDATA" id="loginDATA">
    <?php
        include 'indexClass.php';
        menuBTN();
        menuWindows();

        $unameL = "username";
        $passwdL = "password";

        if ( $_POST['username'] != ""|| $_POST['username'] != null )
        {
            if ( $_POST['username'] != "username")
            {
                $unameB = true;
            }
            $uname = $_POST['username'];
        }

        if ( $_POST['passwd'] != "" || $_POST['passwd'] != null )
        {
            if ( $_POST['passwd'] != "password")
            {
                $passwdB = true;
            }
            $uname = $_POST['passwd'];
        }

        if ( $passwdB && $unameB )
        {
            echo "<form action='index.php' method='post'>";
        } else {
            echo "<form action='mobile-test.php' method='post'>";
        }
        ?>
            <input type="text" name="username" value="<?php echo $unameL ?>" id="username" class="loginDATA" /><br />
            <input type="text" name="passwd" value="<?php echo $passwdL ?>" id="passwd" class="loginDATA" /><br />
            <input type="submit" name="login"  value="login" id="BTNLogin" class="btn loginDATA" />
        </form>
</div>
<?php
/*include 'DataBase.php';
include 'class_DataBase';
DataBase.database();
var_dump(DataBase.inhalt['UserPasswd']);
array_search($userN = 'root');
$user = new DataBase();
echo DataBase.$userN = uname -> $user;/
if ( $passwdL == is_string(DataBase.inhalt['UserPasswd']))*/
?>
</body>
</html>