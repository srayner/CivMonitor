<?php

namespace CivMonitor\Model\Result;

interface ResultMapperInterface
{
    public function getByHostname($hostname);
    public function persist(ResultInterface $result);
}