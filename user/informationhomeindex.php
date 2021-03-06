<?php
include('../config/config.php');
?>

<head>
    <title>Thông tin căn hộ</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/lightbox.min.css">
    <script type="text/javascript" src="./js/lightbox-plus-jquery.min.js"></script>
    <style>
        #gallery {
            margin-top: 10px;
        }

        #gallery ul {
            margin: 0;
            padding: 0;
        }

        #gallery ul li {
            width: 150px;
            float: left;
            list-style: none;
            margin-right: 5px;
            margin-bottom: 5px;
            height: 100px;
            text-align: center;
            padding: 3px;
            border-radius: 8px;
            border: 2px solid #355C7D;
            background: #fafafb;
        }

        #gallery ul li img {
            max-width: 100%;
            max-height: 100%;
            vertical-align: middle;
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
        }
    </style>
</head>
<div class="container-xxl bg-white p-0">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid nav-bar bg-transparent">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
            <a href="homeindex.php" class="navbar-brand d-flex align-items-center text-center">
                <div class="icon p-2 me-2">
                    <img class="img-fluid" src="img/icon-deal.png" alt="Icon" style="width: 30px; height: 30px;">
                </div>
                <h1 class="m-0 text-primary">Archiiro</h1>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                    <a href="homeindex.php" class="nav-item nav-link">Trang chủ</a>
                    <a href="about.html" class="nav-item nav-link">Chúng tôi</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Bất động sản</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="property-list.html" class="dropdown-item active">Property List</a>
                            <a href="property-type.html" class="dropdown-item">Property Type</a>
                            <a href="property-agent.html" class="dropdown-item">Property Agent</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Trang</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="404.html" class="dropdown-item">404 Error</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Liên hệ</a>
                </div>
                <a href="" class="btn btn-primary px-3 d-none d-lg-flex">Add Property</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid header bg-white p-0">
        <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
            <div class="col-md-6 p-5 mt-lg-5">
                <h1 class="display-5 animated fadeIn mb-4">Property List</h1>
            </div>
            <div class="col-md-6 animated fadeIn">
                <img class="img-fluid" src="img/header.jpg" alt="">
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Search Start -->
    <div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
        <div class="container">
            <div class="row g-2">
                <div class="col-md-10">
                    <div class="row g-2">
                        <div class="col-md-4">
                            <input type="text" class="form-control border-0 py-3" placeholder="Search Keyword">
                        </div>
                        <div class="col-md-4">
                            <select class="form-select border-0 py-3">
                                <option selected>Property Type</option>
                                <option value="1">Property Type 1</option>
                                <option value="2">Property Type 2</option>
                                <option value="3">Property Type 3</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <select class="form-select border-0 py-3">
                                <option selected>Location</option>
                                <option value="1">Location 1</option>
                                <option value="2">Location 2</option>
                                <option value="3">Location 3</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-dark border-0 w-100 py-3">Search</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Search End -->


    <!-- Property List Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                        <h2 class="mb-3">Thông tin chi tiết</h2>
                    </div>
                </div>

            </div>
            <?php
            $idhome = $_GET['id_home'];
            $sql1 = "SELECT * FROM `tb_home` WHERE id_home = '$idhome'";
            $res1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_assoc($res1);
            $idtypehome = $row1['id_typeHome'];
            $sql2 = "SELECT * FROM `tb_typehome` WHERE id_typeHome = '$idtypehome'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_assoc($res2);
            $nametypehome = $row2['name_typeHome'];
            ?>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img style="width:100%; height:350px;" class="" src="../img/<?php echo $row1['image'] ?>" alt="Đéo có ảnh thêm mệt vl"></a>
                                </div>
                            </div>
                        </div>
                        <div style="padding-top:0" class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div style="transform: translateY(-0.6rem);">
                                <h1><?php echo $row1['name_home'] ?></h1>
                            </div>
                            <h6>Loại nhà: <?php echo $nametypehome ?></h1>
                            </h6>
                            <label>Giá: 13.000.000</label></br>
                            <div id="gallery">
                                <ul>
                                    <li><a href="../img/<?php echo $row1['image2'] ?>" data-lightbox="mygallery"><img src="../img/<?php echo $row1['image2'] ?>" /></a></li>
                                    <li><a href="../img/<?php echo $row1['image3'] ?>" data-lightbox="mygallery"><img src="../img/<?php echo $row1['image3'] ?>" /></a></li>
                                    <li><a href="../img/<?php echo $row1['image4'] ?>" data-lightbox="mygallery"><img src="../img/<?php echo $row1['image4'] ?>" /></a></li>
                                    <li><a href="../img/<?php echo $row1['image5'] ?>" data-lightbox="mygallery"><img src="../img/<?php echo $row1['image5'] ?>" /></a></li>
                                </ul>
                            </div>

                            <div style="margin-top:205px; padding-left: 20px;"><a class="btn btn-primary" href="request.php?id_home=<?=$_GET['id_home'];?>">Yêu cầu đặt cọc</a></div>
                        </div>


                        <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <h2>Mô tả</h2>
                            <p><?php echo $row1['description'] ?></p>
                        </div>
                        <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <h4>Căn hộ liên quan</h4>
                            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                                <?php
                                $sql = "SELECT * FROM `tb_home` WHERE  id_typeHome = '$idtypehome'";
                                $qr = mysqli_query($conn, $sql);
                                if ($qr) {
                                    while ($row = mysqli_fetch_assoc($qr)) {
                                        ?>
                                                <div class="testimonial-item bg-light rounded p-3">
                                                    <div class="bg-white border rounded p-4">                                                                   
                                                        <div class="d-flex align-items-center">
                                                            <img style="width:200px; height:200px;" class="img-fluid rounded" src="../img/<?= $row['image'] ?>" style="width: 45px; height: 45px;">
                                                            <div class="ps-3">
                                                                <h6 class="fw-bold mb-1"><?= $row['name_home'] ?></h6>
                                                                <a href="./informationhomeindex.php?id_home=<?= $row['id_home'] ?>">Chi tiết</a>
                                                               
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        <?php
                                            }
                                        }
                                        ?>
                            </div>
                            </div>
                        </div>


                    <!-- Hết phần hiển thị -->
                </div>
            </div>
            <!-- Property List End -->


            <!-- Footer Start -->
            <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="container py-5">
                    <div class="row g-5">
                        <div class="col-lg-12 col-md-6">
                            <h5 class="text-white mb-4">Liên lạc</h5>
                            <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>175 Tây Sơn, Đống Đa, Hà Nội</p>
                            <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+0346785893</p>
                            <p class="mb-2"><i class="fa fa-envelope me-3"></i>aqdz01@gmail.com</p>
                            <div style="margin-left:44%;" class="d-flex pt-6">
                                <a class="btn btn-outline-light btn-social" href="https://twitter.com/QuauTn"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/quanqueo25"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light btn-social" href="https://www.youtube.com/watch?v=byJEgtVJxk0&t=12s"><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-outline-light btn-social" href="https://www.youtube.com/watch?v=byJEgtVJxk0&t=12s"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="copyright">
                        <div class="row">
                            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                                &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.

                                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                                Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                            </div>
                            <div class="col-md-6 text-center text-md-end">
                                <div class="footer-menu">
                                    <a href="">Home</a>
                                    <a href="">Cookies</a>
                                    <a href="">Help</a>
                                    <a href="">FQAs</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->


            <!-- Back to Top -->
            <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
       