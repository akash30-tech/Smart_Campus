<?php
class dbConn{
    var $conn;
    function __construct(){
        $this->conn = mysqli_connect("localhost","root","");
        mysqli_select_db($this->conn, "smart_campus");
    }
}