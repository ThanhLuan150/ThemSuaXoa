
<?php
include('connect.php');

$id=$_GET['id'];

$sql= "DELETE FROM clothes where id_clothes =  $id;";

$query= mysqli_query($mysqli,$sql);

header('location: Show_clothes.php');
?>