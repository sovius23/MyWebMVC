<?php


namespace Project\Controllers;


use Project\Models\Calculator;

class CalculatorController extends \Core\Controller
{
    public function calculate(){
        $this->title="Рассчитать дозировку";
        $calculator=new Calculator();
        print_r($calculator->findPreparate(["цефтриаксон"]));
        return $this->render("pages/calculator");

    }


}