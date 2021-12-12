<?php
session_start();
include('connectdb.php');

$sql = "SELECT * FROM product_1";
$result = mysqli_query($dbcon, $sql);
?>
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
                <h1 class="text-center">แสดงข้อมูล</h1>
                <hr>
                <a href="add_data.php" class="btn btn-primary"> + เพิ่มข้อมูล</a><br><br>
                <a href="add_data.php" class="btn btn-primary"> + เพิ่มข้อมูล</a><br><br>
                <?php
                if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
                ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Hie!</strong> <?php echo $_SESSION['status']; ?>
                    </div>
                <?php
                    unset($_SESSION['status']);
                }
                ?>
                <table class="table table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th>ลำดับที่</th>
                            <th>ชื่อสินค้า</th>
                            <th>ราคา</th>
                            <th>รูปภาพ</th>
                            <th>วันที่</th>
                        </tr>
                    </thead>
                    <?php
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { ?>
                            <tbody>
                                <tr class="text-center">
                                    <td><?php echo $row['id_product'] ?></td>
                                    <td><?php echo $row['pro_name'] ?></td>
                                    <td><?php echo $row['pro_price'] ?></td>
                                    <td><img src="img/<?php echo $row['pro_img'] ?>" width="100px" alt=""></td>
                                    <td><?php echo $row['date'] ?></td>
                                </tr>
                            </tbody>
                        <?php }
                    } else {  ?>
                        <tr>
                            <td colspan="6" class="text-center">ไม่พบข้อมูล</td>
                        </tr>

                    <?php } ?>
                </table>

            </div>
        </div>
    </div>
</body>

</html>