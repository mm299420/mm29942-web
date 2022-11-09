<?php

class ContactTicket
{
    public $VeranstaltungsTyp;
    public $VeranstaltungsDatum;
    public $NameVeranstalter;
    public $VeranstaltungsOrt;
    public $VeranstaltungsDauer;
    public $VeranstaltungsOptionSetup;

    public function setVeranstaltungsDatum($Datum) {
        $this->VeranstaltungsDatum=$Datum;
    }
    public function setVeranstaltungsTyp($Typ) {
        $this->VeranstaltungsTyp=$Typ;
    }
    public function setNameVeranstalter($Name) {
        $this->NameVeranstalter=$Name;
    }
    public function setVeranstaltungsOrt($Ort) {
        $this->VeranstaltungsOrt=$Ort;
    }
    public function setVeranstaltungsDauer($std) {
        $this->VeranstaltungsDauer=$std;
    }
    public function setVeranstaltungsOptionSetup($choice) {
        $this->VeranstaltungsOptionSetup=$choice;
    }
}