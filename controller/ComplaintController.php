<?php

require_once __DIR__ . '/../model/Database.php';
require_once __DIR__ . '/../model/Complaint.php';

/**
 * Complaint Controller
 * Handles CRUD operations for complaints.
 */
class ComplaintController
{
    private $conn;

    public function __construct()
    {
        $this->conn = Database::connect();
    }

    // CREATE - Add a new complaint.
    public function createComplaint(Complaint $complaint)
    {
        $sql = "INSERT INTO complaints
                (customer_id, product_service_id, complaint_type_id,
                 technician_id, complaint_description, image_path,
                 technician_notes, status, resolution_date, resolution_notes)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $this->conn->prepare($sql);

        $customerID = $complaint->getCustomerID();
        $productServiceID = $complaint->getProductServiceID();
        $complaintTypeID = $complaint->getComplaintTypeID();
        $technicianID = $complaint->getTechnicianID();
        $complaintDescription = $complaint->getComplaintDescription();
        $imagePath = $complaint->getImagePath();
        $technicianNotes = $complaint->getTechnicianNotes();
        $status = $complaint->getStatus();
        $resolutionDate = $complaint->getResolutionDate();
        $resolutionNotes = $complaint->getResolutionNotes();

        $stmt->bind_param(
            "iiiissssss",
            $customerID,
            $productServiceID,
            $complaintTypeID,
            $technicianID,
            $complaintDescription,
            $imagePath,
            $technicianNotes,
            $status,
            $resolutionDate,
            $resolutionNotes
        );

        return $stmt->execute();
    }

    // READ - Get one complaint by ID.
    public function getComplaintByID($complaintID)
    {
        $sql = "SELECT * FROM complaints WHERE complaint_id = ?";

        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $complaintID);
        $stmt->execute();

        return $stmt->get_result()->fetch_assoc();
    }

    // READ - Get all complaints.
    public function getAllComplaints()
    {
        $sql = "SELECT * FROM complaints ORDER BY date_created DESC";

        $result = $this->conn->query($sql);

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    // UPDATE - Update an existing complaint.
    public function updateComplaint(Complaint $complaint)
    {
        $sql = "UPDATE complaints
                SET customer_id = ?,
                    product_service_id = ?,
                    complaint_type_id = ?,
                    technician_id = ?,
                    complaint_description = ?,
                    image_path = ?,
                    technician_notes = ?,
                    status = ?,
                    resolution_date = ?,
                    resolution_notes = ?
                WHERE complaint_id = ?";

        $stmt = $this->conn->prepare($sql);

        $customerID = $complaint->getCustomerID();
        $productServiceID = $complaint->getProductServiceID();
        $complaintTypeID = $complaint->getComplaintTypeID();
        $technicianID = $complaint->getTechnicianID();
        $complaintDescription = $complaint->getComplaintDescription();
        $imagePath = $complaint->getImagePath();
        $technicianNotes = $complaint->getTechnicianNotes();
        $status = $complaint->getStatus();
        $resolutionDate = $complaint->getResolutionDate();
        $resolutionNotes = $complaint->getResolutionNotes();
        $complaintID = $complaint->getComplaintID();

        $stmt->bind_param(
            "iiiissssssi",
            $customerID,
            $productServiceID,
            $complaintTypeID,
            $technicianID,
            $complaintDescription,
            $imagePath,
            $technicianNotes,
            $status,
            $resolutionDate,
            $resolutionNotes,
            $complaintID
        );

        return $stmt->execute();
    }

    // DELETE - Delete a complaint.
    public function deleteComplaint($complaintID)
    {
        $sql = "DELETE FROM complaints WHERE complaint_id = ?";

        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $complaintID);

        return $stmt->execute();
    }
}