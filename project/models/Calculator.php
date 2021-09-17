<?php


namespace Project\Models;


class Calculator extends \Core\Model
{
    public function findPreparate($prepName){
        $query="SELECT * FROM `preparates` WHERE preps=? LIMIT 1";
        return $this->query($query,$prepName)[0];
    }
}