<?php
	chdir('../../../../');
	require('includes/application_top.php');
	
	// Secret key validation
	$secret_key	=$_GET['key'];
	$key_validate = tep_db_query("SELECT configuration_value, configuration_key  FROM " . TABLE_CONFIGURATION . " WHERE configuration_key='MODULE_PAYMENT_PAYGOL_SERVICE_KEY' AND configuration_value = '".$secret_key."' ");
	$key_result = tep_db_fetch_array($key_validate);
	$keyresult = $key_result['configuration_value'];
	if ($keyresult != $secret_key) {
		echo "Validation error";
		exit;
	}
	
	//get form paygol
	$service_id	   = $_GET['service_id']; 
	$message_id	   = $_GET['message_id'];
	$shortcode	   = $_GET['shortcode'];
	$keyword	   = $_GET['keyword'];
	$message	   = $_GET['message'];
	$sender		   = $_GET['sender'];
	$operator	   = $_GET['operator'];
	$country	   = $_GET['country'];
	$custom		   = $_GET['custom'];
	$points		   = $_GET['points'];
	$price		   = $_GET['price'];
	$currency 	   = $_GET['currency'];
	$frmcurrency   = $_GET['frmcurrency'];
	$method 	   = $_GET['method'];
	$frmprice	   = $_GET['frmprice'];
	$indexes        = explode(";", $custom);
	$customer_id    = $indexes[0]; 
	$order_total_id = $indexes[1]; 
	$order_id       = $indexes[2];
	$comments       = "
		PayGol payment verified\n
		Order: ".$order_id."\n
		Price: ".$frmprice."\n
		Currency: ".$frmcurrency."\n
		Method: ".$method."\n";
	$v_get = tep_db_query("SELECT tb2.orders_id, max(tb2.orders_total_id), tb1.orders_id  FROM " . TABLE_ORDERS . " tb1, " . TABLE_ORDERS_TOTAL . " tb2 WHERE tb1.orders_id = '".$order_id."' AND tb2.orders_id = '".$order_id."' ");
	$v_get_result = tep_db_fetch_array($v_get);
	if ($v_get_result['max(tb2.orders_total_id)']==$order_total_id)
	{
		$order_status = tep_db_query("select orders_status_id from " . TABLE_ORDERS_STATUS . " where orders_status_name = 'Completed' limit 1");
		if (tep_db_num_rows($order_status))
			{
				$check = tep_db_fetch_array($order_status);
				$order_status_id = $check['orders_status_id'];
			}
		
		// validate order status
		$order_status_validation = tep_db_query("select orders_id, orders_status FROM " . TABLE_ORDERS . " WHERE orders_id = '".$order_id."' ");
		$check_validate = tep_db_fetch_array($order_status_validation);
		$orders_status 		= $check_validate['orders_status'];
		if ($orders_status != $order_status_id)
		{
			// update
			$sql_data_array = array('orders_id' => $order_id,
							'orders_status_id' => $order_status_id,
							'date_added' => 'now()',
							'customer_notified' => 0,
							'comments' => $comments);
			tep_db_perform(TABLE_ORDERS_STATUS_HISTORY, $sql_data_array);
			tep_db_query("update " . TABLE_ORDERS . " set orders_status = ". $order_status_id .", last_modified = now() where orders_id = " .$order_id. "");
		}
		else { 	echo "Error: duplicate"; exit; }	
		
	}else {  echo "Error: no record to validate"; exit; }
	
?>