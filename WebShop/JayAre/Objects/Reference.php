<?php

class Reference
{
    public $VeranstaltungsDatum;
    public $VeranstaltungsName;
    public $Veranstalter;
    public $VeranstaltungsOrt;

    public function setVeranstaltungsDatum($Datum) {
        $this->VeranstaltungsDatum=$Datum;
    }
    public function setVeranstaltungsName($Name) {
        $this->VeranstaltungsName=$Name;
    }
    public function setVeranstalter($Name) {
        $this->Veranstalter=$Name;
    }
    public function setVeranstaltungsOrt($Ort) {
        $this->VeranstaltungsOrt=$Ort;
    }
}