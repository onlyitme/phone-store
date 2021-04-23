<div class="shop-account">
    <div class="heading-container">
        <div class="container heading-standar">
            <div class="page-breadcrumb">
                <ul class="breadcrumb">
                    <li><span><a href="<?=SITE_URL?>" class="home"><span>Trang chủ</span></a></span></li>
                    <li><span>Giỏ hàng</span></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="content-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12 main-wrap">
                    <div class="main-content">
                        <?php  if(isset($_SESSION['cart']) && sizeof($_SESSION['cart']) > 0 ){ ?>
                        <div class="shop">
                            <form method="post" action="<?=ROOT_URL?>/cap-nhat-gio-hang/">
                                <table class="table shop_table cart">
                                    <thead>
                                    <tr>
                                        <th class="product-remove hidden-xs"><a href="<?=ROOT_URL?>/xoa-gio-hang/">Loại bỏ</a></th>
                                        <th class="product-thumbnail hidden-xs">&nbsp;</th>
                                        <th class="product-name">Sản Phẩm</th>
                                        <th class="product-price text-center">Giá</th>
                                        <th class="product-quantity text-center">Số lượng</th>
                                        <th class="product-subtotal text-center hidden-xs">Tổng</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $tongtien = 0;
                                        foreach ($_SESSION['cart'] as $idProduct => $product){
                                        $sp = $this->model->detail($idProduct);
                                    ?>
                                    <tr class="cart_item">
                                        <td class="product-remove hidden-xs">
                                            <a href="<?=ROOT_URL?>/xoa-san-pham/<?=$idProduct?>" class="remove" title="Remove this item">&times;</a>
                                        </td>
                                        <td class="product-thumbnail hidden-xs">
                                            <a href="<?=SITE_URL?>/?act=detail&id=<?=$idProduct?>">
                                                <img width="100" height="150" src="<?=PATHIMG_DT.$sp['urlHinh']?>" alt="Product-1"  />
                                            </a>
                                        </td>
                                        <td class="product-name">
                                            <a href="#"><?=$sp['TenDT']?></a>
                                        </td>
                                        <td class="product-price text-center">
                                            <span class="amount"><?=number_format($sp['Gia'])?> </span>
                                        </td>
                                        <td class="product-quantity text-center">
                                            <div class="quantity text-center">
                                                <input type="number" step="1" min="0" name="soluong<?=$idProduct?>" value="<?=$product['soLuong']?>" title="Qty" class="input-text qty text mx-auto" size="4"/>
                                            </div>
                                        </td>
                                        <td class="product-subtotal hidden-xs text-center">
                                            <span class="amount"><?php $a = $product['soLuong']*$sp['Gia'];  echo number_format($a); ?> </span>
                                        </td>
                                    </tr>
                                    <?php $tongtien += $a; } $_SESSION['checkout']['tongtien'] = $tongtien; ?>
                                    <tr>
                                        <td colspan="6" class="actions">
                                            <div class="coupon">
                                                <label for="coupon_code">Mã giảm giá:</label>
                                                <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Mã giảm giá"/>
                                                <input type="submit" class="button" name="apply_coupon" value="Kiểm tra"/>

                                            </div>
                                            <input type="submit" class="button update-cart-button" name="update_cart" value="Cập nhật giỏ hàng"/>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </form>
                            <div class="cart-collaterals">
                                <div class="cart_totals">
                                    <h2>Tổng số giỏ hàng</h2>
                                    <table>
                                        <tr class="cart-subtotal">
                                            <th>Tổng tiền hàng</th>
                                            <td><span class="amount"><?=number_format($tongtien)?> vnđ</span></td>
                                        </tr>
                                        <tr class="shipping">
                                            <th>Giao hàng</th>
                                            <td><span class="amount">0 vnđ</span></td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Tổng thanh toán</th>
                                            <td><strong><span class="amount"><?=number_format($tongtien)?> vnđ</span></strong></td>
                                        </tr>
                                    </table>
                                    <div class="wc-proceed-to-checkout">
                                        <a href="<?=ROOT_URL?>/thanh-toan/" class="checkout-button button alt wc-forward">Thanh toán</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } else { ?>
                        <div class="shop">
                                <p class="cart-empty">Giỏ hàng của bạn hiện đang trống.</p>
                                <p class="return-to-shop">
                                    <a class="button wc-backward" href="<?=ROOT_URL?>/phone-store/">Quay lại cửa hàng</a>
                                </p>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>