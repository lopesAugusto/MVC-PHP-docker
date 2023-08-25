<?php

namespace App\utils;

class view{

    // verifica se o arquivo existe
    private static function getContentView($view){
        $file= __DIR__.'/../resources/view/pages/'.$view.'.html';
        $erro= __DIR__.'/../resources/view/pages/inicio.html';

        return file_exists($file) ? file_get_contents($file) :  file_get_contents($erro);
    }

    // coloca o nome do documento que vai apresentar, array de {{variavel}} => valor
    public static function render($view, $vars = []){
        $contentView = self::getContentView($view);

        //chaves conversão de array de variaveis
        $keys = array_keys($vars);
        $keys = array_map(function($item){
            return '{{'.$item.'}}';
        },$keys);

        // retorna o conteudo das array e o arquivo
        return str_replace($keys,array_values($vars),$contentView);
    }
}