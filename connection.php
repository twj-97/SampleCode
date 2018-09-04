<?php

// connection to the database
ini_set('display_errors', 'On');

try {
    $db = new PDO('mysql:host=......;dbname=......', /* USERNAME */, /* PASSWORD */);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e) {
    echo 'Error connecting to the Database: ' . $e->getMessage();
    exit;
}