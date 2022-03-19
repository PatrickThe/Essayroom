<?php
/*
 * PayPal and database Configuration
 */
 
// PayPal configuration
define('PAYPAL_ID', 'kenbusiniz@gmail.com'); //Business Email
define('PAYPAL_SANDBOX', FALSE); //TRUE or FALSE

define('PAYPAL_RETURN_URL', 'http://localhost/essayfinal/Customer/Functions/success.php');
define('PAYPAL_CANCEL_URL', 'http://localhost/essayfinal/Customer/Functions/cancel.php');
define('PAYPAL_NOTIFY_URL', 'http://localhost/essayfinal/Customer/Functions/ipn.php');
define('PAYPAL_CURRENCY', 'USD');

// Database configuration
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'essayroom');

// Change not required
define('PAYPAL_URL', (PAYPAL_SANDBOX == FALSE)?"https://www.sandbox.paypal.com/cgi-bin/webscr":"https://www.paypal.com/cgi-bin/webscr");