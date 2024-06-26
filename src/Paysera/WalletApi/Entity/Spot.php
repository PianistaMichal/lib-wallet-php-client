<?php

class Paysera_WalletApi_Entity_Spot
{
    /**
     * @var int
     */ 
    private $id;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $identifier;

    /**
     * @var Paysera_WalletApi_Entity_SpotInfo
     */
    private $spotInfo;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * 
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string status
     * 
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return string
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @param string $identifier
     * 
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
        
        return $this;
    }

    /**
     * @return Paysera_WalletApi_Entity_SpotInfo
     */
    public function getSpotInfo()
    {
        return $this->spotInfo;
    }

    /**
     * @param Paysera_WalletApi_Entity_SpotInfo $spotInfo
     * 
     * @return $this
     */
    public function setSpotInfo($spotInfo)
    {
        $this->spotInfo = $spotInfo;

        return $this;
    }
}
