<?php

class DB
{
    var $servername = "";
    var $username = "";
    var $password = "";
    var $db_name = "";
    var $db_link = "";
    var $result = 0;

    function __construct($servername, $username, $password, $db_name)
    {
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;
        $this->db_name = $db_name;
    }

    function open()
    {
        $this->db_link = mysqli_connect($this->servername, $this->username, $this->password, $this->db_name);
    }

    function execute($query)
    {
        $this->result = mysqli_query($this->db_link, $query);
        return $this->result;
    }

    function getResult()
    {
        return mysqli_fetch_array($this->result);
    }

    function close()
    {
        mysqli_close($this->db_link);
    }
}
