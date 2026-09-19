<?php

require_once __DIR__ . '/../model/Database.php';
require_once __DIR__ . '/../model/Customer.php';

/**
 * Customer Controller
 * Handles CRUD operations for customers.
 */
class CustomerController
{
    private $conn;

    public function __construct()
    {
        $this->conn = Database::connect();
    }

    // CREATE - Add a new customer.
    public function createCustomer(Customer $customer)
    {
        $sql = "INSERT INTO customers
                (email, first_name, last_name, street_address, city,
                 state, zip_code, phone_number, password)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $this->conn->prepare($sql);

        $email = $customer->getEmail();
        $firstName = $customer->getFirstName();
        $lastName = $customer->getLastName();
        $streetAddress = $customer->getStreetAddress();
        $city = $customer->getCity();
        $state = $customer->getState();
        $zipCode = $customer->getZipCode();
        $phoneNumber = $customer->getPhoneNumber();
        $password = $customer->getPassword();

        $stmt->bind_param(
            "sssssssss",
            $email,
            $firstName,
            $lastName,
            $streetAddress,
            $city,
            $state,
            $zipCode,
            $phoneNumber,
            $password
        );

        return $stmt->execute();
    }

    // READ - Get one customer by ID.
    public function getCustomerByID($customerID)
    {
        $sql = "SELECT * FROM customers WHERE customer_id = ?";

        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $customerID);
        $stmt->execute();

        return $stmt->get_result()->fetch_assoc();
    }

    // READ - Get all customers.
    public function getAllCustomers()
    {
        $sql = "SELECT * FROM customers ORDER BY last_name, first_name";

        $result = $this->conn->query($sql);

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    // UPDATE - Update an existing customer.
    public function updateCustomer(Customer $customer)
    {
        $sql = "UPDATE customers
                SET email = ?,
                    first_name = ?,
                    last_name = ?,
                    street_address = ?,
                    city = ?,
                    state = ?,
                    zip_code = ?,
                    phone_number = ?,
                    password = ?
                WHERE customer_id = ?";

        $stmt = $this->conn->prepare($sql);

        $email = $customer->getEmail();
        $firstName = $customer->getFirstName();
        $lastName = $customer->getLastName();
        $streetAddress = $customer->getStreetAddress();
        $city = $customer->getCity();
        $state = $customer->getState();
        $zipCode = $customer->getZipCode();
        $phoneNumber = $customer->getPhoneNumber();
        $password = $customer->getPassword();
        $customerID = $customer->getCustomerID();

        $stmt->bind_param(
            "sssssssssi",
            $email,
            $firstName,
            $lastName,
            $streetAddress,
            $city,
            $state,
            $zipCode,
            $phoneNumber,
            $password,
            $customerID
        );

        return $stmt->execute();
    }

    // DELETE - Delete a customer.
    public function deleteCustomer($customerID)
    {
        $sql = "DELETE FROM customers WHERE customer_id = ?";

        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $customerID);

        return $stmt->execute();
    }
}