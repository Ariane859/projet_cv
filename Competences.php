<?php
class Competences
{   private $competence;

    public function __construct($competence)
    {
        $this->competence = $competence;
    }
    public function getComptence()
    {
        return $this->competence;
    }
    public function setCompetence($competence)
    {
        $this->competence=$competence;
    }
}
?>