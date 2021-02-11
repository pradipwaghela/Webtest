<?php
if  ($_SERVER['REQUEST_METHOD']=='POST'){
    $ename=$_POST["ename"];
    $email=$_POST["eemail"];
    $eno=$_POST["eno"];
    echo $ename."<br>"$email."<br>";
    echo $email;
    echo $eno;
}
?>