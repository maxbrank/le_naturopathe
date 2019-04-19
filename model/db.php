<?php

include (__DIR__."/../app/config.php");

function connect()
{
    $dbname = DB_NAME;
    $user = DB_LOGIN;
    $psd = DB_PWD;
    $options = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'); // on s'assure que l'on respecte les caractères, les accents etc utf-8
    try {
        $database = new PDO("mysql:host=localhost;dbname=$dbname", $user, $psd, $options);
        return $database;
    } catch (Exception $err) {            // catch se lance que si on rencontre un pb dans le try
        echo "Erreur:" . $err->getMessage() . "</br>";
    }
}