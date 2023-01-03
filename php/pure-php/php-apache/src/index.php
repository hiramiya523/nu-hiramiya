<?php
$s_test = 'test';
var_dump($s_test);

$dsn = 'mysql:host=localhost;dbname=mysql;';
try{
    new PDO($dsn, 'user', 'pass',  [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ]);

    phpinfo();

}catch(Exception $e){
    var_dump($e);
}
