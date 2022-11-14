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
    <?php
        $value = 1;
        error_reporting(0);
        session_start();
    ?>
    <div id="greetings" class="welcome">
        <h1 class="header">Contact Formular!</h1>
        <?php
        include_once 'templates/elements.php';
        menuBTN();
        menuWindows();

        if (!isset($_SESSION['visited'])) {
            echo 'erster Besuch!';
            $_SESSION['visited'] = true;
        } else {
            include 'Objects/ContactTicket.php';
            include 'Templates/db.php';
            $newParty = new ContactTicket();
            $newParty->setVeranstaltungsID($_POST['Title']);
            $newParty->setVeranstaltungsMail($_POST['Mail']);
            $newParty->setVeranstaltungsCategory($_POST['Category']);
            $newParty->setVeranstaltungsDatum($_POST['Date']);
            $newParty->setVeranstalterName($_POST['Name']);
            $newParty->setVeranstaltungsOrt($_POST['Ort']);
            $newParty->setVeranstaltungsDauerBeginn($_POST['start']);
            $newParty->setVeranstaltungsDauerEnd($_POST['end']);

            $sql = "insert into contact (Category, Date, TimeBeginn, TimeEnd, Mail)".
            "values(".$newParty->VeranstaltungsDatum.", "
                .$newParty->VeranstaltungsDatum.", "
                .$newParty->VeranstaltungsMail.", "
                .$newParty->VeranstaltungsDauerBeginn.","
                .$newParty->VeranstaltungsDauerEnd.")";
            try {
                $dbh = new PDO("mysql:host=localhost;dbname=npropj", "root", "");
                $rueckgabe = $dbh->query($sql);
                $error = $dbh->errorInfo();
                if ($error[0]>0) {
                    print "<br />Fehlercode: ".$error[0];
                }
                $dbh = null;
            }
            catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
        ?>
    </div>
    <form method="post" action="contact.php">
        <input type="text" placeholder="Max Mustermann" name="Name" class="dbInput" id="dbName" value="<?php echo $newParty->VeranstalterName ?>">
        <input type="text" placeholder="max.muster@mail.de" name="Mail" class="dbInput" id="dbMail" value="<?php echo $newParty->VeranstaltungsMail ?>">
        <input type="text" placeholder="Party Title" name="Title" class="dbInput" id="dbTitle" value="<?php echo $newParty->VeranstaltungsID ?>">
        <input type="text" placeholder="Party Category" name="Category" class="dbInput" id="dbCategory" value="<?php echo $newParty->VeranstaltungsCategory ?>"><br />
        <input type="text" placeholder="Party Ort" name="Ort" class="dbInput" id="dbOrt" value="<?php echo $newParty->VeranstaltungsOrt ?>">
        <input type="date" placeholder="2023-01-01" name="Date" class="dbInput" id="dbDate" value="<?php echo $newParty->VeranstaltungsDatum ?>">
        <input type="text" placeholder="Party Beginn" name="start" class="dbInput" id="dbStart" value="<?php echo $newParty->VeranstaltungsDauerBeginn ?>">
        <input type="text" placeholder="Party End" name="end" class="dbInput" id="dbEnd" value="<?php echo $newParty->VeranstaltungsDauerEnd ?>"><br />
        <input type="submit" name="submit" class="dbInput" id="dbButton"">
    </form>
</div>
</body>
</html>
