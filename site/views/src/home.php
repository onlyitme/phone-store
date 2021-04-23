
<div class="content-container no-padding">
    <div class="container-full">
        <div class="row">
            <div class="col-md-12 main-wrap">
                <div class="main-content">
                    <div class="row home-product-banner">
                        <div class="col-sm-12">
                            <div id="banner-slider" data-autorun="yes" data-duration="6000" class="carousel slide fade dhslider dhslider-custom " data-height="650">
                                <div class="dhslider-loader">
                                    <div class="fade-loading">
                                        <i></i><i></i><i></i><i></i>
                                    </div>
                                </div>
                                <div class="carousel-inner dhslider-wrap">
                                    <div class="item slider-item active">
                                        <div class="slide-bg slide-bg-1"></div>
                                        <div class="slider-caption caption-align-left">
                                            <div class="slider-caption-wrap">
<!--                                                <span class="slider-top-caption-text">Đặt gạch</span>-->
                                                <h2 class="slider-heading-text">Iphone 11 Pro MAX</h2>
                                                <div class="slider-caption-text">Sự lựa chọn tốt nhất tại PHONE STORE</div>
                                                <div class="slider-buttons">
                                                    <a href="#" class="btn btn-lg btn-white-outline">Chi tiết</a>
                                                    <a href="#" class="btn btn-lg btn-white-outline">MUA MGAY</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item slider-item">
                                        <div class="slide-bg slide-bg-4"></div>
                                        <div class="slider-caption caption-align-right">
                                            <div class="slider-caption-wrap">
<!--                                                <span class="slider-top-caption-text">Giảm 50% + Quà tặng</span>-->
                                                <h2 class="slider-heading-text">SAMSUNG GALAXY S10</h2>
                                                <div class="slider-caption-text">Nhân dịp năm mới - Giảm 50% + Quà tặng</div>
                                                <div class="slider-buttons">
                                                    <a href="#" class="btn btn-lg btn-white">Chi tiết </a>
                                                    <a href="#" class="btn btn-lg btn-white-outline">MUA NGAY</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <ol class="carousel-indicators parallax-content">
                                    <li data-target="#banner-slider" data-slide-to="0" class="active"></li>
                                    <li data-target="#banner-slider" data-slide-to="1"></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="row home-product-products">
                        <div class="col-sm-12">
                            <div class="caroufredsel product-slider" data-scroll-fx="" data-speed="" data-easing="" data-visible-min="1" data-scroll-item="" data-responsive="1" data-infinite="1" data-autoplay="0">
                                <div class="caroufredsel-wrap">
                                    <div class="shop columns-4">
                                        <ul class="products columns-4" data-columns="4">
                                            <?php
                                                foreach ($listSPHot as $row){
                                            ?>
                                                    <li class="product">
                                                        <div class="product-container">
                                                            <figure>
                                                                <div class="product-wrap">
                                                                    <div class="product-images">
                                                                        <div class="shop-loop-thumbnail">
                                                                            <img width="350" height="auto" src="<?=PATHIMG_DT.$row['urlHinh']?>" alt="<?=$row['TenDT']?>"/ >
                                                                        </div>
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <div class="yith-wcwl-add-button">
                                                                                <a href="#" class="add_to_wishlist">
                                                                                    Thêm vào ưa thích
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                        <div class="shop-loop-quickview">
                                                                            <a href="javascript:modeldetail(<?=$row['idDT']?>)" ><i class="fa fa-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <figcaption>
                                                                    <div class="shop-loop-product-info">
                                                                        <div class="info-title">
                                                                            <h3 class="product_title"><a href="<?=ROOT_URL?>/chi-tiet-san-pham/<?=$row['slug']?>"><?=$row['TenDT']?></a></h3>
                                                                        </div>
                                                                        <div class="info-meta">
                                                                            <div class="info-price">
																					<span class="price">
																						<span class="amount"><?=number_format($row['Gia'])?> vnđ</span>
																					</span>
                                                                            </div>
                                                                            <div class="loop-add-to-cart">
                                                                                <a href="<?=ROOT_URL?>/chi-tiet-san-pham/<?=$row['slug']?>">Chi tiết sản phẩm</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                    </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                    <a href="#" class="caroufredsel-prev"></a>
                                    <a href="#" class="caroufredsel-next"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-services">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-4 footer-service-item">
                                    <a class="footer-service-item-i" href="#">
                                        <i class="footer-service-icon fa fa-send-o"></i>
                                        <h3 class="footer-service-title">VẬN CHUYỂN & TRẢ LẠI</h3>
                                        <span class="footer-service-text">VẬN CHUYỂN RỘNG RÃI THẾ GIỚI ĐẾN CÁC QUỐC GIA ĐÃ CHỌN</span>
                                    </a>
                                </div>
                                <div class="col-sm-4 footer-service-item">
                                    <a class="footer-service-item-i" href="#">
                                        <i class="footer-service-icon fa fa-life-bouy"></i>
                                        <h3 class="footer-service-title">Câu hỏi thường gặp</h3>
                                        <span class="footer-service-text">
                                        TRẢ LỜI CÁC CÂU HỎI THƯỜNG GẶP
													</span>
                                    </a>
                                </div>
                                <div class="col-sm-4 footer-service-item">
                                    <a class="footer-service-item-i" href="#">
                                        <i class="footer-service-icon fa fa-home"></i>
                                        <h3 class="footer-service-title">Cửa hàng</h3>
                                        <span class="footer-service-text">Tìm địa điểm bán lẻ của chúng tôi</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

