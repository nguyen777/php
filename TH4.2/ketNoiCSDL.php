<?php 
    const host = "localhost";
    const userName = "root";
    const password = "27102001";
    const database = "QLSV";

    #tạo kết nối
    $conn = new mysqli(host,userName,password,database);

    #kiểm tra kết nối
    if($conn->connect_error) {
        die("kết nối thất bại");
    }

    // tạo cơ sở dữ liệu
    // $sql = "CREATE DATABASE QLBanHang";
    // if($conn->query($sql)==TRUE) {
    //     echo "tạo kết nối thành công";
    // } else {
    //     echo "tạo kết nối không thành công" . $conn ->connect_error;
    // }


