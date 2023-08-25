<?php

namespace App\controller\pages;

class home extends page{

    // retorna parinas renderizadas no metodo page
    public static function getHome(){
        return parent::getPage();
    }
}