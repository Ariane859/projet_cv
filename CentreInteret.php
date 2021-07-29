<?php
class CentreInteret
{   private $centreInteret;

    public function __construct($centreInteret)
    {
        $this->centreInteret = $centreInteret;
    }
    public function getCentreInteret()
    {
        return $this->centreInteret;
    }
    public function setCentreInteret($centreInteret)
    {
        $this->centreInteret=$centreInteret;
    }
}
?>