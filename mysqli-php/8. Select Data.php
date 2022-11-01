<?php

/**
 * 
 * Select data in a Table
 * 
 * Object-oriented
 * 
 * Select data
 * $sql = "SELECT id, firstname, lastname FROM MyGuests";
 * $conn->query($sql) returns true or false 
 * 
 * if true
 * $result->num_rows for no of rows
 * $row = $result->fetch_assoc() to get all the data by rows
 * 
 * if false
 * $conn->error
 * 
 * Procedural
 * 
 * Select data
 * $sql = "SELECT id, firstname, lastname FROM MyGuests";
 * $result = mysqli_query($conn, $sql); returns true or false
 * 
 * if yes
 * mysqli_num_rows($result) no of rows
 * $row = mysqli_fetch_assoc($result) get all the data by rows
 * 
 * if false
 * mysqli_error($conn)
 * 
 */
