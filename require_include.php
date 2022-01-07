<?php

include 'db_connect.php';
require 'db_connect.php';

include 'db_connect1.php';
require 'db_connect1.php';


// difference
// if we include a file which is not present in the folder the include will throw a warning which is not fatal
// whereas in require it will be fatal as the file which is mentioned is required and its important

// this will allow us to reuse the code of the connection of he $database

?>