<?php

class UserMilanLukes {
    // atributy
    private $vekPrivateMilanLukes;
    private $znameniPrivateMilanLukes;
    protected $vekProtectedMilanLukes;
    protected $znameniProtectedMilanLukes;
    protected $vyskaProtectedMilanLukes;
    public $znameniPublicMilanLukes = "Kozoroh";
    public $vyskaPublicMilanLukes = 177;
    public $vekPublicMilanLukes = 17;
    public $pohlaviPublicMilanLukes = "muz";
    public $mesicPublicMilanLukes = "leden";

    // konstruktor
    function __construct(){

    }
    // soukroma metoda
    function setVekPrivateMilanLukes($vekPrivateMilanLukes){
        return $vekPrivateMilanLukes;
    }
    function setZnameniPrivateMilanLukes($znameniPrivateMilanLukes){
        return $znameniPrivateMilanLukes;
    }
    // verejna metoda
    function getZnameniPublicMilanLukes(){
        return $this->znameniPublicMilanLukes;
    }
    function getVyskaPublicMilanLukes(){
        return $this->vyskaPublicMilanLukes;
    }
    function getVekPublicMilanLukes(){
        return $this->vekPublicMilanLukes;
    }
    function getPohlaviPublicMilanLukes(){
        return $this->pohlaviPublicMilanLukes;
    }
    function getMesicPublicMilanLukes(){
        return $this->mesicPublicMilanLukes;
    }
}
// instancovani
$UserMilanLukes = new UserMilanLukes;
echo "<br>";
echo $UserMilanLukes->setVekPrivateMilanLukes(19);
echo "<br>";
echo $UserMilanLukes->setZnameniPrivateMilanLukes("Byk");
echo "<br>";
echo $UserMilanLukes->getZnameniPublicMilanLukes();
echo "<br>";
echo $UserMilanLukes->getVyskaPublicMilanLukes();
echo "<br>";
echo $UserMilanLukes->getVekPublicMilanLukes();
echo "<br>";
echo $UserMilanLukes->getPohlaviPublicMilanLukes();
echo "<br>";
echo $UserMilanLukes->getMesicPublicMilanLukes();
echo "<br>";
// cela class
var_dump($UserMilanLukes);
?>

