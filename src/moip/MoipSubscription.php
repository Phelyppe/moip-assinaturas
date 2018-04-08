<?php

namespace MoipAssinatura;

class MoipSubscription{

    private $plan;
    private $customer;
    private $subscription;
    private $invoice;

    public function __construct($appToken = null, $accessToken = null, $sandbox = false)
    {

        $this->appToken = $appToken;
        $this->accessToken = $accessToken;
        $this->sandbox = $sandbox;

        $this->plan = new MoipPlan($this->appToken, $this->accessToken, $sandbox);
        $this->customer = new MoipCustomer($this->appToken, $this->accessToken, $sandbox);
        $this->subscription = new MoipOrderSubscription($this->appToken, $this->accessToken, $sandbox);
        $this->invoice = new MoipInvoices($this->appToken, $this->accessToken, $sandbox);

    }
  
    public function plans()
    {
        return $this->plan;
    }
    
    public function customers(){
        return $this->customer;
    }

    public function subscriptions(){
        return $this->subscription;
    }

    public function invoices(){
        return $this->invoice;
    }
}
