<?php
require('./admin/config/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/img/rel-icon.ico">
    <title>TIN HỌC NHƯ Ý</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/style-about.css">
</head>
</head>

<body>
    <div class="wrapper">
        <!-- Start header -->
        <?php
        require('./partials/header.php')
        ?>
        <!-- End header -->

        <!-- Start main content -->
        <div class="main-content">
            <div class="about-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h1 class="about-content__title">Giới Thiệu</h1>
                                    
                            <p>
                                Công ty TNHH TM&DV Tin Học Như Ý được thành lập vào năm 2018 với định hướng chuyên nghiệp và mục tiêu kết hợp sự hiểu biết về nghiệp vụ, công nghệ, phương thức hỗ trợ khách hàng và kinh nghiệm thực tế để tạo ra các sản phẩm và dịch vụ chất lượng cao cho thị trường
                                Mục tiêu của Tin Học Như Ý là trở thành một công ty uy tín trong lĩnh vực cung cấp các sản phẩm công nghệ thông minh, các phần mềm ứng dụng CNTT và các giải pháp phục vụ cho vấn đề quản trị.Với sự chuyên nghiệp này Tin Học Như Ý sẽ cung cấp cho các khách hàng các sản phẩm và dịch vụ ngày càng tốt hơn.
                                “vì sự thành công và ưu tiên của khách hàng” là phương châm hành động của Tin Học Như Ý hướng tới khách hàng. Bằng nỗ lực và sự tận tụy của mỗi cá nhân và của toàn công ty, dựa trên cơ sở hiểu biết sâu sắc nhu cầu của khách hàng và năng lực sáng tạo không ngừng sẽ mang lại thành công và hiệu quả cho khách hàng bằng các sản phẩm và dịch vụ chất lượng cao của Tin Học Như Ý
                                Một số các loại hình dịch vụ và khách hàng có thể lựa chọn và tìm hiểu : chuyên cung cấp tư vấn, triển khai các giải pháp công nghệ và ứng dụng CNTT : Máy tính, Camera giám sát, Hệ thống mạng, Wifi chuyên dụng, Phần mềm quản lý, Thiết bị bán hàng, Phát triển Web, chuyển đổi số,…. Tất cả sẽ được đội ngũ các nhân viên công ty tư vấn và hỗ trợ phù hợp
                            </p>
                        </div>

                        <div class="col-md-6">
                            <img src="./assets/img/snapedit_1684727180978.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End main content -->

        <!-- Start footer -->
        <?php
        require('./partials/footer.php')
        ?>
        <!-- End footer -->
    </div>

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>

    <!-- Bootstrap Bundle JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!-- Slick Carousel JS -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.js"></script>

    <!-- Main JS -->
    <script src="./assets/js/main.js"></script>

    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>
</body>

</html>