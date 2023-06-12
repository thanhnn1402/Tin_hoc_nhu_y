<?php 
    require("../../config/config.php");
    
    if(!empty($adminlogged)) {
        $id = isset($_GET['id']) ? $_GET['id'] : '';

        if(!empty($id)) {
            $stmt_delete = $conn->prepare("DELETE FROM `san_pham` WHERE id = ?");
            $stmt_delete->bind_param("s", $id);
            if($stmt_delete->execute()) {
                echo "<script>
                        alert('Xóa sản phẩm thành công!');
                        window.location.href = 'product-list.php';
                    </script>";
            } else {
                echo "<script>
                        alert('Có lỗi trong quá trình xử lý, vui lòng thử lại!');
                    </script>";
            }


        }
    } else {
        header("location: ../auth-login.php");
    }
?>