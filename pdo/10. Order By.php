<?php

/**
 * 
 * Select data by Order By in a Table
 * 
 * Object-oriented
 * 
 * select data by Order By
 * $sql = "SELECT id, firstname, lastname FROM MyGuests ORDER BY lastname";
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
 * select data by Order By
 * $sql = "SELECT id, firstname, lastname FROM MyGuests ORDER BY lastname";
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
