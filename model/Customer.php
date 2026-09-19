<?php

/**
 * Customer Model
 * Represents a customer in the complaint tracking application.
 * Contains customer properties and getter/setter methods.
 */
class Customer
{
    private $customerID;
    private $email;
    private $firstName;
    private $lastName;
    private $streetAddress;
    private $city;
    private $state;
    private $zipCode;
    private $phoneNumber;
    private $password;

    public function __construct(
        $customerID = null,
        $email = '',
        $firstName = '',
        $lastName = '',
        $streetAddress = '',
        $city = '',
        $state = '',
        $zipCode = '',
        $phoneNumber = '',
        $password = ''
    ) {
        $this->customerID = $customerID;
        $this->email = $email;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->streetAddress = $streetAddress;
        $this->city = $city;
        $this->state = $state;
        $this->zipCode = $zipCode;
        $this->phoneNumber = $phoneNumber;
        $this->password = $password;
    }

    public function getCustomerID()
    {
        return $this->customerID;
    }

    public function setCustomerID($customerID)
    {
        $this->customerID = $customerID;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getStreetAddress()
    {
        return $this->streetAddress;
    }

    public function setStreetAddress($streetAddress)
    {
        $this->streetAddress = $streetAddress;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }

    public function getState()
    {
        return $this->state;
    }

    public function setState($state)
    {
        $this->state = $state;
    }

    public function getZipCode()
    {
        return $this->zipCode;
    }

    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
    }

    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }
}