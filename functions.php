<?php

function ConnectToDb() {

        try {
            return new PDO('mysql:host=localhost;dbname=baseball','pi', 'raspberry');
        }

        catch (PDOException $e) {
            die($e->getmessage());
        }
    }
   

function fetchAllQuotes($pdo) {

        $statement = $pdo->prepare('SELECT * FROM quotes ORDER BY rand() LIMIT 1');
        
        $statement->execute();
        
        return $statement->fetchAll(PDO::FETCH_CLASS, 'Quotes');
    }


