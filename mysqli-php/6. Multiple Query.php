<?php

/**
 * 
 * Multiple Insert data in a Table
 * 
 * Object-oriented
 * 
 * insert  new datas
 *
 * $sql = "INSERT INTO MyGuests (firstname, lastname, email)
 * VALUES ('John', 'Doe', 'john@example.com');";
 * $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
 * VALUES ('Mary', 'Moe', 'mary@example.com');";
 * $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
 * VALUES ('Julie', 'Dooley', 'julie@example.com')";
 * 
 * $conn->multi_query($sql) returns true or false 
 * 
 * if false
 * $conn->error
 * 
 * Procedural
 * 
 * insert  new datas
 * 
 * $sql = "INSERT INTO MyGuests (firstname, lastname, email)
 * VALUES ('John', 'Doe', 'john@example.com');";
 * $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
 * VALUES ('Mary', 'Moe', 'mary@example.com');";
 * $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
 * VALUES ('Julie', 'Dooley', 'julie@example.com')";
 * 
 * mysqli_multi_query($conn, $sql) returns true or false
 * 
 * if false
 * mysqli_error($conn)
 * 
 */
