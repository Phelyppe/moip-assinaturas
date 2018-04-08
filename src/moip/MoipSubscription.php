<?php

namespace MoipAssinatura;

class MoipSubscription{

    private $plan;
    private $customer;
    private $subscription;
    private $invoice;
    private $payment;

    public function __construct($data){

        $this->plan = new MoipPlan($data);
        $this->customer = new MoipCustomer($data);
        $this->subscription = new MoipOrderSubscription($data);
        $this->invoice = new MoipInvoice($data);
        $this->payment = new MoipPayment($data);

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

    public function payments(){
        return $this->payment;
    }
}
