<?php
$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = '';
$DB_DATABASE = 'contacts';


$con = mysqli_connect($DB_HOST,$DB_USER,$DB_PASS,$DB_DATABASE);
if(!$con){
    echo 'error unable to connect to database';
}