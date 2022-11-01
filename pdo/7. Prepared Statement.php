<?php

/**
 * 
 * Prepared Statement
 * 
 * Object-oriented
 * 
 * creates a statement
 * $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email)  VALUES (:firstname, :lastname, :email)");
 * 
 * bind parameters
 *  $stmt->bindParam(':firstname', $firstname);
 *  $stmt->bindParam(':lastname', $lastname);
 *  $stmt->bindParam(':email', $email);
 * 
 * execute statement
 * $stmt->execute();
 * 
 * fetch result
 * $myrow = $stmt->fetchAll();
 * 
 * 
 */
