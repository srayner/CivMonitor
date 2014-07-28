<?php

namespace CivMonitor\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class MonitorController extends AbstractActionController
{
    public function pingAction()
    {
        echo "It works!";
        $ip =   "127.0.0.1";
        exec("ping -n 3 $ip", $output, $status);
        print_r($status);
    }

}