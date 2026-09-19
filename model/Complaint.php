<?php

/**
 * Complaint Model
 * Represents a complaint from the complaints table.
 */
class Complaint
{
    private $complaintID;
    private $customerID;
    private $productServiceID;
    private $complaintTypeID;
    private $technicianID;
    private $complaintDescription;
    private $imagePath;
    private $technicianNotes;
    private $status;
    private $dateCreated;
    private $resolutionDate;
    private $resolutionNotes;

    public function __construct(
        $complaintID = null,
        $customerID = null,
        $productServiceID = null,
        $complaintTypeID = null,
        $technicianID = null,
        $complaintDescription = '',
        $imagePath = null,
        $technicianNotes = null,
        $status = 'Open',
        $dateCreated = null,
        $resolutionDate = null,
        $resolutionNotes = null
    ) {
        $this->complaintID = $complaintID;
        $this->customerID = $customerID;
        $this->productServiceID = $productServiceID;
        $this->complaintTypeID = $complaintTypeID;
        $this->technicianID = $technicianID;
        $this->complaintDescription = $complaintDescription;
        $this->imagePath = $imagePath;
        $this->technicianNotes = $technicianNotes;
        $this->status = $status;
        $this->dateCreated = $dateCreated;
        $this->resolutionDate = $resolutionDate;
        $this->resolutionNotes = $resolutionNotes;
    }

    public function getComplaintID()
    {
        return $this->complaintID;
    }

    public function setComplaintID($complaintID)
    {
        $this->complaintID = $complaintID;
    }

    public function getCustomerID()
    {
        return $this->customerID;
    }

    public function setCustomerID($customerID)
    {
        $this->customerID = $customerID;
    }

    public function getProductServiceID()
    {
        return $this->productServiceID;
    }

    public function setProductServiceID($productServiceID)
    {
        $this->productServiceID = $productServiceID;
    }

    public function getComplaintTypeID()
    {
        return $this->complaintTypeID;
    }

    public function setComplaintTypeID($complaintTypeID)
    {
        $this->complaintTypeID = $complaintTypeID;
    }

    public function getTechnicianID()
    {
        return $this->technicianID;
    }

    public function setTechnicianID($technicianID)
    {
        $this->technicianID = $technicianID;
    }

    public function getComplaintDescription()
    {
        return $this->complaintDescription;
    }

    public function setComplaintDescription($complaintDescription)
    {
        $this->complaintDescription = $complaintDescription;
    }

    public function getImagePath()
    {
        return $this->imagePath;
    }

    public function setImagePath($imagePath)
    {
        $this->imagePath = $imagePath;
    }

    public function getTechnicianNotes()
    {
        return $this->technicianNotes;
    }

    public function setTechnicianNotes($technicianNotes)
    {
        $this->technicianNotes = $technicianNotes;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;
    }

    public function getResolutionDate()
    {
        return $this->resolutionDate;
    }

    public function setResolutionDate($resolutionDate)
    {
        $this->resolutionDate = $resolutionDate;
    }

    public function getResolutionNotes()
    {
        return $this->resolutionNotes;
    }

    public function setResolutionNotes($resolutionNotes)
    {
        $this->resolutionNotes = $resolutionNotes;
    }
}