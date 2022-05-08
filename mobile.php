<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhonesShop</title>
    <link rel="icon" href="./assets/img/logomain.png" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/grid.css">
    <link rel="stylesheet" href="./assets/css/reponsive.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.1.1-web/css/all.css">
</head>
<body>
    <!-- Header -->
    <div class="header">
        <div class="grid wide">
            <div class="header-container">
                <label for="header-mobile-menu" class="header__mobile-menu">
                    <i class="header__mobile-menu-icon fa-solid fa-bars"></i>
                </label>
                <input type="checkbox" hidden id="header-mobile-menu" class="header__menu-checkbox">
                <label for="header-mobile-menu" class="header-menu-overlay"></label>
                <label for="header-mobile-search" class="header__mobile-search">
                    <i class="header__mobile-search-icon fa-solid fa-magnifying-glass"></i>
                </label>
                <input type="checkbox" hidden id="header-mobile-search" class="header__search-checkbox">
                <label for="header-mobile-search" class="header-search-overlay"></label>

                <div class="header-logo ">
                    <a href="index.php"><img src="./assets/img/logomain.png" alt="" class="header-logo__img"></a>
                </div>

                <ul class="header__menu-list">
                    <div class="user__moblie-info">
                        <img src="./assets/img/avatar.png" alt="" class="navbar__user-img">
                        <span class="navbar__user-name">Tượng Văn Trưng</span>
                    </div>
                    
                    <li class="header__menu-item">
                        <a href="">Tài khoản của tôi</a>
                    </li>
                    <li class="header__menu-item">
                        <a href="">Địa chỉ của tôi</a>
                    </li>
                    <li class="header__menu-item">
                        <a href="">Đơn mua</a>
                    </li>
                    <li class="header__menu-item">
                        <a href="">Đăng xuất</a>
                    </li>
                </ul>

                <div class="header-search hide-on-mobile">
                    <div class="search-box">
                       <div class="search-box__btn">
                            <i class="search-box__icon fa-solid fa-magnifying-glass"></i>
                       </div>
                       <input type="text" placeholder="Bạn cần tìm gì?" class="search-box__input">
                    </div>
                </div>
    
                <div class="header-about hide-on-mobile-tablet">
                    <a href="" class="about-item about-1">
                        <div class="about-item__icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="about-item__content">
                            <p class="">Gọi mua hàng<br /><span>1800.0000</span></p>
                        </div>
                    </a>
                    <a href="" class="about-item about-2">
                        <div class="about-item__icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="about-item__content">
                            <p class="">Cửa hàng <br />gần bạn</p>
                        </div>
                    </a>
                    <a href="" class="about-item about-3">
                        <div class="about-item__icon">
                            <i class="fa-solid fa-truck"></i>
                        </div>
                        <div class="about-item__content">
                            <p class="">Tra cứu<br />đơn hàng</p>
                        </div>
                    </a>
                    <a href="" class="about-item about-4">
                        <div class="about-item__icon">
                            <i class="fa-solid fa-bag-shopping"></i>
                            <span>1</span>
                        </div>
                        <div class="about-item__content">
                            <p class="">Giỏ<br />hàng</p>
                        </div>
                    </a>
                    <a href="" class="about-item about-5">
                        <div class="about-item__icon">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <div class="about-item__content">Member</div>
                    </a>
                </div>
    
                <div class="header-cart">
                    <a class="box-cart" href="">
                    <div class="cart-box-icon">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </div>
                    <p>Giỏ hàng</p>
                    <span class="items-in-cart">1</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="block-breadcrumbs">
            <div class="grid wide">
                <ul class="list-unstyled">
                    <li>
                        <a href="index.php">
                            <i class="breadcrumbs__home-icon fa-solid fa-house"></i>
                            Trang chủ
                        </a>
                        <i class="fa-solid fa-angle-right"></i>
                    </li>
                    <li>
                        Điện thoại
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Container -->
    <div class="container">
        <div class="grid wide">
            <div class="container__content container-mobile__content">
                <div class="row">
                    <div class="col">
                        <!-- Block-filter -->
                        <div class="block-filter">
                            <div class="filter__block-list-subcate">
                                <div class="box-list-subcate">
                                    <div class="list-subcate">
                                        <a class="item-subcate" href="">
                                            <img class="icons-subcate" src="https://cellphones.com.vn/media/icons/brands/brand-286.svg" alt="">
                                        </a>
                                        <a class="item-subcate" href="">
                                            <img class="icons-subcate" src="https://cellphones.com.vn/media/icons/brands/brand-211.svg" alt="">
                                        </a>
                                        <a class="item-subcate" href="">
                                            <img class="icons-subcate" src="https://cellphones.com.vn/media/icons/brands/brand-274.svg" alt="">
                                        </a>
                                        <a class="item-subcate" href="">
                                            <img class="icons-subcate" src="https://cellphones.com.vn/media/icons/brands/brand-769.svg" alt="">
                                        </a>
                                        <a class="item-subcate" href="">
                                            <img class="icons-subcate" src="https://cellphones.com.vn/media/icons/brands/brand-1214.svg" alt="">
                                        </a>
                                        <a class="item-subcate" href="">
                                            <img class="icons-subcate" src="https://cellphones.com.vn/media/icons/brands/brand-721.svg" alt="">
                                        </a>
                                        <a class="item-subcate" href="">
                                            <img class="icons-subcate" src="https://cellphones.com.vn/media/icons/brands/brand-vsmart.svg" alt="">
                                        </a>
                                        <a class="item-subcate" href="">
                                            <img class="icons-subcate" src="https://cellphones.com.vn/media/icons/brands/brand-1052.svg" alt="">
                                        </a>
                                        <a class="item-subcate" href="">
                                            <img class="icons-subcate" src="https://cellphones.com.vn/media/icons/brands/brand-vivo.svg" alt="">
                                        </a>
                                        <a class="item-subcate" href="">
                                            <img class="icons-subcate" src="https://cellphones.com.vn/media/icons/brands/brand-oneplus.svg" alt="">
                                        </a>
                                        <a class="item-subcate" href="">
                                            <img class="icons-subcate" src="https://cellphones.com.vn/media/icons/brands/brand-nubia.svg" alt="">
                                        </a>
                                        <a class="item-subcate" href="">
                                            Cat
                                        </a>
                                        <a class="item-subcate" href="">
                                            Điện thoại phổ thông
                                        </a>
                                        <a class="item-subcate" href="">
                                            Tin đồn - mới ra
                                        </a>
                                        <a class="item-subcate" href="">
                                            Tecno
                                        </a>
                                        <a class="item-subcate" href="">
                                            Hãng khác
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col" style="width: 100%">
                        <div class="block-filter">
                            <div class="filter__block-list-sort">
                                <div class="box-title">
                                    <p class="box-title__title">Săp xếp theo</p>
                                </div>
                                <div class="box-list-filter">
                                    <div class="list-filter">
                                        <a class="item-filter" href="">
                                            <i class="fa-solid fa-arrow-up-wide-short"></i>Giá cao
                                        </a>
                                        <a class="item-filter" href="">
                                            <i class="fa-solid fa-arrow-down-short-wide"></i>Giá thấp
                                        </a>
                                        <a class="item-filter" href="">
                                            <i class="fa-solid fa-percent"></i>Khuyến mãi
                                        </a>
                                        <a class="item-filter" href="">
                                            <i class="fa-solid fa-percent"></i>Trả góp 0%
                                        </a>
                                        <a class="item-filter" href="">
                                            <i class="fa-solid fa-eye"></i>Xem nhiều
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="home-product" style="width: 100%">
                        <!-- grip -> row -> column -->
                        <div class="grid wide">
                            <div class="row sm-gutter">
                            <!-- product item -->
                            <?php
                                    require_once 'admin/control.php';
                                    if(isset($_GET['phone'])){
                                        $phone=$_GET['phone'];
                                    }
                                    if(empty($_GET['phone'])){
                                        $se_smartphones=(new data)->se_products_smartphones();
                                    }
                                    else{
                                        $se_smartphones=(new data)->se_smartphones($phone);
                                    }
                                ?>
                                <?php foreach($se_smartphones as $each_smartphone): ?>
                                <div class="col l-2-4 m-4 c-6">
                                    <a class="home-product-item" href="#">
                                        <div class="home-product-item__img" style="background-image: url(<?php echo $each_smartphone['image'] ?>);"></div>
                                        <h4 class="home-product-item__name"><?php echo $each_smartphone['name'] ?></h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old"><?php echo $each_smartphone['price'] ?></span>
                                            <span class="home-product-item__price-current"><?php echo $each_smartphone['price_sale'] ?></span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <div class="home-product-item__rating">
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__sold">88 đã bán</span>
                                        </div>
                                        <div class="home-product-item__favorite">
                                            <i class="fas fa-check"></i>
                                            <Span>Yêu thích</Span>
                                        </div>
                                    </a>
                                </div>
                                <?php endforeach?>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Pagination -->
                    <!-- <ul class="pagination home-product__pagination">
                        <li class="pagination-item">
                            <a href="#" class="pagination-item__link">
                                <i class="pagination-item__icon fas fa-chevron-left"></i>
                            </a>
                        </li>
                        <li class="pagination-item pagination-item--active">
                            <a href="#" class="pagination-item__link">1</a>
                        </li>
                        <li class="pagination-item">
                            <a href="#" class="pagination-item__link">2</a>
                        </li><li class="pagination-item">
                            <a href="#" class="pagination-item__link">3</a>
                        </li><li class="pagination-item">
                            <a href="#" class="pagination-item__link">4</a>
                        </li><li class="pagination-item">
                            <a href="#" class="pagination-item__link">5</a>
                        </li><li class="pagination-item">
                            <a href="#" class="pagination-item__link">...</a>
                        </li><li class="pagination-item">
                            <a href="#" class="pagination-item__link">14</a>
                        </li>
                        <li class="pagination-item">
                            <a href="#" class="pagination-item__link">
                                <i class="pagination-item__icon fas fa-chevron-right"></i>
                            </a>
                        </li>
                    </ul> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <div class="footer">
        <div class="grid wide footer-box-contact">
            <div class="row footer-box-contact__wrap">
                <div class="col l-3 m-6 c-6">
                    <ul class="list-unstyled footer-location">
                        <li class="list-location-find">
                            <p class="mb-2 footer-title">Tìm cửa hàng</p>
                            <p class="mb-1">
                                <a class="footer-item-link text-decoration-none" href="">Tìm cửa hàng gần nhất</a>
                            </p>
                            <p class="mb-1">
                                <a class="footer-item-link text-decoration-none" href="">Mua hàng từ xa</a>
                            </p>
                            <p class="mb-1">
                                <a class="footer-item-link text-decoration-none" href="">
                                    <span style="color: #d70018;">Gặp trực tiếp cửa hàng gần nhất (Zalo hoặc gọi điện)</span>
                                </a>
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col l-3 m-6 c-6">
                    <ul class="list-unstyled footer-phone-contact">
                        <li class="list-phone-contact">
                            <p class="mb-2 footer-title">Thông tin liên hệ</p>
                            <p class="mb-1">
                                Gọi mua hàng: <a class="footer-item-link font-weight-both text-decoration-none" href="">1800.2097</a> (8h00 - 22h00)
                            </p>
                            <p class="mb-1">
                                Gọi khiếu nại: <a class="footer-item-link font-weight-both text-decoration-none" href="">1800.2063</a> (8h00 - 21h30)
                            </p>
                            <p class="mb-1">
                                Gọi bảo hành: <a class="footer-item-link font-weight-both text-decoration-none" href="">1800.2064</a> (8h00 - 21h00)
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col l-3 m-6 c-6">
                    <ul class="list-unstyled footer-seaches">
                        <p class="mb-2 footer-title">Chính sách mua và bảo hành</p>
                        <li class="mb-1"><a class="footer-item-link text-decoration-none" href="">Mua hàng và thanh toán Online</a></li>
                        <li class="mb-1"><a class="footer-item-link text-decoration-none" href="">Mua hàng và trả góp Online</a></li>
                        <li class="mb-1"><a class="footer-item-link text-decoration-none" href="">Tra thông tin đơn hàng</a></li>
                        <li class="mb-1"><a class="footer-item-link text-decoration-none" href="">Tra điểm Member</a></li>
                        <li class="mb-1"><a class="footer-item-link text-decoration-none" href="">Tra thông tin bảo hành</a></li>
                        <li class="mb-1"><a class="footer-item-link text-decoration-none" href="">Tra cứu hóa đơn điện tử</a></li>
                        <li class="mb-1"><a class="footer-item-link text-decoration-none" href="">Trung tâm bảo hành chính hãng</a></li>
                        <li class="mb-1"><a class="footer-item-link text-decoration-none" href="">Quy định về việc sao lưu dữ liệu</a></li>
                        <li class="mb-1"><a class="footer-item-link text-decoration-none" href="">Dịch vụ bảo hành điện thoại</a></li>
                    </ul>
                </div>
                <div class="col l-3 m-6 c-6">
                    <ul class="list-unstyled footer-others">
                        <p class="mb-2 footer-title">Các thông tin khác</p>
                        <li class="mb-1"><a class="footer-item-link text-decoration-none" href="">Quy chế hoạt động</a></li>
                        <li class="mb-1"><a class="footer-item-link text-decoration-none" href="">Chính sách bảo hành</a></li>
                        <li class="mb-1"><a class="footer-item-link text-decoration-none" href="">Liên hệ hợp tác kinh doanh</a></li>
                        <li class="mb-1"><a class="footer-item-link text-decoration-none" href="">Đơn doanh nghiệp</a></li>
                        <li class="mb-1"><a class="footer-item-link text-decoration-none" href="">Ưu đẫi từ đối tác</a></li>
                        <li class="mb-1"><a class="footer-item-link text-decoration-none" href="">Tuyển dụng</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="footer__bottom">
        <div class="grid wide">
            <div class="footer__info-menu">
                <a href="" class="footer__info-menu-link">
                    <span>Chính sách bảo mật</span>
                </a>
                <a href="" class="footer__info-menu-link">
                    <span>Quy chế hoạt động</span>
                </a>
                <a href="" class="footer__info-menu-link">
                    <span>Trả hàng & hoàn tiền</span>
                </a>
            </div>
            <div class="footer__info-address">
                <p>Công ty thiết bị điện tử W</p>
                <p>Chi nhánh: 34, 306 Tây Sơn, Đống Đa, Hà Nội</p>
            </div>
        </div>
    </div>
</body>
</html>




