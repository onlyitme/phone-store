<div class="shop page-layout-left-sidebar">
    <div class="shop-toolbar">
        <div class="container">
            <div class="row">
                <div class="col-md-9 main-wrap pull-right">
                    <div class="view-mode">
                        <a class="grid-mode active" title="Grid"><i class="fa fa-th"></i></a>
                        <a class="list-mode" title="List" href="#"><i class="fa fa-th-list"></i></a>
                    </div>
                    <form class="shop-ordering clearfix">
                        <div class="shop-ordering-select">
                            <label class="hide">Sorting:</label>
                            <div class="form-flat-select">
                                <select name="orderby" class="orderby">
                                    <option value="menu_order" selected="selected">Bộ lọc</option>
                                    <option value="popularity">Sản phẩm đang nổi</option>
                                    <option value="rating">Lượt mua hàng</option>
                                    <option value="date">Sản phẩm mới</option>
                                    <option value="price">Sắp xếp theo giá: thấp đến cao</option>
                                    <option value="price-desc">Sắp xếp theo giá: cao đến thấp</option>
                                </select>
                                <i class="fa fa-angle-down"></i>
                            </div>
                        </div>
                        <div class="shop-ordering-select">
                            <label class="hide">Show:</label>
                            <div class="form-flat-select">~
                                <select name="per_page" class="per_page">
                                    <option value="" selected="selected">12</option>
                                    <option value="">24</option>
                                    <option value="">36</option>
                                </select>
                                <i class="fa fa-angle-down"></i>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="content-container">
        <div class="container">
            <div class="row">
                <div class="col-md-3 sidebar-wrap">
                    <div class="main-sidebar">
                        <div class="widget shop widget_price_filter">
                            <h4 class="widget-title"><span>Giá</span></h4>
                            <form>
                                <div class="price_slider_wrapper">
                                    <div class="price_slider"></div>
                                    <div class="price_slider_amount">
                                        <input type="text" id="min_price" name="min_price" value="" data-min="10" placeholder="Min price"/>
                                        <input type="text" id="max_price" name="max_price" value="" data-max="23" placeholder="Max price"/>
                                        <button type="submit" class="button">Lọc</button>
                                        <div class="price_label"></div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="widget shop widget_layered_nav dhwc_widget_layered_nav">
                            <h4 class="widget-title"><span>Các nhãn hàng</span></h4>
                            <ul>
                                <?php foreach ($NSX as $row) { ?>
                                    <li><a href="<?=ROOT_URL?>/nsx/<?=$row['slug']?>" <?php if(isset($_GET['id']) && ($_GET['id']==$row['idNSX'] || $_GET['id']==$row['slug'])) echo 'style="color: #fe6367 !important   ;"';?>><?=$row['TenNSX']?></a> <small class="count"><?php echo $this->model->countofNSX($row['idNSX'])['soluong']?></small></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 main-wrap">
                    <div class="main-content">
                        <div class="shop-loop grid">
                            <ul class="products">
                                <?php $count=0;  foreach ($listSP as $row) { ?>
                                    <li class="product">
                                        <div class="product-container">
                                            <figure>
                                                <div class="product-wrap">
                                                    <div class="product-images">
                                                        <div class="shop-loop-thumbnail px-5">
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
                                                                <a href="<?=ROOT_URL?>/chi-tiet-san-pham/<?=$row['slug']?>">Chi tiết sản phẩm</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </li>
                                <?php  $count+=1; } ?>
                            </ul>
                        </div>
                        <nav class="shop-pagination">
                            <p class="shop-result-count ">
                                Hiển thị <?php if(isset($tongSP)) echo count($tongSP); else echo $count; ?> kết quả
                            </p>
                            <?php if(isset($tongSP) && (count($tongSP) / 9) > 1){?>
                            <div class="paginate">
                                <div class="paginate_links">
                                    <!--  <span class='page-numbers current'>1</span>-->
                                    <?php if(isset($_GET['page_num']) &&  $_GET['page_num'] > 1){?>
                                        <a class="next page-numbers " href="<?=ROOT_URL?>/tat-ca-san-pham/trang-<?=$_GET['page_num'] - 1?>"><i class="fa fa-angle-left"></i></a>
                                    <?php } ?>
                                    <?php for($i = 1; $i <= ceil(count($tongSP)/9); $i++){ ?>
                                    <a class='page-numbers' href='<?=ROOT_URL?>/tat-ca-san-pham/trang-<?=$i?>'><?=$i?></a>
                                    <?php } ?>
                                    <?php if(isset($_GET['page_num']) &&  $_GET['page_num'] < ceil(count($tongSP)/9)){?>
                                        <a class="next page-numbers " href="<?=ROOT_URL?>/tat-ca-san-pham/trang-<?=$_GET['page_num'] + 1?>"><i class="fa fa-angle-right"></i></a>
                                    <?php } ?>
                                </div>
                            </div>
                            <?php  } ?>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
