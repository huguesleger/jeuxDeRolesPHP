<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Magicien
 *
 * @author Formateur BeWeb
 */
class Magicien extends Personnage{
    //put your code here
    private $mp;
    private $magie;
    
    public function __construct(Race $race) {
        parent::__construct($race);
        $this->mp = 200 + $race->mp;
        $this->magie = 50;
    }

    public function getMp() {
        return $this->mp;
    }

    public function getMagie() {
        return $this->magie;
    }

    public function setMp($mp) {        
        $this->mp = $this->mp + $this->getLvl() + $mp;
    }

    public function setMagie($magie) {
        $this->magie = $magie;
    }
    
    public function attaque(\Personnage $cible) {
        parent::attaque($cible);
        $cible->setPv(-$this->getMagie());
        $this->setMp(-$this->getMagie());
    }


}
