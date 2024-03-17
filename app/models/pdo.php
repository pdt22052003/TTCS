<?php
/**
 * Mở kết nối đến CSDL sử dụng PDO
 */
define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBNAME', 'web_thi');
function pdo_get_connection(){
    $conn = new PDO('mysql:host='.DBHOST.';dbname='.DBNAME,DBUSER,DBPASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
}