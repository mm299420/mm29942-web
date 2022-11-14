<?php
    function connectDB() {
        include 'Objects/ContactTicket.php';
        $sql = "insert into contact (Category, Date, TimeBeginn, TimeEnd, mail) values($newParty->VeranstaltungsDatum, $newParty->VeranstaltungsDatum, $newParty->VeranstaltungsDauerBeginn, $newParty->VeranstaltungsDauerEnd, $newParty->VeranstaltungsMail)";
        try {
            $dbh = new PDO("mysql:host=localhost;dbname=npropj", "root", "");
            $rueckgabe = $dbh->query($sql);
            $ergebnis = $rueckgabe->fetchAll(PDO::FETCH_ASSOC);
            foreach ($ergebnis as $inhalt){
                echo ("<br />Inhalt der Zelle: ".$inhalt['formid']);
            }
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
