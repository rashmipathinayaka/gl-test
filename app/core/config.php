<?php

if($_SERVER['SERVER_NAME'] == 'localhost'){
    define('DBNAME','green_lease');
    define('DBHOST','localhost');
    define('DBUSER','root');
    define('DBPASS','123');
    
    define('ROOT','http://localhost/gl/public');
}
else{
    define('ROOT','https://www.gl.lk');
}

define ('APP_NAME',"My website");
define('APP_DESC',"MY WEBISTESDS");

define('DEBUG', true);