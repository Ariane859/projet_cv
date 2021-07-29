<?php
class MaclassCV
{   private $photo;
    private $prenom;
    private $nom;
    private $poste;
    private $email;
    private $numero;
    private $adresse;
    private $postal;
    private $ville;

    public function __construct($photo,$prenom,$nom,$poste,$email,$numero,$adresse,$postal,$ville)
    {
        $this->photo = $photo;
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->poste = $poste;
        $this->email = $email;
        $this->numero = $numero;
        $this->adresse = $adresse;
        $this->postal = $postal;
        $this->ville = $ville;
    }

    public function getPhoto()
    {
        return $this->photo;
    }
    public function setPhoto($photo)
    {
        $this->photo=$photo;
    }
    public function getPrenom()
    {
        return $this->nom;
    }
    public function setPrenom($prenom)
    {
        $this->nom=$nom;
    }
    public function getNom()
    {
        return $this->prenom;
    }
    public function setNom($nom)
    {
        $this->prenom=$prenom;
    }
    public function getPoste()
    {
        return $this->poste;
    }
    public function setPoste($poste)
    {
        $this->poste=$poste;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email=$email;
    }
    public function getNumero()
    {
        return $this->numero;
    }
    public function setNumero($numero)
    {
        $this->numero=$numero;
    }
    public function getAdresse()
    {
        return $this->adresse;
    }
    public function setAdresse($adresse)
    {
        $this->adresse=$adresse;
    }
    public function getPostal()
    {
        return $this->postal;
    }
    public function setPostal($postal)
    {
        $this->postal=$postal;
    }
    public function getVille()
    {
        return $this->ville;
    }
    public function setVille($ville)
    {
        $this->ville=$ville;
    }
    public function Afficher()
    {
        echo 'Les points de coordonnées ( '.$this->nom. ' ; '.$this->prenom.' )';
    }
}
?>