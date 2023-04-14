

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bootstrap-5.2.2-dist/css/bootstrap.min.css">
    <script src="/bootstrap-5.2.2-dist/js/jquery.min.js"></script>
    <script src="/bootstrap-5.2.2-dist/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Sửa</title>
</head>
<body>
    <?php 
        include('connect.php');
        $id=$_GET['id'];
        $sql_edit="SELECT*FROM  clothes where id_clothes=$id";
        $query_edit=mysqli_query($mysqli,$sql_edit);
        $row_edit=mysqli_fetch_assoc($query_edit);

        if(isset($_POST['submit'])){
             error_reporting(0);
            $image = $_POST["Image"];
            $name_clothes =$_POST["Name_clothes"];
            $sex = $_POST["Sex"];
            $id_categories = $_POST["Id_categories"];
            $update_at=$_POST['updated_at'];
            

        $sqli="UPDATE  clothes SET image='$image', name_clothes='$name_clothes',sex='$sex',id_categories=$id_categories, updated_at='$update_at', where id_clothes=$id"; 
        $query=mysqli_query($mysqli,$sqli);
        header('location: Show_clothes.php');
    }
    ?>
    <div class="container">
    <form action="Sua.php" method="post" >
            <div class="card-header">
                <h2>Sửa sản phẩm</h2>
            </div>
            <div class="form-group">
                <label  for="image">Image:</label><br>
                <input  type="text"  name="Image" class="form-control"required  value="<?php echo $row_edit['image'] ?>"><br>
            </div>
            <div class="form-group">
                <label  for="name Clothes">Name Clothes:</label><br>
                <input type="text"  name="Name_clothes" class="form-control" required  value="<?php echo $row_edit['name_clothes'] ?>"><br>
            </div>
            <div class="form-group">
                <label  for="sex">Sex: </label><br>
                <input  type="text"  name="Sex" class="form-control"required  value="<?php echo $row_edit['sex'] ?>"><br>
            </div>
            <div class="form-group">
                <label  for="id_categories">Id_categories: </label><br>
                <input  type="number"  name="Id_categories" class="form-control" required  value="<?php echo $row_edit['id_categories'] ?>"><br>
            </div>
            <div class="form-group">
                <label  for="updated_at">Update_at:</label><br>
                <input   type="datetime-local"  name="updated_at" class="form-control" required  value="<?php echo $row_edit['update_at'] ?>"><br>
            </div>
        <br>
            <input  class="btn btn-success" name="submit" type="submit" value="Oki">

    </form>
</div>
</body>
</html>