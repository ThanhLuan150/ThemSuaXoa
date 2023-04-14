<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm</title>
    <link rel="stylesheet" href="/bootstrap-5.2.2-dist/css/bootstrap.min.css">
    <script src="/bootstrap-5.2.2-dist/js/jquery.min.js"></script>
    <script src="/bootstrap-5.2.2-dist/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="container">
    <form action="Them.php" method="post" >
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
            <input type="submit" name="submit" value="Oki">

    </form>
</div>

 
</body>
</html>