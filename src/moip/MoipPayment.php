<?php

namespace MoipAssinatura;

/**
 * 
 * Moip Payments
 * An invoice, as it is known in the market, is a descriptive set of items charged at a predefined interval of time in a subscription. 
 * The payment, in turn, is an effective collection of the total amount of an invoice.
 *
 */

class MoipPayment extends MoipAuth{

	private $data = array();

    /**
     * 
     * Get all payments from a invoice
     *
     * @param string $code  Invoice Code
     * @return multidimensional array 
     */

	public function getPayments($code){
        $url = $this->getURL('invoices/' . $code . '/payments');
        $data = $this->query->get($url);

        if(!$data) {
            return false;
        }

        return $data;

    }

    /**
     * 
     * Get details from a specific payment
     *
     * @param string $code  Payment Code
     * @return array 
     */

    public function getPayment($code){
        $url = $this->getURL('payments/' . $code);
        $data = $this->query->get($url);
        if (!$data) {
            return false;
        }
        return $data;
    }
}
