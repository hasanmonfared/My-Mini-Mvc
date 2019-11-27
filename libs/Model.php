<?php
class Model
{

    public $con;
    private $servername;
    private $dbname;
    private $username;
    private $password;

    public function __construct()
    {
        $this->detaileconect();
        $this->conecting();
    }

    public function detaileconect()
    {
        $this->servername = getenv('SERVERNAME');
        $this->dbname = getenv('DBNAME');
        $this->username = getenv('USERNAME');
        $this->password = getenv('PASSWORD');
    }

    public function conecting()
    {
        try {
            $this->con = new PDO("mysql:host=$this->servername;dbname=$this->dbname;", $this->username, $this->password);

            // set the PDO error mode to exception
            return $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            echo "Connected successfully";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    /**
     * IF $flag varibale equal 1 return fetch singe
     * IF $flag varibale equal 0 return FetchAll result
     */
    public function select($tablename, $fields, $conditions = 1, $flag = 0)
    {

        $con = $this->con;

        $sql = "SELECT $fields FROM $tablename WHERE  $conditions ";
        $fetch = $con->prepare($sql);
        $fetch->execute();
        // set the resulting array to associative
        $fetch->setFetchMode(PDO::FETCH_ASSOC);

        if ($flag = 0) {

            return ($fetch->fetchAll());

        } elseif ($flag = 1) {

            return ($fetch->fetch());
        }
    }

    public function insert($object, $tablename)
    {

        $con = $this->con;

        $keys = "";
        $values = "";

        foreach ($object as $key => $value) {
            $keys .= $key . " , ";
            $values .= "'" . $value . "'" . " , ";
        }

        $keys = rtrim($keys, ', ');
        $values = rtrim($values, ', ');

        $sql = "INSERT INTO $tablename ( $keys )
        VALUES ( $values )";

        $con->exec($sql);

    }
}
