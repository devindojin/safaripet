<?php

Requests::register_autoloader();

class POClientResponse {
    public $code;
    public $json;

    function __construct($res) {
        $this->code = $res->status_code;
        $this->json = json_decode($res->body, true);
    }
}

class POClient {
    private $host;
    private $access_key;
    private $secret_key;
    private $token;
    private $session_id;

    function __construct($host, $access_key, $secret_key) {
        $this->host = $host;
        $this->access_key = $access_key;
        $this->secret_key = $secret_key;
    }

    public function sign_in($password, $params = []) {
        $res = $this->request('post', '/apps/any/sessions', array_merge($params, ['password' => $password]));

        if ($res->code == 200) {
            $this->token = $res->json['token'];
            $this->session_id = $res->json['id'];
        }

        return $res;
    }

    public function sign_out() {
        return $this->request('delete', '/apps/any/sessions/'.$this->session_id);
    }

    public function request($method, $path, $params = []) {
        $timestamp  = $this->timestamp();
        $signature = $this->signature($path, $timestamp);

        $params = array_merge($params, ['accesskey' => $this->access_key, 'timestamp' => $timestamp, 'signature' => $signature]);

        if ($this->token) $params['session'] = $this->token;

        $headers = ['Content-Type' => 'application/x-www-form-urlencoded', 'Accept' => '*/*'];
        return new POClientResponse(Requests::request($this->host.$path, $headers, $params, strtoupper($method)));
        //return new POClientResponse(Requests::request('https://testcommerce.dev19.splinestudio.com/in.php', $headers, $params,strtoupper($method)));
    }


    public function requestJSON($method, $path, $jsonString) {
        $timestamp  = $this->timestamp();
        $signature = $this->signature($path, $timestamp);
        $jsonString = str_replace('{accesskey}', $this->access_key, $jsonString);
        $jsonString = str_replace('{timestamp}', $timestamp, $jsonString);
        $jsonString = str_replace('{signature}', $signature, $jsonString);
        $jsonString = str_replace('{session}', $this->token, $jsonString);
        $headers = ['Content-Type' => 'application/json', 'Accept' => '*/*'];
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => $this->host.$path,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 300,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => $method,
          CURLOPT_POSTFIELDS => $jsonString,
          CURLOPT_HTTPHEADER => $headers
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        if ($err) {
            error_log("requestJSON error".json_encode($err));
        }
        if ($response) {
            return json_decode($response);
        }
        return null;

    }

    private function timestamp() {
        return strftime('%Y-%m-%dT%H:%M:%SZ');
    }

    private function signature($path, $timestamp) {
        return base64_encode(hash_hmac('sha256', $path.$timestamp, $this->secret_key, true));
    }
}

?>
