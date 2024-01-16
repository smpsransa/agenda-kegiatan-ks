<?php
$env = parse_ini_file('.env');
$machine = $env['DB_SERVER'];
$db_name = $env['DB_NAME'];;
$db_user = $env['DB_USER'];
$db_pass = $env['DB_PASS'];;

$db = mysqli_connect($machine, $db_user, $db_pass, $db_name);

if (!$db) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
