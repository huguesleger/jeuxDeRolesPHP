<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include './personnage/Personnage.php';
include './personnage/Magicien.php';
include './personnage/Guerrier.php';
include './personnage/Race.php';
include './personnage/Elfe.php';
include './personnage/Orc.php';

$mago = new Magicien(new Elfe());
$momo = new Guerrier(new Orc());

$mago->setNom('Mago');
$momo->setNom('Maurice');

echo 'Round 1 <br>';
echo 'Mago : '.$mago->getPv().' - Momo : '.$momo->getPv().'<br>';
$mago->attaque($momo);
echo 'Mago : '.$mago->getPv().' - Momo : '.$momo->getPv().'<br>';
$mago->attaque($momo);
echo 'Mago : '.$mago->getPv().' - Momo : '.$momo->getPv().'<br>';
$momo->attaque($mago);
echo 'Mago : '.$mago->getPv().' - Momo : '.$momo->getPv().'<br>';
$momo->attaque($momo);
echo 'Mago : '.$mago->getPv().' - Momo : '.$momo->getPv().'<br>';
$mago->attaque($momo);
echo 'Mago : '.$mago->getPv().' - Momo : '.$momo->getPv().'<br>';


var_dump($mago,$momo);

$mago->setMp(100);
