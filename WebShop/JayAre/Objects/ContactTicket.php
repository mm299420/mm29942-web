<?php

class ContactTicket
{
    public $VeranstaltungsID;
    public $VeranstaltungsCategory;
    public $VeranstaltungsDatum;
    public $VeranstalterName;
    public $VeranstaltungsOrt;
    public $VeranstaltungsDauerBeginn;
    public $VeranstaltungsDauerEnd;
    public $VeranstaltungsMail;

    public function setVeranstaltungsID($ID) {
        $this->VeranstaltungsID=$ID;
    }
    public function setVeranstaltungsDatum($Datum) {
        $this->VeranstaltungsDatum=$Datum;
    }
    public function setVeranstaltungsCategory($Category) {
        $this->VeranstaltungsCategory=$Category;
    }
    public function setVeranstalterName($Name) {
        $this->VeranstalterName=$Name;
    }
    public function setVeranstaltungsOrt($Ort) {
        $this->VeranstaltungsOrt=$Ort;
    }
    public function setVeranstaltungsDauerBeginn($std) {
        $this->VeranstaltungsDauerBeginn=$std;
    }
    public function setVeranstaltungsDauerEnd($std) {
        $this->VeranstaltungsDauerEnd=$std;
    }
    public function setVeranstaltungsMail($Mail) {
        $this->VeranstaltungsMail=$Mail;
    }
}