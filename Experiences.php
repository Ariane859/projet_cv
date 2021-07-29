<?php
    class Experiences
    {
        private $post;
        private $employeur;
        private $vil;
        private $datedebu;
        private $datefin;
        private $descriptio;

        public function __construct($post,$empoyeur,$vil,$datedebu,$datefin,$descriptio)
    {
        $this->post = $post;
        $this->employeur = $employeur;
        $this->vil = $vil;
        $this->datedebu = $datedebu;
        $this->datefin = $datefin;
        $this->descriptio = $descriptio;
    }
    public function getPost()
    {
        return $this->post;
    }
    public function setPost($post)
    {
        $this->post=$post;
    }
    public function getEmployeur()
    {
        return $this->employeur;
    }
    public function setEmployeur($employeur)
    {
        $this->employeur=$employeur;
    }
    public function getVil()
    {
        return $this->vil;
    }
    public function setVil($vil)
    {
        $this->vil=$vil;
    }
    public function getDatedebu()
    {
        return $this->datedebu;
    }
    public function setDatedebu($datedebu)
    {
        $this->datedebu=$datedebu;
    }
    public function getDatefin()
    {
        return $this->datefin;
    }
    public function setDatefin($datefin)
    {
        $this->datefin=$datefin;
    }
     public function getDescriptio()
    {
        return $this->descriptio;
    }
    public function setDescriptio($descriptio)
    {
        $this->descriptio=$descriptio;
    }
    }
?>

