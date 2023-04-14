<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit trips</title>
    <style>
    
    </style>
</head>
<body>
 <div class="container">
    <form action="Sua.php" method="post" >
            <div class="card-header">
                <h2>Thêm sản phẩm</h2>
            </div>
            <div class="form-group">
                <label  for="image">Image:</label><br>
                <input  type="text"  name="Image" class="form-control"><br>
            </div>
            <div class="form-group">
                <label  for="name Clothes">Name Clothes:</label><br>
                <input type="text"  name="Name_clothes" class="form-control"><br>
            </div>
            <div class="form-group">
                <label  for="sex">Sex: </label><br>
                <input  type="text"  name="Sex" class="form-control"><br>
            </div>
            <div class="form-group">
                <label  for="id_categories">Id_categories: </label><br>
                <input  type="number"  name="Id_categories" class="form-control"><br>
            </div>
            <div class="form-group">
                <label  for="created_at">Created_at:</label><br>
                <input   type="datetime-local"  name="Created_at" class="form-control"><br>
            </div>
        <br>
            <input  class="btn btn-success" name="submit" type="submit" value="Oki">

    </form>
</div>
</body>
</html>