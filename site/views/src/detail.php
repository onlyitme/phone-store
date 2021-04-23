<div class="shop">
    <div class="heading-container">
        <div class="container heading-standar">
            <div class="page-breadcrumb">
                <ul class="breadcrumb">
                    <li><span><a href="<?=ROOT_URL?>" class="home"><span>Trang chủ</span></a></span></li>
                    <li><span><a href="<?=ROOT_URL?>/tat-ca-san-pham/" class="home"><span>Tất cả sản phẩm</span></a></span></li>
                    <li><span><?=$sp['TenDT']?></span></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="content-container">
        <div class="container-full">
            <div class="row">
                <div class="col-md-12 main-wrap">
                    <div class="main-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 no-min-height"></div>
                            </div>
                        </div>
                        <div class="product">
                            <div class="container">
                                <div class="row summary-container">
                                    <div class="col-md-8 col-sm-6 entry-image">
                                        <div class="single-product-images">
                                            <div class="single-product-images-slider">
                                                <div class="caroufredsel product-images-slider" data-synchronise=".single-product-images-slider-synchronise" data-scrollduration="500" data-height="variable" data-scroll-fx="none" data-visible="1" data-circular="1" data-responsive="1">
                                                    <div class="caroufredsel-wrap">
                                                        <ul class="caroufredsel-items">
                                                            <li class="caroufredsel-item">
                                                                <div class="thumb">
                                                                    <a href="<?=PATHIMG_DT.$sp['urlHinh']?>" data-rel="magnific-popup-verticalfit" title="Product-detail">
                                                                        <img width="800" height="850" src="<?=PATHIMG_DT.$sp['urlHinh']?>" alt="Product-detail"/>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                            <li class="caroufredsel-item">
                                                                <div class="thumb">
                                                                    <a href="views/assets/images/product/product-detail/product-2.jpg" data-rel="magnific-popup-verticalfit" title="Product-detail">
                                                                        <img width="800" height="850" src="views/assets/images/product/product-detail/product-2.jpg" alt="Product-detail"/>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                            <li class="caroufredsel-item">
                                                                <div class="thumb">
                                                                    <a href="views/assets/images/product/product-detail/product-3.jpg" data-rel="magnific-popup-verticalfit" title="Product-detail">
                                                                        <img width="800" height="850" src="views/assets/images/product/product-detail/product-3.jpg" alt="Product-detail"/>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                            <li class="caroufredsel-item">
                                                                <div class="thumb">
                                                                    <a href="views/assets/images/product/product-detail/product-4.jpg" data-rel="magnific-popup-verticalfit" title="Product-detail">
                                                                        <img width="800" height="850" src="views/assets/images/product/product-detail/product-4.jpg" alt="Product-detail"/>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <a href="#" class="caroufredsel-prev"></a>
                                                        <a href="#" class="caroufredsel-next"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single-product-thumbnails">
                                                <div class="caroufredsel product-thumbnails-slider" data-visible-min="2" data-visible-max="4" data-scrollduration="500" data-direction="up" data-height="100%" data-circular="1" data-responsive="0">
                                                    <div class="caroufredsel-wrap">
                                                        <ul class="single-product-images-slider-synchronise caroufredsel-items">
                                                            <li class="caroufredsel-item selected">
                                                                <div class="thumb">
                                                                    <a href="#" data-rel="1" title="Product-detail">
                                                                        <img width="100" height="150" src="<?=PATHIMG_DT.$sp['urlHinh']?>" alt="Product-detail"/>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                            <li class="caroufredsel-item">
                                                                <div class="thumb">
                                                                    <a href="#" data-rel="2" title="Product-detail">
                                                                        <img width="100" height="150" src="views/assets/images/product/product-detail/product-2.jpg" alt="Product-detail"/>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                            <li class="caroufredsel-item">
                                                                <div class="thumb">
                                                                    <a href="#" data-rel="3" title="Product-detail">
                                                                        <img width="100" height="150" src="views/assets/images/product/product-detail/product-3.jpg" alt="Product-detail"/>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                            <li class="caroufredsel-item">
                                                                <div class="thumb">
                                                                    <a href="#" data-rel="4" title="Product-detail">
                                                                        <img width="100" height="150" src="views/assets/images/product/product-detail/product-4.jpg" alt="Product-detail"/>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 entry-summary">
                                        <div class="summary">
                                            <h1 class="product_title entry-title"><?=$sp['TenDT']?></h1>
                                            <div class="shop-product-rating">
                                                <div class="star-rating">
                                                    <span style="width:80%"></span>
                                                </div>
                                                <a href="#reviews" class="shop-review-link">(<span class="count">1</span> customer review)</a>
                                            </div>
                                            <p class="price"><span class="amount  "><?=number_format($sp['Gia'])?> vnđ</span></p>
                                            <div class="product-sale">

                                            </div>
                                            <div class="product-excerpt">
                                                <p>
                                                    Khi mua sản phẩm tại PhoneStore.com.vn, khách hàng có quyền hoàn toàn yên tâm với sản phẩm chính hãng, được bảo hành chính thức tại hãng và ngoài ra có thêm chính sách đổi mới miễn phí lên tới 30 ngày tại Phone Store
                                                </p>
                                            </div>
                                            <div class="product-actions res-color-attr">
                                                <form method="post" action="<?=ROOT_URL?>/them-vao-gio/<?=$sp['idDT']?>" class="cart">
                                                    <div class="single_variation_wrap">
                                                        <div class="variations_button">
                                                            <div class="quantity">
                                                                <input type="number" name="soluong" value="1" title="Qty" class="input-text qty text" size="4">
                                                            </div>
                                                            <button type="submit" class="button">Thêm vào giỏ hàng</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <a href="#" class="add_to_wishlist">
                                                    Thêm vào giỏ hàng
                                                </a>
                                            </div>
                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU: <span class="sku">N/A</span></span>
                                                <span class="posted_in">Thể loại: <a href="#">Điện thoại thông minh</a></span>
