<?php


class PremiumMember extends Member
{
    protected $_inDoorInterests;
    protected $_outDoorInterests;

    /**
     * PremiumMember constructor.
     * @param $fname
     * @param $lname
     * @param $age
     * @param $gender
     * @param $phone
     */
    public function __construct($fname, $lname, $age, $gender,
                                $phone)
    {
        //Pass Member Parameters to the Member Constructor
        parent::__construct
        (
            $this->_fname = $fname,
            $this->_lname = $lname,
            $this->_age = $age,
            $this->_gender = $gender,
            $this->_phone = $phone
        );

        //Default Set Indoor interests
        $this->_inDoorInterests = null;
        //Default Set Outdoor interests
        $this->_outDoorInterests = null;
    }

    /**
     * @return mixed
     */
    public function getInDoorInterests()
    {
        return $this->_inDoorInterests;
    }

    /**
     * @param mixed $inDoorInterests
     */
    public function setInDoorInterests($inDoorInterests)
    {
        $this->_inDoorInterests = $inDoorInterests;
    }

    /**
     * @return mixed
     */
    public function getOutDoorInterests()
    {
        return $this->_outDoorInterests;
    }

    /**
     * @param mixed $outDoorInterests
     */
    public function setOutDoorInterests($outDoorInterests)
    {
        $this->_outDoorInterests = $outDoorInterests;
    }



}