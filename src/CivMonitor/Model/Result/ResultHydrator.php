<?php

namespace CivMonitor\Model\Result;

use Zend\Stdlib\Hydrator\ClassMethods;

class ResultHydrator extends ClassMethods
{
    /**
     * Extract values from $object
     *
     * @param  object $object
     * @return array
     * @throws Exception\InvalidArgumentException
     */
    public function extract($object)
    {
        if (!$object instanceof ResultInterface) {
            throw new Exception\InvalidArgumentException('$object must be an instance of CivMonitor\Model\Result\ResultInterface');
        }
        return parent::extract($object);
    }

    /**
     * Hydrate $object with the provided $data.
     *
     * @param  array $data
     * @param  object $object
     * @return ResultInterface
     * @throws Exception\InvalidArgumentException
     */
    public function hydrate(array $data, $object)
    {
        if (!$object instanceof ResultInterface) {
            throw new Exception\InvalidArgumentException('$object must be an instance of CivMonitor\Model\Result\ResultInterface');
        }
        return parent::hydrate($data, $object);
    }

}