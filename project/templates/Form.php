<?php


namespace Project\templates;


class Form
{
    public static function startForm($action, $method,$id="form")
    {
        echo sprintf('<form action="%s" method="%s" id="%s">', $action, $method,$id);

    }

    public static function endForm()
    {
        echo "<p id='out'></p>";
        echo "</form>";
    }
    public static function setInput($type,$name,$class="",$placeholder="Input"){
        echo sprintf('<input type="%s" name="%s" class="%s" placeholder="%s"></br>',$type,$name,$class,$placeholder);
    }

}