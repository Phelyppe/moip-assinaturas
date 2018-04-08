<?php

namespace MoipAssinatura;

/**
 * 
 * Moip Invoices
 * Subscriptions created generate invoices according to the contracted plan settings. 
 *
 */

class MoipInvoices extends MoipAuth{

	private $data = array();

    /**
     * 
     * Get all invoices from a subscription order
     *
     * @param string $code  Subscription Code
     * @return multidimensional array 
     */

	public function getInvoices($code){
        $url = $this->getURL('subscriptions/' . $code . '/invoices');
        $data = $this->query->get($url);

        if(!$data) {
            return false;
        }

        return $data;

    }

    /**
     * 
     * Get details from a specific invoice
     *
     * @param string $code  Invoice Code
     * @return array 
     */

    public function getInvoices($code){
        $url = $this->getURL('invoices/' . $code);
        $data = $this->query->get($url);
        if (!$data) {
            return false;
        }
        return $data;
    }
}
