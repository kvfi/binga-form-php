<?php
use GuzzleHttp\Client; // http://docs.guzzlephp.org/en/stable/

$client = new Client([
    'base_uri' => 'http://preprod.binga.ma'
]);

$response = $client->request('POST',
	'/bingaApi/api/orders/json/pay',
	[
		'auth' => ['Binga.ma', 'Binga'],
		'headers' => ['Content-Type' => 'application/x-www-form-urlencoded'],
		'body' => [
			'apiVersion' => '1.1',
			'externalId' => '',
			'expirationDate' => '',
			'amount' => '',
			'storeId' => '',	
			'successUrl' => '',	
			'failureUrl' => '',	
			'bookUrl' => '',	
			'payUrl' => '',	
			'buyerFirstName' => '',	
			'buyerLastName' => '',
			'buyerEmail' => '',
			'buyerAddress' => '',
			'buyerPhone' => '',
			'orderCheckSum' => ''
		]
		
	]
);

if ($response.getStatusCode() == 200) {
	print("OK".);
} else {
	print($response.getStatusCode());
}

