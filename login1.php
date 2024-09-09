<?php
session_start();
include_once("dbConn.inc");
extract($_GET);

$qry="select * from users where username = '$username' and password = '$password' and role = '$role'";
//echo $qry;
$d=new dbConn;
$rs = mysqli_query($d->conn, $qry);

if($rw = mysqli_fetch_row($rs)){
    $_SESSION["username"] = $username;
    $_SESSION["password"] = $passsword;
    $_SESSION["role"] = $role;


if(strcmp($role, "admin")==0)
{
    header("Location: admin-dashboard.php");
}
if(strcmp($role, "faculty")==0)
{
    header("Location: faculty-dashboard.php");
}
if(strcmp($role, "student")==0)
{
    header("Location: student-dashboard.php");
}
}
else
{
    header("Location: login.php");
}
?>