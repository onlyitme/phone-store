<div class="shop-account">
    <div class="heading-container">
        <div class="container heading-standar">
            <div class="page-breadcrumb">
                <ul class="breadcrumb">
                    <li><span><a href="<?= SITE_URL ?>" class="home"><span>Trang chủ</span></a></span></li>
                    <li><span><a href="<?= SITE_URL ?>/?act=cartview" class="home"><span>Giỏ hàng</span></a></span></li>
                    <li><span>Thanh toán</span></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container my-5">
            <div class="row">
                <div class="col-md-12 main-wrap">
                    <div class="main-content">
                        <?php if (isset($_SESSION['cart']) && sizeof($_SESSION['cart']) > 0) {
                            $tongtien = $_SESSION['checkout']['tongtien']; ?>
                            <div class="shop">
                                <form method="post" action="<?=ROOT_URL?>/hoan-tat-thanh-toan/">
                                    <div class="cart-collaterals">
                                        <div class="cross-sells">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <p>Tên của bạn</p>
                                                    <input type="text" name="your-name" value="" size="40" class="form-control text validates-as-required"  required/>
                                                </div>
                                                <div class="col-sm-6">
                                                    <p>Số điện thoại</p>
                                                    <input type="number" name="your-phone" value="" size="40" class="form-control text validates-as-required" required />
                                                </div>
                                                <div class="col-sm-12">
                                                    <p>Email</p>
                                                    <p class="form-control-wrap"><input type="email" name="your-email" value="" size="40" class="form-control text validates-as-required" /></p>

                                                </div>
                                                <div class="col-sm-12">
                                                    <p class="">Địa chỉ</p>
                                                    <p class="form-control-wrap your-message"><textarea name="your-address" rows="5" class="form-control textarea" required></textarea></p>
                                                </div>
                                                <div class="col-sm-12">
                                                    <p class="">Để lại lời nhắn</p>
                                                    <p class="form-control-wrap your-message"><textarea name="your-message" rows="5" class="form-control textarea"></textarea></p>

                                                </div>
                                            </div>

                                        </div>
                                        <div class="cart_totals ">
                                            <div class="contact-info mb-3">
                                                <h2 class="mt-0">Phương thức thanh toán</h2>
                                                <div>
                                                    <lable for="ptgh1">Thanh toán khi nhận hàng</lable>
                                                    <input type="radio" name="phuongthucthanhtoan" value="khinhanhang" id="pttt1" checked>
                                                </div>
                                                <div>
                                                    <lable for="pttt2">Chuyển khoản</lable>
                                                    <input type="radio" name="phuongthucthanhtoan" value="chuyenkhoan" id="pttt2">
                                                </div>
                                                <div>
                                                    <lable for="pttt3">VNPAY</lable>
                                                    <input type="radio" name="phuongthucthanhtoan" value="vnpay" id="pttt3">
                                                </div>
                                                <div>
                                                    <lable for="pttt4">ZaloPay</lable>
                                                    <input type="radio" name="phuongthucthanhtoan" value="zalopay" id="pttt4">
                                                </div>

                                            </div>
                                            <div class="contact-info mb-5">
                                                <h2 class="mt-0">Phương thức Vận chuyển</h2>
                                                <div>
                                                    <lable for="ptgh1">Giao hàng tiết kiệm</lable>
                                                    <input type="radio" name="phuongthucgiaohang" value="ghtietkiem" id="ptgh1" checked>
                                                </div>
                                                <div>
                                                    <lable for="ptgh2">Giao hàng nhanh</lable>
                                                    <input type="radio" name="phuongthucgiaohang" value="ghnhanh" id="ptgh2">
                                                </div>
                                                <div>
                                                    <lable for="ptgh3">Viettel Post</lable>
                                                    <input type="radio" name="phuongthucgiaohang" value="vtpost" id="ptgh3">
                                                </div>
                                                <div>
                                                    <lable for="ptgh4">VN POST</lable>
                                                    <input type="radio" name="phuongthucgiaohang" value="vnpost" id="ptgh4">
                                                </div>

                                            </div>
                                            <h2>Tổng số giỏ hàng</h2>
                                            <table>
                                                <tr class="cart-subtotal">
                                                    <th>Tổng tiền hàng</th>
                                                    <td><span class="amount"><?= number_format($tongtien) ?> vnđ</span></td>
                                                </tr>
                                                <tr class="shipping">
                                                    <th>Giao hàng</th>
                                                    <td><span class="amount">35,000 vnđ</span></td>
                                                </tr>
                                                <tr class="order-total">
                                                    <th>Tổng thanh toán</th>
                                                    <td><strong><span class="amount"><?= number_format($tongtien + 35000) ?> vnđ</span></strong>
                                                    </td>
                                                </tr>
                                            </table>
                                            <div class="wc-proceed-to-checkout">
                                                <button type="submit" name="checkout" class="checkout-button button alt wc-forward">Hoàn tất Thanh toán</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        <?php } else { ?>
                            <div class="shop">
                                <p class="cart-empty">Giỏ hàng của bạn hiện đang trống.</p>
                                <p class="return-to-shop">
                                    <a class="button wc-backward" href="<?=ROOT_URL?>/tat-ca-san-pham/">Quay lại cửa hàng</a>
                                </p>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>

</div>