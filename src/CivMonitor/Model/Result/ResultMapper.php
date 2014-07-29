<?php

namespace CivMonitor\Model\Result;

use ZfcBase\Mapper\AbstractDbMapper,
    CivMonitor\Service\DbAdapterAwareInterface;

use Zend\Stdlib\Hydrator\HydratorInterface;

class ResultMapper extends AbstractDbMapper implements ResultMapperInterface, DbAdapterAwareInterface
{
    protected $tableName = 'monitor_result';
    protected $hostnameField = 'hostname';
    
    /**
     * 
     * @param unknown_type $hostname
     */
    public function getByHostname($hostname)
    {
        $select = $this->getSelect()
                       ->where(array($this->$hostnameField => $hostname));
        return $this->select($select);   
    }
    
    /**
     * 
     * @param ResultInterface $result
     * @return ResultInterface
     */
    public function persist(ResultInterface $result)
    {
        $this->insert($result, null, new ResultHydrator);
        return $result;
    }
    
    /**
     * 
     * @param unknown_type $entity
     * @param unknown_type $tableName
     * @param HydratorInterface $hydrator
     */
    protected function insert($entity, $tableName = null, HydratorInterface $hydrator = null)
    {
        return parent::insert($entity, $tableName, $hydrator);
    }
}