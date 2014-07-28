<?php
namespace CivMonitor\Model\Result;

interface ResultInterface
{
    public function getHostname();
    public function setHostname($hostname);
    public function getTimestamp();
    public function setTimestamp($timestamp);
    public function getStatusId();
    public function setStatusId($statusId);
}