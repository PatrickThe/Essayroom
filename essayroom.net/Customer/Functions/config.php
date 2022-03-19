<?php
/*
 * PayPal and database Configuration
 */
 
// PayPal configuration
define('PAYPAL_ID', 'kenbusiniz@gmail.com'); //Business Email
define('PAYPAL_SANDBOX', TRUE); //TRUE or FALSE

define('PAYPAL_RETURN_URL', 'https://essayroom.net/Customer/Functions/success.php');
define('PAYPAL_CANCEL_URL', 'https://essayroom.net/Customer/Functions/cancel.php');
define('PAYPAL_NOTIFY_URL', 'https://essayroom.net/Customer/Functions/ipn.php');
define('PAYPAL_CURRENCY', 'USD');

// Database configuration
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'essayroo_root');
define('DB_PASSWORD', '.xSDS1we5D3v5!');
define('DB_NAME', 'essayroo_essayroom');

// Change not required
define('PAYPAL_URL', (PAYPAL_SANDBOX == true)?"https://www.sandbox.paypal.com/cgi-bin/webscr":"https://www.paypal.com/cgi-bin/webscr");