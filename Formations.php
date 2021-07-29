<?php
    class Formations
    {
        private $diplome;
        private $etablissement;
        private $vill;
        private $datedebut;
        private $datefin;
        private $descrip;

        public function __construct($diplome,$etablissement,$vill,$datedebut,$datefin,$descrip)
    {
        $this->diplome = $diplome;
        $this->etablissement = $etablissement;
        $this->vill = $vill;
        $this->datedebut = $datedebut;
        $this->datefin = $datefin;
        $this->descrip = $descrip;
    }
    public function getDiplome()
    {
        return $this->diplome;
    }
    public function setDiplome($diplome)
    {
        $this->diplome=$diplome;
    }
    public function getEtablissement()
    {
        return $this->etablissement;
    }
    public function setEtablissement($etablissement)
    {
        $this->etablissement=$etablissement;
    }
    public function getVill()
    {
        return $this->vill;
    }
    public function setVill($vill)
    {
        $this->vill=$vill;
    }
    public function getDatedebut()
    {
        return $this->datedebut;
    }
    public function setDatedebut($datedebut)
    {
        $this->datedebut=$datedebut;
    }
    public function getDatefin()
    {
        return $this->datefin;
    }
    public function setDatefin($datefin)
    {
        $this->datefin=$datefin;
    }
    public function getDescrip()
    {
        return $this->descrip;
    }
    public function setDescrip($descrip)
    {
        $this->descrip=$descrip;
    }
    }
?>

