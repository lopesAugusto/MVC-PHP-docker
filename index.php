<?php
use App\controller\pages\home;
require __DIR__.'/vendor/autoload.php';

// abre a variavel de ambiente
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// para exibir os erros
ini_set('display_errors', 1);
error_reporting(E_ALL);

echo home::getHome();

?>