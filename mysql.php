<?php
$servername = "localhost";
$username = 'root';
$password = '';
$dbname = 'master_system';

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){die("".$conn->connect_error);}
