<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CurlHelper {

	public function __construct()
	{
	}

	public function post_json($url, $auth_key, $data)
	{
		// Setup cURL
		$ch = curl_init($url);
		curl_setopt_array($ch, array(
			CURLOPT_POST => TRUE,
			CURLOPT_RETURNTRANSFER => TRUE,
			CURLOPT_HTTPHEADER => array(
				'Authorization: '.$auth_key,
				'Content-Type: application/json'
			),
			CURLOPT_POSTFIELDS => json_encode($data)
		));

		// Send the request
		$response = curl_exec($ch);

		// Check for errors
		if($response === FALSE){
			return curl_error($ch);
		}

		// Decode the response
		$responseData = json_decode($response, TRUE);

		// Print the date from the response
		return $responseData;
	}
	
}
?>