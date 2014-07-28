<?php

namespace CivMonitor\Model\Result;

use ZfcBase\Mapper\AbstractDbMapper;

use Zend\Stdlib\Hydrator\HydratorInterface;

class PostMapper extends AbstractDbMapper implements PostMapperInterface, DbAdapterAwareInterface
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
    private function insert($entity, $tableName = null, HydratorInterface $hydrator = null)
    {
        return parent::insert($entity, $tableName, $hydrator);
    }
}