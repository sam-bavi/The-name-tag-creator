<?php
namespace App\Requests;

/**
 * Request Class
 */
class Request
{
    public $id;
    public $activation_date;
    public $deactivation_date;
    public $reason;
    public $tel_no;
    public $name;

    public function __construct($data = null)
    {
        if (is_array($data)) {
            $this->activation_date = $data['activation_date'];
            $this->deactivation_date = $data['deactivation_date'];
            $this->tel_no = $data['tel_no'];
            $this->reason = $data['reason'];
            $this->name = $data['name'];
        }
    }
}
