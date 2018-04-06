<?php

abstract class MoipAuth
{
    protected $query;

    public function __construct($apiToken, $apiKey, $sandbox = false)
    {
       
        $this->query = new MoipConnect($apiToken, $apiKey);
        $this->sandbox = $sandbox;
    }

    protected function getURL($url, $sandbox = false)
    {
        if($this->sandbox){
            return 'https://sandbox.moip.com.br/assinaturas/v1/' . $url;
        } else {
            return 'https://api.moip.com.br/assinaturas/v1/' . $url;
        }
    }
}