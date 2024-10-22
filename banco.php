<?php 

class Banco
{
    private static $dbnome ='db_aula0110';
    private static $dbHost ='localhost';
    private static $dbUsuario ='root';
    private static $dbPassword = '';
    private static $cont = null;


    public function __construct()
    {
        die("A função Init não é permitido!");
    }
        public static function conectar()
    {
        if(null == self::$cont)
        {
            try
            {
                self::$cont = new PDO("mysql:host=".self::$dbHost.";"."dbname=".self::$dbnome, self::$dbUsuario, self::$dbPassword);

            }
            catch(PDOException $exception)
            {
                die($exception->getMessage());
            }
        }
        return self::$cont;
    }
    public static function desconectar()
    {
        self::$cont = null;
    }

}

?>