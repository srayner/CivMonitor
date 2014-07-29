<?php

namespace CivMonitor\Service;

use Zend\Db\Adapter\Adapter;

interface DbAdapterAwareInterface
{
    public function setDbAdapter(Adapter $dbAdapter);
}