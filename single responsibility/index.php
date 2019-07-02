<?php 
$logger = new Logger();
//$user = new User();
$user = new User($logger);//dependency injection

$user->create(array());