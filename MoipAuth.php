<?php

abstract class MoipAuth
{
    protected $query;

    public function __construct($apiToken, $apiKey)
    {
        $apiToken = 'DQ7TIA2B7MSKP4NFCFBTFG9QYLZ04XDJ';
        $apiKey = 'XYEXOGOZXJS8PGXBB240WCUY1Y3IL1UOYVURJ44O';
        $this->query = new MoipConnect($apiToken, $apiKey);
    }

    protected function getURL($param)
    {
        return 'https://sandbox.moip.com.br/assinaturas/v1/' . $param;
    }
}