<?php
return array(
    'console' => array(
        'router' => array(
            'routes' => array(
                'monitor' => array(
                    'options' => array(
                        'route' => 'host action',
                        'defaults' => array(
                            'controller' => 'CivMonitor\Controller\MonitorController',
                            'action'     => 'ping'
                        )
                    )
                )
            )
        )
    ),
    
    'controllers' => array(
        'invokables' => array(
            'CivMonitor\Controller\MonitorController' => 'CivMonitor\Controller\MonitorController'
        ),
    ),
);