<?php
echo phpinfo(); die;
?>
// Starting session
//session_start();
 
// Destroying session
//session_destroy();


session_id("MySession");
session_start();
print "My session ID is: " . session_id();
session_destroy();
if(session_status() !== PHP_SESSION_ACTIVE) session_start();
?>
`