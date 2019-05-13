<?php

/**
 * Class Member.
 * Represents a member in the member Dating App.
 *
 * The Member class represents a Member with a first name,
 * last name, age, gender, phone, email, state, seeking, biography
 * @author Robert Hill <rhill34@mail.greenriver.edu>
 * @copyright 2019
 */
class Member
{

    protected $_fname;
    protected $_lname;
    protected $_age;
    protected $_gender;
    protected $_phone;
    protected $_email;
    protected $_state;
    protected $_interestsAge;
    protected $_seeking;
    protected $_bio;

    /**
     * Member constructor.
     * @param $_fname String
     * @param $_lname String
     * @param $_age int
     * @param $_gender String
     * @param $_phone String
     */
    public function __construct($fname, $lname, $age, $gender, $phone)
    {
        $this->_fname = $fname;
        $this->_lname = $lname;
        $this->_age = $age;
        $this->_gender = $gender;
        $this->_phone = $phone;
    }

    /**
     * Function that returns the
     * first name of the Member object
     * @return String
     */
    public function getFname()
    {
        return $this->_fname;
    }

    /**
     * Function that sets the
     * first name of the Member object
     * @param String
     */
    public function setFname($fname)
    {
        $this->_fname = $fname;
    }

    /**
     * Function that returns the
     * Last name for the Member object
     * @return String
     */
    public function getLname()
    {
        return $this->_lname;
    }

    /**
     * Function that sets the
     * Last name for the Member object
     * @param mixed String
     */
    public function setLname($lname)
    {
        $this->_lname = $lname;
    }

    /**
     * Function that returns the
     * age of the Member object
     * @return integer
     */
    public function getAge()
    {
        return $this->_age;
    }

    /**
     * Function that sets the
     * age of the Member object
     * @param Integer
     */
    public function setAge($age)
    {
        $this->_age = $age;
    }

    /**
     * @return String
     */
    public function getGender()
    {
        return $this->_gender;
    }

    /**
     * @param String
     */
    public function setGender($gender)
    {
        $this->_gender = $gender;
    }

    /**
     * @return String
     */
    public function getPhone()
    {
        return $this->_phone;
    }

    /**
     * @param String
     */
    public function setPhone($phone)
    {
        $this->_phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->_email = $email;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->_state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->_state = $state;
    }

    /**
     * @return mixed
     */
    public function getSeeking()
    {
        return $this->_seeking;
    }

    /**
     * @param mixed $seeking
     */
    public function setSeeking($seeking)
    {
        $this->_seeking = $seeking;
    }

    /**
     * @return mixed
     */
    public function getBio()
    {
        return $this->_bio;
    }

    /**
     * @param mixed $bio
     */
    public function setBio($bio)
    {
        $this->_bio = $bio;
    }

    /**
     * @return mixed
     */
    public function getInterestAge()
    {
        return $this->_interestsAge;
    }

    /**
     * @param mixed $interestsAge
     */
    public function setInterestAge($interestsAge)
    {
        $this->_interestsAge = $interestsAge;
    }


}