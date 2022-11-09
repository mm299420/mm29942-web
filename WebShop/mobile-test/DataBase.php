<?php

class DataBase
{
    public $table;
    public $db;
    public $userID;
    public $userN = "username";
    public $passwd = "passwd";
    public $inhalt = array();

    function __construct($userID, $userN, $inhalt, $passwd) {
        $this->userID = $userID;
        $this->inhalt[] = $inhalt;
        $this->passwd = $passwd;
        $this->userN = $userN;
    }

    function get_userID() {
        return $this->userID;
    }
    function get_inhalt() {
        return $this->is_array(inhalt[]);
    }
    function get_passwd() {
        return $this->passwd;
    }
    function get_userN() {
        return $this->userN;
    }

    function database() {
        $dbh = new PDO ("mysql:dbname=webshop; host=localhost", "webshop", "AkJ3342198873!#1337*C0D3;");

        include 'login.php';
        $sql = "select * from mobile-test where UserName=".'$userN';
        $inhalt[] = $dbh->query($sql);
        $passwd = $inhalt['UserPasswd'];
    }
}