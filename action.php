<?php
if  ($_SERVER['REQUEST_METHOD']=='POST'){
    $ename=$_POST["ename"];
    $email=$_POST["eemail"];
    $eno=$_POST["eno"];
    $dob=$_POST["edob"];
    $gender=$_POST["Gender"];
    $line1=$_POST["el1"];
    $state=$_POST["state"];
    $city=$_POST["city"];
    $area=$_POST["area"];
    $pcode=$_POST["pcode"];
    $pos=$_POST["epos"];
    $esal=$_POST["esal"];
    $edoj=$_POST["edoj"];
    echo $ename."<br>";
    echo $email."<br>";
    echo $eno."<br>";
    echo $dob."<br>";
    echo $gender."<br>";
    echo $line1."<br>";
    echo $state."<br>";
    echo $city."<br>";
    echo $area."<br>";
    echo $pcode."<br>";
    echo $pos."<br>";
    echo $esal."<br>";
    echo $edoj."<br>";
}
?>