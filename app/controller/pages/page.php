<?php

namespace App\controller\pages;

use App\utils\view;
use App\model\entity\entity;

class page
{

  // render header
  private static function getHeader()
    {
      return view::render('header',['diretorio' => entity::$diretorio]);
    }
    
  // render content
  private static function getContent($url)
  {
    $correto = [
      'banco' => entity::getAllQuestion(), //consulta banco
      'diretorio' => entity::$diretorio,
    ];
    return view::render($url, $correto);
  }

  // render footer
  private static function getFooter()
  {
    return view::render('footer');
  }

  // junta todos os metodos para apresentar a pagina
  public static function getPage()
  {
    //array de variaveis do html
    $correto = [ 
      'diretorio' => entity::$diretorio,
      'title' => entity::$title,
      'estilo' => isset($_SERVER['REQUEST_URI'])?$_SERVER['REQUEST_URI']:'inicio',
      'header' => self::getHeader(),
      'content' => self::getContent(isset($_SERVER['REQUEST_URI'])?$_SERVER['REQUEST_URI']:'inicio'), //conteudo dinamico
      'footer' => self::getFooter()
    ];

    return view::render('page', $correto);
  }
}
