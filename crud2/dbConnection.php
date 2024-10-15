<?php
$databaseHost = 'localhost';
$databaseName = 'test';
$databaseUsername = 'user1';
$databasePassword = 'user';

// Open a new connection to the MySQL server
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
