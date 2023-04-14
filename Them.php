<?php 
 include('connect.php') ;

if(isset($_POST['submit'])){
    $image = $_POST["Image"];
    $name_clothes =$_POST["Name_clothes"];
    $sex = $_POST["Sex"];
    $id_categories = $_POST["Id_categories"];
    $created_at =$_POST["Created_at"];

    $sqli="INSERT into clothes(image,name_clothes,sex,id_categories,created_at) values('$image','$name_clothes','$sex','$id_categories','$created_at')"; 
    $query=mysqli_query($mysqli,$sqli);
}
?>