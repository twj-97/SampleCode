<?php

// function to retrieve account results

function getAccount($accountID) {
    global $db;
    
    try {
        $query = 
            'SELECT * FROM accounts ' . 
            'INNER JOIN personalInfo ON (accounts.personID = personalInfo.ID)' .
            'WHERE accounts.personID = ?';
        $stmt = $db->prepare($query);
        // binding account ID
        $stmt->bindParam(1, $accountID);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    } catch(Exception $e) {
        throw $e;
    }
}

// function to retrieve messages

function getMessages($accountID) {
    global $db;
    
    try {
        $query = 
            'SELECT * FROM messages WHERE personID = ?';
        $stmt = $db->prepare($query);
        // binding account ID
        $stmt->bindParam(1, $accountID);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch(Exception $e) {
        throw $e;
    }
}