<!--                                                <span class="tagged_as">Tags: <a href="#">Men</a>, <a href="#">Women</a></span>-->
                                                <span class="posted_in">Nhãn hàng:  <a href="#"><?=$NSXbyId['TenNSX']?></a></span>
                                            </div>
                                            <div class="widget social-widget mt-5">
                                                <h4 class="widget-title"><span>Connect</span></h4>
                                                <div class="social-widget-wrap social-widget-square">
                                                    <a href="#" title="Facebook" target="_blank">
                                                        <i class="fa fa-facebook facebook-bg"></i>
                                                    </a>
                                                    <a href="#" title="Twitter" target="_blank">
                                                        <i class="fa fa-twitter twitter-bg"></i>
                                                    </a>
                                                    <a href="#" title="Google+" target="_blank">
                                                        <i class="fa fa-google-plus google-plus-bg"></i>
                                                    </a>
                                                    <a href="#" title="Pinterest" target="_blank">
                                                        <i class="fa fa-pinterest pinterest-bg"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-tab-container">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="tabbable shop-tabs">
                                                <ul class="nav nav-tabs" role="tablist">
                                                    <li class="active">
                                                        <a data-toggle="tab" role="tab" href="#tab-description">Mô tả</a>
                                                    </li>
                                                    <li>
                                                        <a data-toggle="tab" role="tab" href="#tab-additional_information">Thông tin chi tiết</a>
                                                    </li>
                                                    <li>
                                                        <a data-toggle="tab" role="tab" href="#tab-reviews">Đánh giá (<?php if(isset($commentDT)) echo count($commentDT); else echo '0'; ?>)</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tab-description">
                                                        <h2>Mô tả sản phẩm</h2>
                                                        <h3>Điện thoại <?=$sp['TenDT']?></h3>
                                                        <h3>
                                                            <a href="views/assets/images/11.png">
                                                                <img class="alignright" src="views/assets/images/11.png" alt="img" width="300" height="300"/>
                                                            </a>
                                                        </h3>
                                                        <p><?=$sp['MoTa']?></p>
                                                    </div>
                                                    <div class="tab-pane" id="tab-additional_information">
                                                        <h2>THông tin chi tiết</h2>
                                                        <table class="shop_attributes">
