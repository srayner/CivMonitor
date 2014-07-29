<?php

namespace CivMonitor;

use Zend\ModuleManager\ModuleManager;

class Module
{
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
    
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }
    
    public function getServiceConfig()
    {
        return array(
            'invokables' => array(
                'civmonitor_result' => 'CivMonitor\Model\Result\Result'
            ),
            'factories' => array(
                'civmonitor_monitor_service' => function($sm) {
                    $service = new \CivMonitor\Service\Monitor;
                    $service->setResultMapper($sm->get('civmonitor_result_mapper'));
                    return $service;
                },
                'civmonitor_result_mapper' => function($sm) {
                    $mapper = new \CivMonitor\Model\Result\ResultMapper;
                    $resultModelClass = '\CivMonitor\Model\Result\Result';
                    $mapper->setEntityPrototype(new $resultModelClass);
                    $mapper->setHydrator(new \Zend\Stdlib\Hydrator\ClassMethods);
                    return $mapper;
                },
            ),
        );
    }
    
}