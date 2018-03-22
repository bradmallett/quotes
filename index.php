<?php

require 'functions.php';

require 'quotes.class.php';

$pdo = ConnectToDb();

$quotes = fetchQuote($pdo);

$photos = fetchPhoto($pdo);

require 'index.view.php';


