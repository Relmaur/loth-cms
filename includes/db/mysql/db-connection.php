<?php

/* Connect to a MySQL database using driver invocation */
// $dsn = 'mysql:dbname=cms_app;host=localhost';
// $user = 'root';
// $password = 'mangoazul12';

// $connection = new PDO($dsn, $user, $password);

/* Comment this out if SQLite is prefferred */
$db['db_host'] = "localhost";
$db['db_user'] = "root";
// $db['db_pass'] = "mangoazul12";
$db['db_pass'] = "";
$db['db_name'] = "cms_app";

foreach ($db as $key => $value) {
    define(strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// if ($connection) {
//     echo "We are connected";
// }
