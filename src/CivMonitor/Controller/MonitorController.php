<?php

namespace CivMonitor\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class MonitorController extends AbstractActionController
{
    /**
     * @var Monitor
     */
    protected $monitorService;
    
    /**
     * Get monitorService.
     *
     * @return Monitor
     */
    public function getMonitorService()
    {
        if (null === $this->monitorService) {
            $this->monitorService = $this->getServiceLocator()->get('civmonitor_monitor_service');
        }
        return $this->monitorService;
    }
    
    public function pingAction()
    {
        // Ping localhost and store result in $status.
        echo "Sending pings...";
        $hostname = 'localhost';
        $ip = "127.0.0.1";
        exec("ping -n 3 $ip", $output, $status);
        
        // Create a result object and persist to storage.
        $monitor = $this->getMonitorService();
        $result = $this->getServiceLocator()->get('civmonitor_result');
        $result->setHostname($hostname)
               ->setStatusId($status);
        $monitor->persistResult($result);
        
        // Output the result.
        print_r($status);
    }

}