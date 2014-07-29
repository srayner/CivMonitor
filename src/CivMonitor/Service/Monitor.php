<?php

namespace CivMonitor\Service;

use Zend\ServiceManager\ServiceManagerAwareInterface,
    Zend\ServiceManager\ServiceManager,
    CivMonitor\Model\Result\ResultInterface;

class Monitor implements ServiceManagerAwareInterface
{
    /**
     * @var ServiceManager
     */
    protected $serviceManager;
    
    /**
     * @var ResultMapperInterface
     */
    protected $ResultMapper;
    
    /**
     * Retrieve service manager instance
     *
     * @return ServiceManager
     */
    public function getServiceManager()
    {
        return $this->serviceManager;
    }
    
    /**
     * Set service manager instance
     *
     * @param ServiceManager $serviceManager
     * @return Monitor
     */
    public function setServiceManager(ServiceManager $serviceManager)
    {
        $this->serviceManager = $serviceManager;
        return $this;
    }
    
    /**
     * getResultMapper
     *
     * @return ResultMapperInterface
     */
    public function getResultMapper()
    {
        return $this->resultMapper;
    }
    
    /**
     * setResultMapper
     *
     * @param ResultMapperInterface $resultMapper
     * @return Monitor
     */
    public function setResultMapper($resultMapper)
    {
        $this->resultMapper = $resultMapper;
        return $this;
    }
    
    public function persistResult(ResultInterface $result)
    {
        $this->resultMapper->persist($result);
        return $this;
    }
    
    public function getResultsByHostname($hostname)
    {
        return $this->resultMapper->getByHostname($hostname);
    }
}