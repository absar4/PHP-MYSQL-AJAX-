<?php
class Database
{
    public function getConn()
    {

        $db_host = "localhost";
        $db_name = "cms";
        $db_user = "ali23";
        $db_password = "R4y2Je4Hi*fWMWSN";

        $dsn = 'mysql:host=' . $db_host . ';dbname=' . $db_name . ';charset=utf8';

        try {
            $db = new PDO($dsn, $db_user, $db_password);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
        } catch (PDOException $e) {
            echo $e->getMessage();
            exit;
        }

    }
}
