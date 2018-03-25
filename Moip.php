<?php

require_once "MoipAuth.php";
require_once "MoipConnect.php";
require_once "MoipPlan.php";

class Moip{

    private $plan;

    public function __construct($appToken = null, $accessToken = null)
    {

        $this->appToken = $appToken;
        $this->accessToken = $accessToken;

        $this->plan = new MoipPlan($this->appToken, $this->accessToken);
  
    }

    public function getPlan()
    {
        return $this->plan;
    }
}
