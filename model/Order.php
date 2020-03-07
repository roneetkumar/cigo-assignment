<?php
class Order
{
    private $type = "";
    private $value = "";
    private $date = "";
    private $status = "";

    public function __construct()
    {
        $args = func_get_args(); //any function that calls this method can take an arbitrary number of parameters
        switch (func_num_args()) {
            //delegate to helper methods
            case 0:
                $this->construct0();
                break;
            case 2:
                $this->construct1($args[0], $args[1]);
                break;
            case 4:
                $this->construct2($args[0], $args[1], $args[2], $args[3]);
                break;
            default:
                trigger_error('Incorrect number of arguments for Foo::__construct', E_USER_WARNING);
                break;
        }
    }

    private function construct1($type = null, $value = null)
    {
        $this->type = $type;
        $this->value = $value;
        $this->date = date("Y-m-d h:i:s A");
        $this->status = "pending";
    }

    private function construct2($type = null, $value = null, $date = null, $status = null)
    {
        $this->type = $type;
        $this->value = $value;
        $this->date = $date;
        $this->status = $status;
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
