<?php

require_once "MoipAuth.php";
require_once "MoipConnect.php";
require_once "MoipPlan.php";

class MoipSubscription{

    private $plan;

    public function __construct($appToken = null, $accessToken = null, $sandbox = false)
    {

        $this->appToken = $appToken;
        $this->accessToken = $accessToken;
        $this->sandbox = $sandbox;

        $this->plan = new MoipPlan($this->appToken, $this->accessToken, $sandbox);
  
    }
  
    public function plans()
    {
        return $this->plan;
    }
    
}
