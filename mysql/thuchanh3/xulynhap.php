<?php
    include("Connection.php");
    // $sql = "INSERT INTO tblships VALUE(?, ?)";
    // $stmt = mysqli_prepare($link,$sql);
    // mysqli_stmt_bind_param($stmt, "ss",$ma,$ten);
    // $ID = $_POST["txtID"];
    // $Name = $_POST["txtName"];
    // $sql = "SELECT ID FROM tblships WHERE ID = '".$ID."'";
    // $result = mysqli_query($link,$sql);
    // if($result=mysqli_num_rows($result)>0)
    //    echo "<script>alert('ID đã tồn tại') </script>";
    // else
    //     {
    //        mysqli_stmt_execute($stmt);
    //         echo "<script>alert('Thêm Thành công') </script>";
    //     }
    //     $stmt->close();
    //     $link->close();
        
    $sql = "INSERT INTO tblships VALUE(?, ?)";
    $stmt = $link->prepare($sql);
    $stmt->bind_param("ss",$ID, $Name);
    $ID = $_POST["txtID"];
    $Name = $_POST["txtName"];
    $sql = "SELECT ID FROM tblships WHERE ID = '".$ID."'";
    $result = $link->query($sql);
    if($result->num_rows > 0)
    echo "<script>alert('ID đã tồn tại') </script>";
    else
        {
            $stmt->execute();
            echo "<script>alert('Thêm Thành công') </script>";
        }
        $stmt->close();
        $link->close();
?>
