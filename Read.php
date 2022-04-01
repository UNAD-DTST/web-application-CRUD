<?php
include("conexion.php");
$con=conectar();

$empleado=$_POST['empleado'];
$identificacion=$_POST['identificacion'];
$name=$_POST['name'];
$surname=$_POST['surname'];


$sql="INSERT INTO db VALUES('$empleado','$identificacion','$name','$surname')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: db.php");
    
}else {
}
?>