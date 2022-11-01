<?php

/**
 * 
 * Delete data  in a Table
 * 
 * Object-oriented
 * 
 * delete data
 * $sql = "DELETE FROM MyGuests WHERE id=3";
 * $conn->query($sql) returns true or false 
 * 
 * if true
 * data is deleted successfully
 * 
 * if false
 * $conn->error
 * 
 * Procedural
 * 
 * delete data
 * $sql = "DELETE FROM MyGuests WHERE id=3";
 * $result = mysqli_query($conn, $sql); returns true or false
 * 
 * if yes
 * data is deleted successfully
 * 
 * if false
 * mysqli_error($conn)
 * 
 */
