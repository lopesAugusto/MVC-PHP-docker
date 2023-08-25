<?php

namespace App\model\entity;

use App\model\crud\crud;

//usado para armazenar valores
class entity{
    public static $title         = "titulo exemplo";
    public static $diretorio     = 'app/resources/view/pages/'; //no site coloca o host antes do app

    public static function getAllQuestion()
    {
        $apresent ='';

        // ver erro na tabela
        try {
            $dado = crud::getInstance()->query('SELECT * FROM quest_enem');

            // busca no banco de dados o comando da linha acima
            while ($linha = $dado->fetch(\PDO::FETCH_ASSOC)) {
                $apresent .= "Tema: {$linha['tema']} <br/>
                    Disciplina: {$linha['disciplina']}<br/><br/>
                    {$linha['pergunta']}<br/>
                    {$linha['opcoes_de_resposta_a']}<br/>
                    {$linha['opcoes_de_resposta_b']}<br/>
                    {$linha['opcoes_de_resposta_c']}<br/>
                    {$linha['opcoes_de_resposta_d']}<br/>
                    <br/><br/>"
                ;
            };
            
            return $apresent;
        }
        catch (\PDOException $e){

            $apresent = "tabela erro: = ".$e -> getMessage();
            return $apresent;
        }
        $dado = null;    
    }
}