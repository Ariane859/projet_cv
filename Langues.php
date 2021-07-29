<?php
class Langues
{   private $langue;
    private $niveau;

    public function __construct($langue,$niveau)
    {
        $this->langue = $langue;
        $this->niveau = $niveau;
    }
    public function getLangue()
    {
        return $this->langue;
    }
    public function setLangue($langue)
    {
        $this->langue=$langue;
    }
    public function getNiveau()
    {
        return $this->niveau;
    }
    public function setNiveau($niveau)
    {
        $this->niveau=$niveau;
    }
}
?>