<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Guerrier
 *
 * @author Formateur BeWeb
 */
class Guerrier extends Personnage{
    //put your code here
    private $force;
    
    public function __construct(Race $race) {
        parent::__construct($race);
        $this->force = 30;
        //créé avec le double de pv
        $this->setPv($this->getPv()*2);
    }
    
    public function getForce() {
        return $this->force;
    }

    public function setForce($force) {
        $this->force = $force;
    }

    public function attaque(\Personnage $cible) {
        parent::attaque($cible);
        $cible->setPv(-$this->getForce());
    }

}
