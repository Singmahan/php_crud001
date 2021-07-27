<?php 
    session_start();
    include('connectdb.php');

    $pro_name = $_POST['pro_name'];
    $pro_price = $_POST['pro_price'];

    // img upload 
    $ext = pathinfo(basename($_FILES['pro_img']['name']), PATHINFO_EXTENSION);
    $new_img_name = 'img_'.uniqid().".".$ext;
    $img_path = "img/";
    $upload_path = $img_path.$new_img_name;
    $success = move_uploaded_file($_FILES['pro_img']['tmp_name'], $upload_path);

    if($success == FALSE){
        echo "ไม่สามารถ Upload รูปภาพได้";
        exit();
    }

    $pro_img = $new_img_name;

    $sql = "INSERT INTO product_1(pro_name, pro_price, pro_img) VALUES ('$pro_name','$pro_price','$pro_img')";
    $result = mysqli_query($dbcon, $sql);

    if($result){
        $_SESSION['status'] = "เพิ่มข้อมูลสำเร็จ !!!";
        header("Location: show_data.php");
    }else{
        $_SESSION['status'] = "เพิ่มข้อมูลไม่สำเร็จ !!!";
        header("Location: show_data.php");
    }

?>