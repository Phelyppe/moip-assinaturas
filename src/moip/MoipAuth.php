<?php

namespace MoipAssinatura;

abstract class MoipAuth
{
    protected $query;
    private $sandbox = false;

    public function __construct($data){

        $apiToken = $data['token'];
        $apiKey = $data['key'];

        $this->query = new MoipConnect($apiToken, $apiKey);
        $this->sandbox = $data['sandbox'];
    }

    protected function getURL($url){

        if($this->sandbox){
            return 'https://sandbox.moip.com.br/assinaturas/v1/' . $url;
        } else {
            return 'https://api.moip.com.br/assinaturas/v1/' . $url;
        }
        
    }
}