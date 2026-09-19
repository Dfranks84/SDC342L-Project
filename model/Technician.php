<?php

/**
 * Technician Model
 * Represents a technician employee from the employees table.
 */
class Technician
{
    private $employeeID;
    private $userID;
    private $firstName;
    private $lastName;
    private $email;
    private $phoneExtension;
    private $level;
    private $password;

    public function __construct(
        $employeeID = null,
        $userID = '',
        $firstName = '',
        $lastName = '',
        $email = '',
        $phoneExtension = '',
        $level = 'Technician',
        $password = ''
    ) {
        $this->employeeID = $employeeID;
        $this->userID = $userID;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->phoneExtension = $phoneExtension;
        $this->level = $level;
        $this->password = $password;
    }

    public function getEmployeeID()
    {
        return $this->employeeID;
    }

    public function setEmployeeID($employeeID)
    {
        $this->employeeID = $employeeID;
    }

    public function getUserID()
    {
        return $this->userID;
    }

    public function setUserID($userID)
    {
        $this->userID = $userID;
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

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPhoneExtension()
    {
        return $this->phoneExtension;
    }

    public function setPhoneExtension($phoneExtension)
    {
        $this->phoneExtension = $phoneExtension;
    }

    public function getLevel()
    {
        return $this->level;
    }

    public function setLevel($level)
    {
        $this->level = $level;
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