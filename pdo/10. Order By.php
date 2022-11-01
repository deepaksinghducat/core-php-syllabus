<?php

/**
 * 
 * Select data by Order By in a Table
 * 
 * Object-oriented
 * 
 * select data by Order By
 * $sql = "SELECT id, firstname, lastname FROM MyGuests ORDER BY lastname";
 * $conn->prepare($sql); 
 * 
 * $stmt->execute() returns true or false 
 * 
 * if true
 * $result = $stmt->fetchAll(PDO::FETCH_ASSOC)
 * 
 */
