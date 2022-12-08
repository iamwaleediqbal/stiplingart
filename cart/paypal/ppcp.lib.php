<?php
function getToken($api_base_url, $client_id, $client_secret) {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $api_base_url . '/v1/oauth2/token');
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);

    $post = 'grant_type=client_credentials';
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

    $credentials = $client_id . ':' . $client_secret;
    $header = array(
        'Authorization: Basic ' . base64_encode($credentials)
    );
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);

    $res = curl_exec($ch);
    if (curl_errno($ch)) {
        curl_close($ch);
        return null;
    }
    curl_close($ch);

    $res = json_decode($res, true);
    if (!isset($res['access_token'])) {
        return null;
    }

    return $res['access_token'];
}

function clientToken($api_base_url, $access_token) {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $api_base_url . '/v1/identity/generate-token');
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);

    $header = array(
        'Accept: application/json',
        'Accept-Language: en_US',
        'Authorization: Bearer ' . $access_token,
        'Content-Type: application/json'
    );
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);

    $res = curl_exec($ch);
    if (curl_errno($ch)) {
        curl_close($ch);
        return null;
    }
    curl_close($ch);

    $res = json_decode($res, true);
    if (!isset($res['client_token'])) {
        return null;
    }

    return $res;
}

function writeErrorLog($error_log, $content) {
    if (function_exists('file_put_contents')) {
        $json_content = json_encode($content);
        if ($json_content === false && isset($content['debug_id'])) {
            $json_content = '{ "debug_id": "' . $content['debug_id'] . '" }';
        }
        file_put_contents($error_log, '[' . date('Y-m-d H:i:s') . '] ' . $json_content . "\n", FILE_APPEND);
    }
}

function createOrder($api_base_url, $access_token, $error_log, $order_id, $description, $currency, $amount, $first_name, $last_name, $email, $shipto = '', $address1 = '', $address2 = '', $city = '', $state = '', $country = '', $zip = '') {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $api_base_url . '/v2/checkout/orders');
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);

    $shipping_preference = 'NO_SHIPPING';
    $purchase_unit = array(
        'invoice_id' => $order_id,
        'description' => $description,
        'amount' => array(
            'currency_code' => $currency,
            'value' => $amount
        ),
        'payment_instruction' => array(
            'disbursement_mode' => 'INSTANT'
        )
    );

    if ($country != '') {
        $shipping_preference = 'SET_PROVIDED_ADDRESS';
        $purchase_unit['shipping'] = array(
            'name' => array(
                'full_name' => $shipto
            ),
            'address' => array(
                'address_line_1' => $address1,
                'address_line_2' => $address2,
                'admin_area_1' => $state,
                'admin_area_2' => $city,
                'postal_code' => $zip,
                'country_code' => $country
            )
        );
    }

    $post = array(
        'intent' => 'CAPTURE',
        'purchase_units' => array(
            $purchase_unit
        ),
        'application_context' => array(
            'shipping_preference' => $shipping_preference
        ),
        'payer' => array(
            'name' => array(
                'given_name' => $first_name,
                'surname' => $last_name
            ),
            'email_address' => $email
        )
    );

    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post));

    $header = array(
        'Authorization: Bearer ' . $access_token,
        'Content-Type: application/json',
        'PayPal-Partner-Attribution-Id: Incomedia_Cart_PCP'
    );
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);

    $res = curl_exec($ch);
    if (curl_errno($ch)) {
        curl_close($ch);
        return null;
    }
    curl_close($ch);

    $res = json_decode($res, true);
    if (!isset($res['id'])) {
        writeErrorLog($error_log, $res);
        return null;
    }

    return $res['id'];
}

function captureOrder($api_base_url, $access_token, $error_log, $id) {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $api_base_url . '/v2/checkout/orders/' . $id . '/capture');
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, '{}');

    $header = array(
        'Authorization: Bearer ' . $access_token,
        'Content-Type: application/json',
        'PayPal-Partner-Attribution-Id: Incomedia_Cart_PCP'
    );
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);

    $res = curl_exec($ch);
    if (curl_errno($ch)) {
        curl_close($ch);
        return null;
    }
    curl_close($ch);

    $res = json_decode($res, true);
    if (!isset($res['id']) ||
        !isset($res['purchase_units']) || !is_array($res['purchase_units']) || count($res['purchase_units']) < 1 ||
        !isset($res['purchase_units'][0]['payments']) ||
        !isset($res['purchase_units'][0]['payments']['captures']) || !is_array($res['purchase_units'][0]['payments']['captures']) || count($res['purchase_units'][0]['payments']['captures']) < 1 ||
        !isset($res['purchase_units'][0]['payments']['captures'][0]['status']) || $res['purchase_units'][0]['payments']['captures'][0]['status'] !== 'COMPLETED') {
        writeErrorLog($error_log, $res);
        return null;
    }

    return $res['id'];
}
