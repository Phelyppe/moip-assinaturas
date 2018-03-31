<?php

class MoipCustomer extends MoipAuth {

	private $data = array();

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
	
	public function setPhone($data){
		$this->setPhoneAreaCode($data['area']);
		$this->setPhoneNumber($data['number']);

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

	public function setBirthdate($data){
		$this->setBirthdateDay($data['day']);
		$this->setBirthdateMonth($data['month']);
		$this->setBirthdateYear($data['year']);

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

	public function create(){
        $url = $this->getURL('customers?new_vault=false');
        return $this->query->post($url, $this->data);
    }

    public function getCustomer($code){
        $url = $this->getURL('customers/' . $code);
        $data = $this->query->get($url);

        if(!$data) {
            return false;
        }

        return $data;

    }
}