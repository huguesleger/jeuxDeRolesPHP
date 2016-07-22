<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Personnage
 *
 * @author Formateur BeWeb
 */
/*@var $race Race*/
class Personnage {
    //put your code here
    private $ID;
    private $nom;
    private $pv;
    private $xp;
    private $lvl;
    
    public $race;
    
    public function __construct(Race $race) {
        $this->race = $race;
        $this->lvl = 1;
        $this->xp = 0;
        $this->pv = 100 + $this->race->pv;
    }

    
    public function getNom() {
        return $this->nom;
    }

    public function getPv() {
        return $this->pv;
    }

    public function getXp() {
        return $this->xp;
    }

    public function getLvl() {
        return $this->lvl;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setPv($pv) {
        $this->pv = $this->pv + $pv;
    }

    public function setXp($xp) {
        $this->xp = $xp;
    }

    public function setLvl($lvl) {
        $this->lvl = $lvl;
    }

    public function attaque(Personnage $cible){
        echo $this->getNom().' attaque '.$cible->getNom().'<br>';
    }
}
