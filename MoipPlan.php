<?php

class MoipPlan extends MoipAuth
{
    private $data = array();

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