<?php

namespace MoipAssinatura;

class MoipConnect
{

    private $header;
    private $httpCode;

    public function __construct($apiToken = "", $apiKey = "")
    {
        $this->header = array(
            "Content-Type: application/json",
            "Authorization: Basic " . base64_encode($apiToken . ":" . $apiKey),
        );

    }

    public function post($url, $data)
    {
        return $this->query($url, $data, 'POST');
    }

    public function get($url, $data = null)
    {
        return $this->query($url, $data, 'GET');
    }

    public function put($url, $data = null)
    {
        return $this->query($url, $data, 'PUT');
    }

    public function delete($url, $data)
    {
        return $this->query($url, $data, 'DELETE');
    }


    public function query($url, $data = null, $method)
    {

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        if ($method != 'GET' && $data) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
            curl_setopt($ch, CURLOPT_POST, true);
        }

        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->header);

        $response = curl_exec($ch);
        $this->httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return json_decode($response);
    }

    public function getHttpCode()
    {
        return $this->httpCode;
    }

}