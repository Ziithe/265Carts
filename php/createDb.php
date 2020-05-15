<?php


class createDb
{
    public $servername;
    public $username;
    public $password;
    public $dbname;
    public $tablename;
    public $conn;

    //class constructor

    public function __construct(
        $dbname = 'heroku_6c6bbf07cf6c7ad',
        $tablename = 'products',
        $servername = 'us-cdbr-east-06.cleardb.net',
        $username = 'be62d97ed836ba',
        $password = '9dc7e225'
    )
    {
        $this->dbname = $dbname;
        $this->tablename = $tablename;
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;

        //create connection
        $this->conn = mysqli_connect($servername, $username, $password, $dbname);

        if (!$this->conn) {
            die("Connection failed:" . mysqli_connect_error());
        }
    }

//get priduct from db
    public function getData()
    {
        $sql = "SELECT * FROM $this->tablename";
        $result = mysqli_query($this->conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            return $result;
        }

    }
}