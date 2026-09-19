<?php

require_once __DIR__ . '/../model/Database.php';
require_once __DIR__ . '/../model/Technician.php';

/**
 * Technician Controller
 * Handles CRUD operations for technician employees.
 */
class TechnicianController
{
    private $conn;

    public function __construct()
    {
        $this->conn = Database::connect();
    }

    // CREATE - Add a new technician employee.
    public function createTechnician(Technician $technician)
    {
        $sql = "INSERT INTO employees
                (user_id, first_name, last_name, email,
                 phone_extension, level, password)
                VALUES (?, ?, ?, ?, ?, ?, ?)";

        $stmt = $this->conn->prepare($sql);

        $userID = $technician->getUserID();
        $firstName = $technician->getFirstName();
        $lastName = $technician->getLastName();
        $email = $technician->getEmail();
        $phoneExtension = $technician->getPhoneExtension();
        $level = $technician->getLevel();
        $password = $technician->getPassword();

        $stmt->bind_param(
            "sssssss",
            $userID,
            $firstName,
            $lastName,
            $email,
            $phoneExtension,
            $level,
            $password
        );

        return $stmt->execute();
    }

    // READ - Get one technician by employee ID.
    public function getTechnicianByID($employeeID)
    {
        $sql = "SELECT * FROM employees
                WHERE employee_id = ?
                AND level = 'Technician'";

        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $employeeID);
        $stmt->execute();

        return $stmt->get_result()->fetch_assoc();
    }

    // READ - Get all technicians.
    public function getAllTechnicians()
    {
        $sql = "SELECT * FROM employees
                WHERE level = 'Technician'
                ORDER BY last_name, first_name";

        $result = $this->conn->query($sql);

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    // UPDATE - Update an existing technician.
    public function updateTechnician(Technician $technician)
    {
        $sql = "UPDATE employees
                SET user_id = ?,
                    first_name = ?,
                    last_name = ?,
                    email = ?,
                    phone_extension = ?,
                    level = ?,
                    password = ?
                WHERE employee_id = ?";

        $stmt = $this->conn->prepare($sql);

        $userID = $technician->getUserID();
        $firstName = $technician->getFirstName();
        $lastName = $technician->getLastName();
        $email = $technician->getEmail();
        $phoneExtension = $technician->getPhoneExtension();
        $level = $technician->getLevel();
        $password = $technician->getPassword();
        $employeeID = $technician->getEmployeeID();

        $stmt->bind_param(
            "sssssssi",
            $userID,
            $firstName,
            $lastName,
            $email,
            $phoneExtension,
            $level,
            $password,
            $employeeID
        );

        return $stmt->execute();
    }

    // DELETE - Delete a technician.
    public function deleteTechnician($employeeID)
    {
        $sql = "DELETE FROM employees
                WHERE employee_id = ?
                AND level = 'Technician'";

        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $employeeID);

        return $stmt->execute();
    }
}