<?php

/**
 * 
 * Create a Table
 * 
 * Object-oriented
 * 
 * creates a new table
 * $sql = "CREATE TABLE MyGuests ( 
 *   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
 *   firstname VARCHAR(30) NOT NULL, 
 *   lastname VARCHAR(30) NOT NULL, 
 *   email VARCHAR(50),
 *   reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
 * )";
 * $conn->query($sql) returns true or false 
 * 
 * if false
 * $conn->error
 * 
 * Procedural
 * 
 * creates a new table
 * $sql = "CREATE TABLE MyGuests ( 
 *   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
 *   firstname VARCHAR(30) NOT NULL, 
 *   lastname VARCHAR(30) NOT NULL, 
 *   email VARCHAR(50),
 *   reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
 * )";
 * mysqli_query($conn, $sql) returns true or false
 * 
 * if false
 * mysqli_error($conn)
 * 
 */