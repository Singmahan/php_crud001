<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>เพิ่มข้อมูล</title>
</head>

<body>
    <div class="container mt-3">
        <div class="row">
            <div col-md-6>
                <h1 class="text-center">เพิ่มข้อมูล</h1>
                <hr>
                
                <form action="add_data_db.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">ชื่อสินค้า</label>
                        <input type="text" name="pro_name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">ราคา</label>
                        <input type="text" name="pro_price" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">รูปภาพ</label>
                        <input type="file" name="pro_img" class="form-control" required>
                    </div>
                    <div class="form-group"><br>
                        <input type="submit" name="submit" class="btn btn-success form-control" value="เพิ่มข้อมูล">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>