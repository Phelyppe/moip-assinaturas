<?php

class MoipOrderSubscription extends MoipAuth{
	
	private $data = array();

	public function setCode($code){
		$this->data['code'] = $code;
		return $this->data;
	}

	public function setMethodPayment($method_payment){
		$this->data['payment_method'] = $method_payment;
		return $this->data;
	}

	public function setCustomerCode($code){
		$this->data['customer']['code'] = $code;
		return $this->data;
	}

	public function setPlanCode($code){
		$this->data['plan']['code'] = $code;
		return $this->data;
	}

	public function create(){
        $url = $this->getURL('subscriptions?new_customer=false');
        return $this->query->post($url, $this->data);
    }

    public function getSubscriptionOrder($code){
        $url = $this->getURL('subscriptions/' . $code);
        $data = $this->query->get($url);

        if(!$data) {
            return false;
        }

        return $data;

    }

    public function getSubscriptionOrders(){
        $url = $this->getURL('subscriptions');
        $data = $this->query->get($url);
        if (!$data) {
            return;
        }
        return $data;
    }
}