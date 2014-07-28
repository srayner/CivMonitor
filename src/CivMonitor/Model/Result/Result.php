<?php
namespace CivMonitor\Model\Result;

/**
 * Result entity.
 *
 * @author Steve Rayner
 */
class Result implements ResultInterface
{
    /**
     * @var string
     */
    protected $hostname;
    
    /**
     * @var DateTime
     */
    protected $timestamp;
    
    /**
     * @var int
     */
    protected $statusId;
    
    /**
     * Get hostname.
     * 
     * @return string
     */
    public function getHostname()
    {
        return $this->hostanme;
    }
    
    /**
     * Set hostname.
     * 
     * @param unknown_type $hostname
     * @return \CivMonitor\Model\Result\Result
     */
    public function setHostname($hostname)
    {
        $this->hostname = $hostname;
        return $this;
    }
    
    /**
     * Get timestamp.
     * 
     * @return DateTime
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }
    
    /**
     * Set timestamp.
     * 
     * @param unknown_type $timestamp
     * @return \CivMonitor\Model\Result\Result
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
        return $this;
    }
    
    /**
     * Get status id.
     * 
     * @return int
     */
    public function getStatusId()
    {
        return $this->statusId;
    }
    
    /**
     * Set status id.
     * 
     * @param unknown_type $statusId
     * @return \CivMonitor\Model\Result\Result
     */
    public function setStatusId($statusId)
    {
        $this->statusId = $statusId;
        return $this;
    }
}