<?php
/*
PayGol Module for osCommerce
*/
function url(){
  return sprintf(
	"%s://%s%s",
	isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http', $_SERVER['SERVER_NAME'], $_SERVER['REQUEST_URI'] );
}	
$url1		= 	(basename (dirname($_SERVER['PHP_SELF']),"/"));  // folder admin 
$url2		=	url(); // url
$url3   	= 	strpos($url2, $url1); // nro
$url4  		= 	substr($url2, 0,$url3);
$url_ipn 	= 	$url4."ext/modules/payment/paygol/paygol-ipn.php";	
define('MODULE_PAYMENT_PAYGOL_TEXT_TITLE', 'Paygol');
define('MODULE_PAYMENT_PAYGOL_TEXT_PUBLIC_TITLE', 'Paygol');
define('MODULE_PAYMENT_PAYGOL_TEXT_DESCRIPTION', '<strong>Paygol Details:</strong></br><img src="images/icon_popup.gif" border="0">&nbsp;<a href="http://www.paygol.com" target="_blank" style="text-decoration: underline; font-weight: bold;">Visit Paygol Website</a><br><br><br><img src="images/icon_save.gif" border="0"><strong> IPN URL:</strong><br><br> '.$url_ipn.'<br><br>');
define('MODULE_PAYMENT_PAYGOL_ID_TITLE' , 'ID Service');
define('MODULE_PAYMENT_PAYGOL_KEY_TITLE' , 'Secret Key');
define('MODULE_PAYMENT_PAYGOL_ACTIVATE_TITLE' , 'Enable Paygol Module.');
define('MODULE_PAYMENT_PAYGOL_ACTIVATE_DETA' , 'Do you want to accept Paygol payments?');
define('MODULE_PAYMENT_PAYGOL_STATUS_C' , 'Completed');
?>