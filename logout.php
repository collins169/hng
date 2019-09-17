<?php
SESSION_START();

$_SESSION = array();
session_destroy();

//redirect to the login page using php built-in header method
header("Location: index.html");
//replace the index.html with the login page URL
