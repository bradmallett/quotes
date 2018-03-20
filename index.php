<?php


require 'functions.php';

require 'quotes.class.php';


$pdo = ConnectToDb();

$quotes = fetchAllQuotes($pdo);


require 'index.view.php';


