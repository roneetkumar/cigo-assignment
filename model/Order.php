<?php
class Order
{
    private $type = "";
    private $value = "";
    private $date = "";
    private $status = "";

    public function __construct($type = null, $value = null)
    {
        $this->type = $type;
        $this->value = $value;
        $this->date = date("Y-m-d h:i:s A");
        $this->status = "pending";
    }

    /**
     * Set the value of date
     *
     * @return  self
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Get the value of date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Get the value of value
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Get the value of type
     */
    public function getType()
    {
        return $this->type;
    }
}
