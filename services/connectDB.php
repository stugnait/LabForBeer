<?php

ini_set( 'error_reporting', E_ALL );
ini_set( 'display_errors', true );

global $config;
include 'config.php';


$lfb_connection = mysqli_connect(
    $config['db']['server'],
    $config['db']['username'],
    $config['db']['password'],
    $config['db']['lfb_name']
);

if (!$lfb_connection) {
    die("Connection failed: " . mysqli_connect_error());
}