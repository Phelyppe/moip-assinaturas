<?php

namespace MoipAssinatura;
use \DateTime;

class MoipCustomer extends MoipAuth {

	private $data = array();
	private $credit_card = array();

	public function setCode($code){
		$this->data['code'] = $code;
		return $this->data;
	}

	public function setFullName($name){
		$this->data['fullname'] = $name;
		return $this->data;
	}

	public function setEmail($email){
		$this->data['email'] = $email;
		return $this->data;
	}

	public function setCPF($cpf){
		$this->data['cpf'] = $cpf;
		return $this->data;
	}
	
	public function setPhone($area, $number){
		$this->setPhoneAreaCode($area);
		$this->setPhoneNumber($number);

		return $this->data;
	}
	private function setPhoneAreaCode($code){
		$this->data['phone_area_code'] = $code;
		return $this->data;
	}

	private function setPhoneNumber($phone){
		$this->data['phone_number'] = $phone;
		return $this->data;
	}

	public function setBirthdate($birthdate){
		$date = new DateTime($birthdate);
		$this->setBirthdateDay($date->format('d'));
		$this->setBirthdateMonth($date->format('m'));
		$this->setBirthdateYear($date->format('Y'));

		return $this->data;
	}

	private function setBirthdateDay($day){
		$this->data['birthdate_day'] = $day;

		return $this->data;
	}

	private function setBirthdateMonth($month){
		$this->data['birthdate_month'] = $month;
		return $this->data;
	}

	private function setBirthdateYear($year){
		$this->data['birthdate_year'] = $year;
		return $this->data;
	}

	public function setAddress($street, $number, $district, $city, $state, $zipcode, $country){
		$this->setAddressStreet($street);
		$this->setAddressNumber($number);
		$this->setAddressDistrict($district);
		$this->setAddressCity($city);
		$this->setAddressState($state);
		$this->setAddressZipcode($zipcode);
		$this->setAddressCountry($country);
	}

	public function setAddressStreet($street){
		$this->data['address']['street'] = $street;
		return $this->data;
	}

	public function setAddressNumber($number){
		$this->data['address']['number'] = $number;
		return $this->data;
	}

	public function setAddressCity($city){
		$this->data['address']['city'] = $city;
		return $this->data;
	}

	public function setAddressDistrict($district){
		$this->data['address']['district'] = $district;
		return $this->data;
	}

	public function setAddressState($state){
		$this->data['address']['state'] = $state;
		return $this->data;
	}

	public function setAddressCountry($country){
		$this->data['address']['country'] = $country;
		return $this->data;
	}

	public function setAddressZipcode($zipcode){
		$this->data['address']['zipcode'] = $zipcode;
		return $this->data;
	}

	public function setCreditCardHolder($name){
		$this->data['billing_info']['credit_card']['holder_name'] = $name;
		return $this->credit_card;
	}

	public function setCreditCardNumber($number){
		$this->data['billing_info']['credit_card']['number'] = $number;
		return $this->data;
	}

	public function setCreditCardExpirationMonth($month){
		$this->data['billing_info']['credit_card']['expiration_month'] = $month;
		return $this->data;
	}

	public function setCreditCardExpirationYear($year){
		$this->data['billing_info']['credit_card']['expiration_year'] = $year;
		return $this->data;
	}

	public function updateCreditCard($code){

		$this->credit_card = $this->data['billing_info'];

        $url = $this->getURL('customers/' . $code . '/billing_infos');
        return $this->query->put($url, $this->credit_card);
    }

	public function create(){
        $url = $this->getURL('customers?new_vault=false');
        return $this->query->post($url, $this->data);
    }

    public function update($code){
        $url = $this->getURL('customers/' . $code);
        return $this->query->put($url, $this->data);
    }

    public function get($code){
        $url = $this->getURL('customers/' . $code);
        $data = $this->query->get($url);

        if(!$data) {
            return false;
        }

        return $data;

    }

    public function all(){
        $url = $this->getURL('customers');
        $data = $this->query->get($url);
        if (!$data) {
            return;
        }
        return $data;
    }

}