<!--                                                            <tr class="">-->
<!--                                                                <th>Màu</th>-->
<!--                                                                <td><p>Xanh lá cây, xám, cam, đỏ, trắng, vàng</p></td>-->
<!--                                                            </tr>-->
                                                            <tr class="alt">
                                                                <th>+ Màn hình:</th>
                                                                <td><p><?=$thuoctinh['ManHinh']?></p></td>
                                                            </tr>
                                                            <tr class="alt">
                                                                <th>+ Hệ điều hành:</th>
                                                                <td><p><?=$thuoctinh['HeDieuHanh']?></p></td>
                                                            </tr>
                                                            <tr class="alt">
                                                                <th>+ Camera sau:</th>
                                                                <td><p><?=$thuoctinh['CameraSau']?></p></td>
                                                            </tr>
                                                            <tr class="alt">
                                                                <th>+ Camera trước:</th>
                                                                <td><p><?=$thuoctinh['CameraTruoc']?></p></td>
                                                            </tr>
                                                            <tr class="alt">
                                                                <th>+ CPU:</th>
                                                                <td><p><?=$thuoctinh['CPU']?></p></td>
                                                            </tr>
                                                            <tr class="alt">
                                                                <th>+ RAM:</th>
                                                                <td><p><?=$thuoctinh['RAM']?></p></td>
                                                            </tr>
                                                            <tr class="alt">
                                                                <th>+ Bộ nhớ trong:</th>
                                                                <td><p><?=$thuoctinh['BoNhoTrong']?></p></td>
                                                            </tr>
                                                            <tr class="alt">
                                                                <th>+ Thẻ nhớ:</th>
                                                                <td><p><?=$thuoctinh['TheNho']?></p></td>
                                                            </tr>
                                                            <tr class="alt">
                                                                <th>+ Thẻ SIM:</th>
                                                                <td><p><?=$thuoctinh['TheSim']?></p></td>
                                                            </tr>
                                                            <tr class="alt">
                                                                <th>+ Dung lượngPin:</th>
                                                                <td><p><?=$thuoctinh['DungLuongPin']?></p></td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <div class="tab-pane" id="tab-reviews">
                                                        <div id="reviews">
                                                            <div id="comments">
                                                                <h2>1 review for Cras rhoncus duis viverra</h2>
                                                                <ol class="commentlist">
                                                                    <!--<li>
                                                                        <div class="comment_container">
                                                                            <img alt='' src='http://placehold.it/32x32' class='avatar' height='60' width='60'/>
                                                                            <div class="comment-text">
                                                                                <div class="star-rating">
                                                                                    <span style="width:80%"></span>
                                                                                </div>
                                                                                <p class="meta">
                                                                                    <strong>sitesao</strong> &ndash; <time datetime="2015-08-05T10:09:45+00:00">August 5, 2015</time>:
                                                                                </p>
                                                                                <div class="description"><p>Lorem ipsum dolor</p></div>
                                                                            </div>
                                                                        </div>
                                                                        <ol class="children">
                                                                            <li>
                                                                                <div class="comment_container">
                                                                                    <img alt='' src='http://placehold.it/32x32' class='avatar' height='60' width='60'/>
                                                                                    <div class="comment-text">
                                                                                        <div class="star-rating">
                                                                                            <span style="width:80%"></span>
                                                                                        </div>
                                                                                        <p class="meta">
                                                                                            <strong>sitesao</strong> &ndash; <time datetime="2015-08-05T10:09:45+00:00">August 5, 2015</time>:
                                                                                        </p>
                                                                                        <div class="description"><p>Lorem ipsum dolor</p></div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        </ol>
                                                                    </li>-->
                                                                    <?php if(isset($commentDT)) {
                                                                        foreach ($commentDT as $row){
                                                                            $user = $this->model->checkuser(3,$row['idUser']);
                                                                            ?>
                                                                            <li>
                                                                                <div class="comment_container">
                                                                                    <img alt='' src='http://placehold.it/32x32' class='avatar' height='60' width='60'/>
                                                                                    <div class="comment-text">
                                                                                        <div class="star-rating">
                                                                                            <span style="width:80%"></span>
                                                                                        </div>
                                                                                        <p class="meta">
                                                                                            <strong><?=$user['HoTen']?>></strong> &ndash; <time ><?=$row['ThoigianBL']?></time>:
                                                                                        </p>
                                                                                        <div class="description"><p><?=$row['NoiDungBL']?></p></div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                    <?php    }
                                                                    } ?>

                                                                </ol>
                                                            </div>
                                                            <?php if(isset($_SESSION['sid'])){?>
                                                                <div id="respond-wrap">
                                                                    <div id="respond" class="comment-respond">
                                                                        <h3 class="comment-reply-title">
                                                                            <span>Để lại đánh giá của bạn</span>
                                                                        </h3>
                                                                        <form action="<?=ROOT_URL?>/gui-binh-luan/" method="post" class="comment-form">
                                                                            <p class="alignright">
                                                                                <label><?=$_SESSION['sname']?></label> - <span style="font-style: italic !important;"><?=date("d, m, Y, g:i a"); ?></span>
                                                                            </p>
                                                                            <p class="comment-form-comment">
                                                                                <label>Bình luận</label>
                                                                                <textarea class="form-control" name="comment" id="comment" cols="45" rows="8" aria-required="true"></textarea>
                                                                            </p>
                                                                            <p>
                                                                                <input type="hidden" name="idDT" id="idDT"  value="<?=$sp['idDT']?>">
                                                                                <input name="submit"  class="btn" value="Gửi Bình Luận" type="submit" />
                                                                            </p>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            <?php } else{ ?>
                                                                <div id="respond-wrap">
                                                                    <div id="respond" class="comment-respond">
                                                                        <h3 class="comment-reply-title mt-5">
                                                                            <span>Để lại đánh giá của bạn</span>
                                                                        </h3>
                                                                        <a data-rel="loginModal" href="">Hãy đăng nhập hoặc đăng ký tài khoản!</a>
                                                                    </div>
                                                                </div>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="related products">
                                            <div class="related-title">
                                                <h3><span>Sản phẩm tương tự </span></h3>
                                            </div>
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
                                                                            <h3 class="product_title"><a href="#"><?=$row['TenDT']?></a></h3>
                                                                        </div>
                                                                        <div class="info-meta">
                                                                            <div class="info-price">
																					<span class="price">
																						<span class="amount"><?=number_format($row['Gia'])?> vnđ</span>
																					</span>
                                                                            </div>
                                                                            <div class="loop-add-to-cart">
                                                                                <a href="<?=SITE_URL?>/?act=detail&id=<?=$row['idDT']?>">Chi tiết sản phẩm</a>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
