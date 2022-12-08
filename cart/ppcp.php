<?php
require_once('../res/x5engine.php');
require_once('paypal/ppcp.lib.php');
$error_log = pathCombine(array('..', $imSettings['general']['public_folder'], 'paypal-error.log'));
$api_base_url = 'https://api.paypal.com';
$client_id = 'AZRwW7EtfCoeWE_m3uRYAFUNt13y-s1PeQYSPKXBKFg2EooeMRs8oUw6dmmJmxxnNAXlNVD1HAjHs1QC';
$client_secret = 'EDosqvknyoU7jr0p9chacJqXg5yRZIySRIguUzQWHJGQWYULeoaMOpMppc_x3GcUnXZFS-MWvkVVIZW8';
header('Content-Type: application/json');
if (!isset($_GET['action']) || ($_GET['action'] !== 'client-token' && $_GET['action'] !== 'create' && $_GET['action'] !== 'capture') || ($_GET['action'] === 'create' && (!isset($_GET['order_id']) || !isset($_GET['description']) || !isset($_GET['currency']) || !isset($_GET['amount']) || !isset($_GET['first_name']) || !isset($_GET['last_name']) || !isset($_GET['email']))) || ($_GET['action'] === 'capture' && (!isset($_GET['id']) || !isset($_GET['order_id'])))) {
	http_response_code(400);
	die('{ "error": "Invalid action" }');
}
$access_token = getToken($api_base_url, $client_id, $client_secret);
if ($access_token === null) {
	http_response_code(403);
	die('{ "error": "Cannot get a token" }');
}
if ($_GET['action'] === 'client-token') {
	$client_token = clientToken($api_base_url, $access_token);
	if ($client_token === null) {
		http_response_code(502);
		die('{ "error": "Cannot create client token" }');
	}
	echo json_encode($client_token);
}
else {
	if ($_GET['action'] === 'create') {
		if (isset($_GET['shipto']) && isset($_GET['address1']) && isset($_GET['address2']) && isset($_GET['city']) && isset($_GET['state']) && isset($_GET['country']) && isset($_GET['zip'])) {
			$id = createOrder($api_base_url, $access_token, $error_log, $_GET['order_id'], $_GET['description'], $_GET['currency'], $_GET['amount'], $_GET['first_name'], $_GET['last_name'], $_GET['email'], $_GET['shipto'], $_GET['address1'], $_GET['address2'], $_GET['city'], $_GET['state'], $_GET['country'], $_GET['zip']);
		}
		else {
			$id = createOrder($api_base_url, $access_token, $error_log, $_GET['order_id'], $_GET['description'], $_GET['currency'], $_GET['amount'], $_GET['first_name'], $_GET['last_name'], $_GET['email']);
		}
		if ($id === null) {
			http_response_code(502);
			die('{ "error": "Cannot create order" }');
		}
	}
	else {
		$id = captureOrder($api_base_url, $access_token, $error_log, $_GET['id']);
		if ($id === null) {
			http_response_code(502);
			die('{ "error": "Cannot capture order" }');
		}
		$cart = Configuration::getCart();
		$order = $cart->getOrder($_GET['order_id']);
		$evade = true;
		if (isset($order['products'])) {
			foreach ($order['products'] as $prod) {
				if ($prod['digital'] != '1') {
					$evade = false;
				}
			}
		}
		else {
			$evade = false;
		}
		if ($evade) {
			$cart->evadeOrder($_GET['order_id'], $id);
		}
	}
	echo '{ "id": "' . $id . '" }';
}
// End of file
