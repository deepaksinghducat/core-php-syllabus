<?php

/**
 * 
 * Update data in a Table
 * 
 * Object-oriented
 * 
 * Update new data
 * $sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";
 * $conn->query($sql) returns true or false 
 * 
 * if true 
 * data is updated
 * 
 * if false
 * $conn->error
 * 
 * Procedural
 * 
 * update new data
 * $sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";
 * mysqli_query($conn, $sql) returns true or false
 * 
 * if true 
 * data is updated
 * 
 * if false
 * mysqli_error($conn)
 * 
 */
