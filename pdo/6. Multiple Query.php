<?php

/**
 * 
 * Multiple Insert data in a Table
 * 
 * Object-oriented
 * 
 * insert  new datas
 *
 * begin the transaction
 * $conn->beginTransaction();
 * 
 * $sql = "INSERT INTO MyGuests (firstname, lastname, email)
 * VALUES ('John', 'Doe', 'john@example.com');";
 * 
 * $conn->exec($sql);
 * 
 * $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
 * VALUES ('Mary', 'Moe', 'mary@example.com');";
 * 
 * $conn->exec($sql);
 * 
 * $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
 * VALUES ('Julie', 'Dooley', 'julie@example.com')";
 * 
 * $conn->exec($sql);
 * 
 * $conn->commit();
 * 
 * if any error occur
 * 
 * $conn->rollback() 
 * 
 * 
 */
