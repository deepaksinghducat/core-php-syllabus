<?php

/**
 * 
 * Get last id after Insert data in a Table
 * 
 * Object-oriented
 * 
 * insert  new data
 * $sql = " INSERT INTO MyGuests ( firstname, lastname, email) VALUES ('John', 'Doe', 'john@example.com')";
 * $conn->query($sql) returns true or false 
 * 
 * if true 
 * $conn->insert_id
 * 
 * if false
 * $conn->error
 * 
 * Procedural
 * 
 * insert  new data
 * $sql = " INSERT INTO MyGuests ( firstname, lastname, email) VALUES ('John', 'Doe', 'john@example.com')";
 * mysqli_query($conn, $sql) returns true or false
 * 
 * if true
 * mysqli_insert_id($conn)
 * 
 * if false
 * mysqli_error($conn)
 * 
 */