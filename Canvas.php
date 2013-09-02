<?php
//require( dirname(__FILE__) . '/wp-load.php' );
//echo "hiiiiii";
//exit();
class Canvas{


	function __construct($oauth_token = "", $api_root_url = ""){
		$config = parse_ini_file("config.ini");
    	$tokenid = $config["canvastoken"];
    	$canvas_url=$config["canvasurl"]."/api/v1";
    	$this->oauth_token = $tokenid;
		$this->api_root_url = $canvas_url;	
	}

	public function get_json($url){
		$handle = curl_init();
		curl_setopt($handle, CURLOPT_URL, $this->api_root_url.$url."?access_token=".$this->oauth_token);
		curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);
		$response= json_decode(curl_exec($handle),TRUE);
		curl_close($handle);
		return $response;
	}

	public function post_json($url,$data){
		$handle = curl_init();
		$headers = array(
			'Accept: application/json',
			'Content-Type: application/json',
			'Authorization: Bearer '.$this->oauth_token
		);
		curl_setopt($handle, CURLOPT_URL, $this->api_root_url.$url);
		curl_setopt($handle, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($handle, CURLOPT_POST, true);
		curl_setopt($handle, CURLOPT_POSTFIELDS, $data);
        $response = json_decode(curl_exec($handle),TRUE);
        curl_close($handle);
        return $response;
	}

	public function put_json($url,$data){
		$handle = curl_init();
		$headers = array(
			'Accept: application/json',
			'Content-Type: application/json',
			'Authorization: Bearer '.$this->oauth_token
		);
		curl_setopt($handle, CURLOPT_URL, $this->api_root_url.$url);
		curl_setopt($handle, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($handle, CURLOPT_CUSTOMREQUEST, 'PUT');
		curl_setopt($handle, CURLOPT_POSTFIELDS, $data);
        $response = json_decode(curl_exec($handle),TRUE);
        curl_close($handle);
        return $response;
	}

	public function delete_json($url){
		$handle = curl_init();
		$headers = array(
			'Accept: application/json',
			'Content-Type: application/json',
			'Authorization: Bearer '.$this->oauth_token
		);
		curl_setopt($handle, CURLOPT_URL, $this->api_root_url.$url);
		curl_setopt($handle, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($handle, CURLOPT_CUSTOMREQUEST, 'DELETE');
        $response = json_decode(curl_exec($handle),TRUE);
        curl_close($handle);
        return $response;
	}
}
?>