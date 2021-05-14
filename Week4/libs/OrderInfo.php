<?php

require_once('ABA.php');
require_once('PiPay.php');
require_once('Wing.php');

class OrderInfo {

    private $store = [];

    public function addOrder($product,$quantity,$method)
    {
        switch ($method) 
        {
            case 'ABA':
                $newOrder = new ABA($product, $quantity, $method);
                break;
            case 'PiPay':
                $newOrder = new PiPay($product, $quantity, $method);
                break;
            case 'Wing':
                $newOrder = new Wing($product, $quantity, $method);
                break;
        }

        array_push($this->store, $newOrder);
    }

    public function getPaymentInfo() 
    {
        $info['ABA'] = ABA::$counter;
        $info['PiPay'] = PiPay::$counter;
        $info['Wing'] = Wing::$counter;
        $info['data'] = $this->store;
        usort($info['data'], fn($t1, $t2) => $t2->total <=> $t1->total);
        return $info;
    }
}

?>