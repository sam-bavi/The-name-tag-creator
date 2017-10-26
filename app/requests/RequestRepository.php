<?php
namespace App\Requests;

use PDO;
use App\Requests\Request;

class RequestRepository
{
    protected $db_host = '127.0.0.1:3306';
    protected $db_name = 'encounters';
    protected $db_user = 'root';
    protected $db_pass = 'password';

    public function __construct(PDO $db = null)
    {
        $this->db = $db;
        if ($this->db === null) {
            $dsn = "mysql:host={$this->db_host};dbname={$this->db_name}";
            $this->db = new PDO(
                $dsn,
                $this->db_user,
                $this->db_pass
            );
            $this->db->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );
        }
    }

    public function save(Request $request)
    {
        $statement = $this->db->prepare(
            'insert into requests
            (activation_date, deactivation_date, name, tel_no, reason)
            values
            (:activation_date, :deactivation_date, :name, :tel_no, :reason)'
        );
        $statement->bindParam(':activation_date', $request->activation_date);
        $statement->bindParam(':deactivation_date', $request->deactivation_date);
        $statement->bindParam(':name', $request->name);
        $statement->bindParam(':tel_no', $request->tel_no);
        $statement->bindParam(':reason', $request->reason);

        $statement->execute();
    }

    public function countAll()
    {
        $count = $this->db->query('select count(*) from requests')->fetchColumn();
        return $count;
    }
    public function getAll()
    {
        $sth = $this->db->prepare("SELECT * FROM requests");
        $sth->execute();
        
        /* Fetch all of the values of the first column */
        $result = $sth->fetchAll();
        #print_r($result);
        return $result;
    }
}
