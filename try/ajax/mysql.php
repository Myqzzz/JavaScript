<?php


class Mysql
{
    private static $host="localhost";
    private static $user="root";
    private static $password="123456";
    private static $dbName="test";                     //���ݿ���
    private static $charset="utf8";                    //�ַ�����
    private static $port="3306";
    private $conn = null;
    function __construct()
    {
        $this->conn = new mysqli(self::$host,self::$user,
            self::$password,self::$dbName,self::$port);
        if (!$this->conn) {
            die("the database connection failed.<br>");
        } else {
            echo "the database connection was successful.<br>";
        }
        $this->conn->query("set names ".self::$charset);
    }

    function sql($sql)
    {
        $res = $this->conn->query($sql);
        if (!$res) {
            echo "the data operation failed.<br>";
        } else {
            if ($this->conn->affected_rows > 0) {
                return $res;
            } else {
                echo "0 rows are affected.<br>";
            }
        }
    }

    function getResultNum($sql)
    {
        $res = $this->conn->query($sql);
        return mysqli_num_rows($res);
    }

    public function close()
    {
        @mysqli_close($this->conn);
    }
}
