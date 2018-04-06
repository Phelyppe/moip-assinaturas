<?php

class MoipPlan extends MoipAuth {
    
    private $data = array();

    public function setCode($code){
        $this->data['code'] = $code;

        return $this;
    }

    public function setName($name){
        $this->data['name'] = $name;

        return $this;
    }

    public function setDescription($description){
        $this->data['description'] = $description;

        return $this;
    }

    public function setAmount($amount){
        $this->data['amount'] = $amount;

        return $this;
    }

    public function setPaymentMethod($payment_method){
        $this->data['payment_method'] = $payment_method;

        return $this;
    }

    public function setSetupFee($setup_fee){
        $this->data['setup_fee'] = $setup_fee;

        return $this;
    }

    public function setInterval($interval){
        $this->data['interval']['length'] = $interval;

        return $this;
    }

    public function setIntervalUnit($unit){
        $this->data['interval']['unit'] = $unit;
    }

    public function setBillingCycles($billing_cycle){
        $this->data['billing_cycles'] = $billing_cycle;

        return $this;
    }

    public function setStatus($status){
        $this->data['status'] = $status;

        return $this;
    }

    public function setTrialDays($days){
        $this->data['trial']['days'] = $days;

        return $this;
    }

    public function setTrialSetupFee($setup_fee){
        $this->data['trial']['setup_fee'] = $setup_fee;

        return $this;
    }

    public function setTrialStatus($status){
        $this->data['trial']['enabled'] = $status;

        return $this;
    }

    public function setMaxQty($max){
        $this->data['max_qty'] = $max;

        return $this;
    }

    public function getPlan($code){
        $url = $this->getURL('plans/' . $code);
        $data = $this->query->get($url);

        if(!$data) {
            return false;
        }

        return $data;

    }

    public function activatePlan($code){
        $url = $this->getURL('plans/' . $code . '/activate');
        return $this->query->put($url);
    }

    public function inactivatePlan($code){
        $url = $this->getURL('plans/' . $code . '/inactivate');
        return $this->query->put($url);
    }

    public function create(){
        $url = $this->getURL('plans');
        return $this->query->post($url, $this->data);
    }

    public function update($code){
        $url = $this->getURL('plans/' . $code);
        return $this->query->put($url, $this->data);
    }

    public function getPlans()
    {
        $url = $this->getURL('plans');
        $data = $this->query->get($url);
        if (!$data) {
            return;
        }
        return $data;
    }

}