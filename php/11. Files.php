<?php

/**
 * PHP Manipulating Files
 * 
 * PHP has several functions for creating, reading, uploading, and editing files.
 * 
 * PHP File Open/Read/Close
 * 
 * PHP Open File - fopen()
 * 
 * Modes
 * 
 * r	Open a file for read only. File pointer starts at the beginning of the file
 * w	Open a file for write only. Erases the contents of the file or creates a new file if it doesn't exist. 
 *      File pointer starts at the beginning of the file
 * a	Open a file for write only. The existing data in file is preserved. 
 *      File pointer starts at the end of the file. Creates a new file if the file doesn't exist
 * x	Creates a new file for write only. Returns FALSE and an error if file already exists
 * r+	Open a file for read/write. File pointer starts at the beginning of the file
 * w+	Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist. 
 *      File pointer starts at the beginning of the file
 * a+	Open a file for read/write. The existing data in file is preserved. File pointer starts at the end of the file. 
 *      Creates a new file if the file doesn't exist
 * x+	Creates a new file for read/write. Returns FALSE and an error if file already exists
 * 
 * PHP Read File - fread()
 * 
 * PHP Close File - fclose()
 * 
 * PHP Read Single Line - fgets()
 * 
 * PHP Check End-Of-File - feof()
 * 
 * PHP Read Single Character - fgetc()
 * 
 * 
 * PHP Write to File - fwrite()
 * 
 * PHP Overwriting File
 * 
 * PHP Append Text
 */