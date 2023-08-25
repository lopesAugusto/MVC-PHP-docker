<?php

namespace  App\model\crud;

class crud
{
    private static $conexao;
    
    public static function getInstance()
    {
        $host = $_ENV['DB_HOST'];
        $dbname = $_ENV['DB_DATABASE'];
        $user = $_ENV['DB_USERNAME'];
        $pass = $_ENV['DB_PASSWORD'];
        $dsn = "mysql:host=$host;dbname=$dbname";
        $option = array(
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            \PDO::ATTR_EMULATE_PREPARES => false
        ); //required options

        if (is_null(self::$conexao)) {
            try {
                self::$conexao = new \PDO($dsn, $user, $pass, $option);
                self::$conexao->exec("set names utf8"); //setting the encoding

                return self::$conexao;
            } catch (\PDOException $e) {
                echo "conexão erro: = ".$e -> getMessage();
                echo "sem conexão com o banco";
            }
        }
    }
}