<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="./show-trip.css"> -->
    <title>Hiển thị Sản phẩm</title>
    <script src="/bootstrap-5.2.2-dist/js/jquery.min.js"></script>
    <script src="/bootstrap-5.2.2-dist/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        .img4{
            height: 50px;
            width: 50px;
        }
        .bt2{
        background: #F2DFE3;
        border-radius: 20px;
        border: 1px solid  #F2DFE3 ;
        height:30px;
        width: 50px;
        font-family: 'Inter';
        font-style: normal;
        font-weight: 400;
        font-size: 14px;
        line-height: 17px;
        color: black;
    }
    .bt3{
        background: #F2DFE3;
        border-radius: 20px;
        border: 1px solid  #F2DFE3 ;
        height:30px;
        width: 100px;
        font-family: 'Inter';
        font-style: normal;
        font-weight: 400;
        font-size: 14px;
        line-height: 17px;
       color: black;
    }
    .a1{
        color:black;
    }

    </style>
</head>
<body>
    <br>
    <form action="form-add.php" method="post">
            <a  href="Form_Add.php"><input class="bt3" type="button" value="Thêm mới" ></a>
    </form>
        <br>
        <br>
    <table class="table" border="1">
        <thead >
            <tr >
                <td>Clothes ID</td>
                <td>Image</td>
                <td>Name Clothes</td>
                <td>Sex</td>
                <td>Description</td>
                <td>Id_categories</td>
                <td>Price</td>
                <td>Created_at</td>
                <td>Updated_at</td>
                <td>Action</td>
            </tr>
            
        </thead>
        <tbody>
        <?php 
            include ("connect.php");

            $sql="SELECT*FROM categories inner join clothes on clothes.id_categories= .categories.id_categories ;";
            $result = mysqli_query($mysqli,$sql);
            if ($result->num_rows > 0) { ?>
            <?php     while($row = $result->fetch_assoc()){ ?>
                <tbody>
                <tr >
                    <td><?php echo $row["id_clothes"]; ?></td>
                    <td><img class="img4" src="<?php echo $row["image"]; ?>" alt=""></td>
                    <td><?php echo $row["name_clothes"]; ?></td>
                    <td><?php echo $row["sex"]; ?></td>
                    <td><?php echo $row["description"]; ?></td>
                    <td><?php echo $row["id_categories"]; ?></td>
                    <td><?php echo $row["rent_prices"]; ?></td>
                    <td><?php echo $row["created_at"]; ?></td>
                    <td><?php echo $row["updated_at"]; ?></td>
                    <td>
                        <button class="bt2"><a onclick="return edit()" href="Sua.php?&id=<?php echo $row['id_clothes']; ?>">sửa</a></button>  
                        <button class="bt2"><a class="a1" href="Xoa.php?id=<?php echo $row["id_clothes"];?>">Xóa</a></button>
                    </td>
                </tr>
            </tbody>
            <?php  }
                    } else {
                        echo "Không có kết quả để hiển thị ra";
                }
            $mysqli->close();
            ?>
    </table>
</body>
</html>