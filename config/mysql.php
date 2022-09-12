<?php

const MYSQL_HOST = 'carolebarbier.com';
const MYSQL_PORT = 3306;
const MYSQL_NAME = 'lzfw2493_blogRecettes';
const MYSQL_CHARSET = 'utf8';
const MYSQL_USER = 'lzfw2493_ChaLolCar';
const MYSQL_PASSWORD = 'phpMysql2022';
// const rootUrl = 'http://localhost/recettesAuxOeufs/';

try {
    $mysqlClient = new PDO(
        sprintf('mysql:host=%s;dbname=%s;port=%s;charset=%s', MYSQL_HOST, MYSQL_NAME, MYSQL_PORT,MYSQL_CHARSET),
        MYSQL_USER,
        MYSQL_PASSWORD
    );
    $mysqlClient->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $exception) {
    die('Erreur : '.$e->getMessage());
}