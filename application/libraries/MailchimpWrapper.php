<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MailchimpWrapper {
	protected $api_key = "apikey c09fb48ac6dcb3c26b94306f0ccc361f-us9";
	protected $dc_url = "http://us9.api.mailchimp.com/3.0/";
	protected $lists_onboarding = "77e7e33be7";
	protected $CI;

	public function __construct()
	{
		$this->CI =& get_instance();
		$this->CI->load->library('CurlHelper');
	}

	public function list_members_collection_post($email, $status = "subscribed")
	{
		$data = array(
			"email_address" => $email,
			"status" => $status
		);
		$url = $this->dc_url . "lists/" . $this->lists_onboarding . "/members";
		$response = $this->CI->curlhelper->post_json($url, $this->api_key, $data);
		return $response;
	}
	
}
?>