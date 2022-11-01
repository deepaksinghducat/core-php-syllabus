<?php

/**
 * 
 * Prepared Statement
 * 
 * Object-oriented
 * 
 * creates a statement
 * $stmt = $mysqli->prepare("SELECT District FROM City WHERE Name=?");
 * 
 * bind parameters
 * $stmt->bind_param("s", $city);
 * The argument may be one of four types:
 * i - integer
 * d - double
 * s - string
 * b - BLOB
 * 
 * execute statement
 * $stmt->execute();
 * 
 * bind result
 * $result = $stmt->get_result();
 * 
 * fetch result
 * $myrow = $result->fetch_assoc();
 * 
 * error
 * $stat->error
 * 
 * close statement
 * $stmt->close();
 * 
 * 
 * Procedural
 * 
 * creates a statement
 * $stmt = mysqli_prepare($conn, "SELECT District FROM City WHERE Name=?");
 * 
 * bind statement
 * mysqli_stmt_bind_param($stmt, "s", $city);
 * 
 * execute statement
 * mysqli_stmt_execute($stmt);
 * 
 * bind result
 * $result = mysqli_stmt_get_result($stmt);
 * 
 * get result
 * $data = mysqli_fetch_assoc($result)
 * 
 * if false
 * mysqli_stmt_errno($stmt)
 * 
 * close statement
 * mysqli_stmt_close($stmt);
 * 
 */
