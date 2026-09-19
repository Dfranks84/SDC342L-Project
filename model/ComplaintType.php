<?php

/**
 * ComplaintType Model
 * Represents a complaint category in the complaint tracking application.
 */
class ComplaintType
{
    private $complaintTypeID;
    private $typeName;
    private $description;

    public function __construct(
        $complaintTypeID = null,
        $typeName = '',
        $description = ''
    ) {
        $this->complaintTypeID = $complaintTypeID;
        $this->typeName = $typeName;
        $this->description = $description;
    }

    public function getComplaintTypeID()
    {
        return $this->complaintTypeID;
    }

    public function setComplaintTypeID($complaintTypeID)
    {
        $this->complaintTypeID = $complaintTypeID;
    }

    public function getTypeName()
    {
        return $this->typeName;
    }

    public function setTypeName($typeName)
    {
        $this->typeName = $typeName;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }
}