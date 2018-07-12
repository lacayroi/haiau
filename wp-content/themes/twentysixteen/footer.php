<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
				</div><!-- .row -->
			</div><!-- .container-fluid -->
		</div><!-- .site-content -->
		
		<div id="slide-post">
			<div class="container-fluid">
				<div class="row">
					<div id="features" class="blue">
						<h2><a href="<?php echo get_site_url() . '/tin-tuc'; ?>">Tin tức mới nhất</a></h2>
						<div class="slider responsive">
							<?php
								$args = array(
									'category_name' => 'tin-tuc',
									'posts_per_page' => '12',
								);
								$r = new WP_Query($args);
								while ( $r->have_posts() ) : $r->the_post();
							?>
							<div class="img-box"> 
								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('post_home_slide', array('class' => 'img-responsive wp-post-image')); ?>
								</a> 
								<a class="title-box title-box-home" href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
							</div>
							<?php
								endwhile;
								wp_reset_query();
							?>
						</div>
					</div>
				</div>
			</div>
		</div><!-- #slide-post -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div id="footer-top">
				<div class="container-fluid">
					<div class="row email">
						<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
							<div id="email-form">
								<form method="post" class="af-form-wrapper" accept-charset="UTF-8" action="https://www.aweber.com/scripts/addlead.pl">
									<div style="display: none;">
										<input type="hidden" name="meta_web_form_id" value="1169706699">
										<input type="hidden" name="meta_split_id" value="">
										<input type="hidden" name="listname" value="awlist3885020">
										<input type="hidden" name="redirect" value="https://www.aweber.com/thankyou-coi.htm?m=text" id="redirect_21cf320e2ca767c3d34222704537f061">
										<input type="hidden" name="meta_adtracking" value="Khách_Hàng_Hải_Âu_">
										<input type="hidden" name="meta_message" value="1">
										<input type="hidden" name="meta_required" value="email">
										<input type="hidden" name="meta_tooltip" value="email||Nhập e-mail nhận bản tin khuyến mại...">
									</div>
									<div id="af-form-1169706699" class="af-form">
										<div id="af-body-1169706699" class="af-body af-standards clearfix">
											<div class="af-element">
												<label class="previewLabel" for="awf_field-73319180"></label>
												<div class="af-textWrap">
													<input class="text" id="awf_field-73319180" type="text" name="email" value="Nhập Email để nhận thông tin khuyến mại..." tabindex="500" onfocus=" if (this.value == 'Nhập e-mail nhận bản tin khuyến mại...') { this.value = ''; }" onblur="if (this.value == '') { this.value='Nhập e-mail nhận bản tin khuyến mại...';} ">
												</div>
												<div class="af-clear"></div>
											</div>
											<div class="af-element buttonContainer">
												<input name="submit" id="af-submit-image-1169706699" type="submit" value="Đăng ký ngay" class="image" style="background: none; max-width: 100%;" alt="Đăng Ký Ngay" tabindex="501">
												<div class="af-clear"></div>
											</div>
										</div>
									</div>
								</form>
								<script type="text/javascript">
									(function() {
										var IE = /*@cc_on!@*/ false;
										if (!IE) {
											return;
										}
										if (document.compatMode && document.compatMode == 'BackCompat') {
											if (document.getElementById("af-form-1169706699")) {
												document.getElementById("af-form-1169706699").className = 'af-form af-quirksMode';
											}
											if (document.getElementById("af-body-1169706699")) {
												document.getElementById("af-body-1169706699").className = "af-body inline af-quirksMode";
											}
											if (document.getElementById("af-header-1169706699")) {
												document.getElementById("af-header-1169706699").className = "af-header af-quirksMode";
											}
											if (document.getElementById("af-footer-1169706699")) {
												document.getElementById("af-footer-1169706699").className = "af-footer af-quirksMode";
											}
										}
									})();
								</script>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
							<div class="social-media">
								<h4>FOLLOW HẢI ÂU</h4>
								<ul>
									<li class="social-media-facebook">
										<a href="https://www.facebook.com/haiaucom" rel="nofollow" target="_blank"> <i class="fa fa-fw"></i> </a>
									</li>
									<li class="social-media-glus">
										<a href="https://plus.google.com/107854638819929484711" rel="nofollow" target="_blank"> <i class="fa fa-fw"></i> </a>
									</li>
									<li class="social-media-youtube">
										<a href="https://www.youtube.com/channel/UCyxqqxU7ZbGiyZO3jPiDz-g" rel="nofollow" target="_blank"> <i class="fa fa-fw"></i> </a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row mobile-align-center">
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 mn-footer-top1">
							<?php
								wp_nav_menu( array(
									'menu'           => 'footer-1',
									'menu_class'     => 'menu',
								 ) );
							?>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 mn-footer-top2">
							<?php
								wp_nav_menu( array(
									'menu' 			 => 'footer-2',
									'menu_class'     => 'menu',
								 ) );
							?>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 mn-footer-top3">
							<?php
								wp_nav_menu( array(
									'menu' 			=> 'footer-3',
									'menu_class'    => 'menu',
								 ) );
							?>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 mn-footer-top4">
							<?php
								wp_nav_menu( array(
									'menu' 			=> 'footer-4',
									'menu_class'    => 'menu',
								 ) );
							?>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 mn-footer-top5">
							<?php
								wp_nav_menu( array(
									'menu' 			=> 'footer-5',
									'menu_class'    => 'menu',
								 ) );
							?>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 mn-footer-top6">
							<ul id="menu-mn-footer-top6" class="menu">
								<li id="menu-item-10806" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-10806"><a>Hotline Mua Hàng (24/7)</a>
									<ul class="sub-menu">
										<li id="menu-item-10807" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10807"><span style="font-size:11px;font-weight: bold;"><i class="fa fa-phone" style="font-size:12px !important;"></i> Miền Bắc: </span><a href="tel:0913102168" style="font-size:11.5px;">0913.102.168</a></li>
										<li id="menu-item-10808" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10808"><span style="font-size:11px;font-weight: bold;"><i class="fa fa-phone" style="font-size:12px !important;"></i> Miền Nam: </span><a href="tel:0915078989" style="font-size:11.5px;">091.507.8989</a></li>
										<li id="menu-item-10809" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10809"><span style="font-size:12.5px;font-weight: bold;">CSKH &amp; Trung Tâm Bảo Hành: </span>
											<br><a href="tel:19001772" style="font-size:11.5px;"><i class="fa fa-phone" style="font-size:12px !important;"></i> 1900 1772</a></li>
										<li id="menu-item-10810" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10810"><span style="font-size:12.5px;font-weight: bold;">Gọi Khiếu Nại: </span><a href="tel:0917801133" style="font-size:11.5px;">091.780.1133</a> <span style="font-size:11px;"></span></li>
										<li id="menu-item-11367" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11367"><span style="font-size:12.5px;font-weight:bold;">Email Bán Hàng, Góp Ý, Khiếu Nại:</span>
											<br><span style="font-size:11.5px;"><i class="fa fa-envelope-o" style="font-size:12px !important;"></i> <a href="mailto:haiau@haiau.com">haiau@haiau.com</a><a><br><i class="fa fa-envelope-o" style="font-size:12px !important;"></i> </a><a href="mailto:maylamda@haiau.com">maylamda@haiau.com</a><a></a></span></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div id="footer-bottom">
				<div class="container-fluid">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cn-adr-title-wrap">
						<div class="cn-adr-title">Hệ thống phân phối của Hải Âu</div>
						<div class="dk-bct">
							<a target="blank" href="http://online.gov.vn/HomePage/CustomWebsiteDisplay.aspx?DocId=11971" rel="nofollow"> <i class="iconha-bct"></i> </a> 
							<i class="iconha-comodo"></i>
						</div>
					</div>
					<div class="row" id="footer-add-haiau">
						<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
							<div id="footer-add-haiau1" class="footer-add">
								<p class="cn-adr-head"> Trụ Sở Tập Đoàn Hải Âu</p>
								<p> 72 Miếu Đầm, Mễ Trì, Nam Từ Liêm, HN</p>
								<p class="tel"> Tel: <a class="footer-mobile" href="tel:+82437880246" rel="nofollow">(024) 3788 0246 </a><span class="footer-mobile-line"></span></p>
								<a class="link-map" title="Bản đồ đường đi tới Hải Âu Group" target="_blank" href="https://www.google.com/maps/place/C%C3%B4ng+Ty+CP+H%E1%BA%A3i+%C3%82u+Vi%E1%BB%87t+Nam/@21.0059191,105.7803985,17z/data=!3m1!4b1!4m2!3m1!1s0x3135acacce2bbccd:0xb8b1593143822d86"> <i class="fa fa-map-marker" aria-hidden="true" style="color:red"></i> Bản đồ đường đi</a>
							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
							<div id="footer-add-haiau2" class="footer-add">
								<p class="cn-adr-head"> Trung tâm bảo hành</p>
								<p> Số 1 đường CN7, KCN Từ Liêm, Bắc Từ Liêm, HN</p>
								<p class="tel"> Tel: <a class="footer-mobile" href="tel:+8419001772" rel="nofollow">1900 1772 </a><span class="footer-mobile-line"></span></p>
								<a class="link-map" title="Bản đồ đường đi tới Trung Tâm Bảo Hành"> <i class="fa fa-map-marker" aria-hidden="true" style="color:red"></i> Bản đồ đường đi</a>
							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
							<div id="footer-add-haiau3" class="footer-add">
								<p class="cn-adr-head"> Showroom Hà Nội</p>
								<p> 72 Miếu Đầm, Mễ Trì, Nam Từ Liêm</p>
								<p class="tel"> Tel: <a class="footer-mobile" href="tel:+82437880246" rel="nofollow">(024) 3788 0246 <span class="footer-mobile-line"></span></a></p>
								<a class="footer-mobile" href="tel:+82437880246" rel="nofollow"> </a>
								<a class="link-map" title="Bản đồ đường đi tới Showroom Hà Nội" target="_blank" href="https://www.google.com/maps/place/C%C3%B4ng+Ty+CP+H%E1%BA%A3i+%C3%82u+Vi%E1%BB%87t+Nam/@21.0059191,105.7803985,17z/data=!3m1!4b1!4m2!3m1!1s0x3135acacce2bbccd:0xb8b1593143822d86"> <i class="fa fa-map-marker" aria-hidden="true" style="color:red"></i> Bản đồ đường đi</a>
							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
							<div id="footer-add-haiau4" class="footer-add">
								<p class="cn-adr-head"> Showroom HCM</p>
								<p> 522 Hoàng Văn Thụ, P.4, Tân Bình</p>
								<p class="tel"> Tel: <a class="footer-mobile" href="tel:+842862923070" rel="nofollow">(028) 6292 3070 <span class="footer-mobile-line"></span></a></p>
								<a class="footer-mobile" href="tel:+842862923070" rel="nofollow"> </a>
								<a class="link-map" title="Bản đồ đường đi tới Showroom HCM" target="_blank" href="https://www.google.com/maps/place/M%C3%A1y+L%C3%A0m+%C4%90%C3%A1+Vi%C3%AAn+H%E1%BA%A3i+%C3%82u+%28H%E1%BA%A3i+%C3%82u+Vi%E1%BB%87t+Nam.,+JSC%29/@10.79462,106.6525183,17z/data=!3m1!4b1!4m2!3m1!1s0x31752935a6f3a229:0x1ede07e543bb0c02"> <i class="fa fa-map-marker" aria-hidden="true" style="color:red"></i> Bản đồ đường đi</a>
							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
							<div id="footer-add-haiau5" class="footer-add">
								<p class="cn-adr-head"> Showroom Vinh</p>
								<p> Tòa Nhà Trung Anh, KM 2, Đại Lộ V.I Lê Nin</p>
								<p class="tel"> Tel: <a class="footer-mobile" href="tel:+842386689265" rel="nofollow">(0238) 668 9265 <span class="footer-mobile-line"></span></a></p>
								<a class="footer-mobile" href="tel:+842386689265" rel="nofollow"> </a>
								<a class="link-map" title="Bản đồ đường đi tới Showroom Vinh" target="_blank" href="https://www.google.com/maps/place/M%C3%A1y+L%C3%A0m+%C4%90%C3%A1+Vi%C3%AAn+S%E1%BA%A1ch+H%E1%BA%A3i+%C3%82u+-+H%E1%BA%A3i+%C3%82u+Group/@18.6960834,105.6853555,15.75z/data=!4m5!3m4!1s0x3139ce08120b7a19:0xa469d550cd7b9d44!8m2!3d18.695328!4d105.686997"> <i class="fa fa-map-marker" aria-hidden="true" style="color:red"></i> Bản đồ đường đi</a>
							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
							<div class="footer-add" id="footer-add-haiau1">
								<p class="cn-adr-head"> Showroom Đà Nẵng</p>
								<p> 387 Nguyễn Văn Linh, Q.Thanh Khê</p>
								<p class="tel"> Tel: <a class="footer-mobile" href="tel:+842363838899" rel="nofollow">(0236) 383 8899 <span class="footer-mobile-line"></span></a></p>
								<a class="footer-mobile" href="tel:+842363838899" rel="nofollow"> </a>
								<a class="link-map" title="Bản đồ đường đi tới Showroom Đà Nẵng" target="_blank" href="https://www.google.com/maps/place/387+Nguy%E1%BB%85n+V%C4%83n+Linh,+Thanh+Kh%C3%AA,+%C4%90%C3%A0+N%E1%BA%B5ng,+Vi%E1%BB%87t+Nam/@16.0600098,108.2073508,16z/data=!4m5!3m4!1s0x314219b154234e01:0xc78bd89ce9d5f0b2!8m2!3d16.0593855!4d108.2079503" rel="nofollow"> <i class="fa fa-map-marker" aria-hidden="true" style="color:red"></i> Bản đồ đường đi</a>
							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
							<div class="footer-add" id="footer-add-haiau2">
								<p class="cn-adr-head"> Showroom Buôn Ma Thuột</p>
								<p> 316 Phan Bội Châu, TP. Buôn Ma Thuột</p>
								<p class="tel"> Tel: <a href="tel:+842623999998" class="footer-mobile" rel="nofollow">(0262) 399 9998</a><span class="footer-mobile-line"></span></p>
								<a title="Bản đồ đường đi tới Showroom Buôn Ma Thuột" target="_blank" class="link-map" href="https://www.google.com/maps?cid=16219775337027137158&amp;hl=vi&amp;_ga=1.33578721.1733001134.1475894337"> <i class="fa fa-map-marker" aria-hidden="true" style="color:red"></i> Bản đồ đường đi</a>
							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
							<div class="footer-add" id="footer-add-haiau3">
								<p class="cn-adr-head"> Showroom Nha Trang</p>
								<p> 131 đường 23/10, P. Phương Sơn</p>
								<p class="tel"> Tel: <a href="tel:+842583826899" class="footer-mobile" rel="nofollow">(0258) 382 6899</a></p>
								<a title="Bản đồ đường đi tới Showroom Nha Trang" target="_blank" class="link-map" href="https://maps.google.com/maps?cid=15547162323775429395&amp;_ga=1.119941569.894878336.1490346023" rel="nofollow"> <i class="fa fa-map-marker" aria-hidden="true" style="color:red"></i> Bản đồ đường đi</a>
							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
							<div class="footer-add" id="footer-add-haiau3">
								<p class="cn-adr-head"> Đại Lý Bình Định</p>
								<p> 87 Tôn Đức Thắng, Lý Thường Kiệt, TP Quy Nhơn, Bình Định</p>
								<a title="Bản đồ đường đi tới ĐẠI LÝ BÌNH ĐỊNH" target="_blank" class="link-map" href="https://goo.gl/maps/Sd1fJLLYKj62" rel="nofollow"> <i class="fa fa-map-marker" aria-hidden="true" style="color:red"></i> Bản đồ đường đi</a>
							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
							<div class="footer-add" id="footer-add-haiau2">
								<p class="cn-adr-head"> Mega Market Hồng Bàng - Hải Phòng</p>
								<p> 2A, Đường Hồng Bàng, Phường Sở Dầu, Quận Hồng Bàng, Tp. Hải Phòng</p>
								<a title="Bản đồ đường đi tới Mega Market Hồng Bàng" target="_blank" class="link-map" href="https://www.google.com/maps/place/Mega Market+H%E1%BB%93ng+B%C3%A0ng/@20.8631275,106.6538153,15z/data=!4m5!3m4!1s0x0:0x95fef774a79ff83f!8m2!3d20.8631275!4d106.6538153" rel="nofollow"> <i class="fa fa-map-marker" aria-hidden="true" style="color:red"></i> Bản đồ đường đi</a>
							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
							<div class="footer-add" id="footer-add-haiau3">
								<p class="cn-adr-head"> Mega Market Quy Nhơn - Bình Định</p>
								<p> Quốc lộ 1D, P. Ghềnh Ráng, Tp. Quy Nhơn</p>
								<a title="Bản đồ đường đi tới Showroom Nha Trang" target="_blank" class="link-map" href="https://www.google.com/maps/place/Si%C3%AAu+Th%E1%BB%8B+Mega Market/@13.7532259,109.2066708,15z/data=!4m5!3m4!1s0x0:0x7d4a6736e80831b9!8m2!3d13.7532259!4d109.2066708" rel="nofollow"> <i class="fa fa-map-marker" aria-hidden="true" style="color:red"></i> Bản đồ đường đi</a>
							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
							<div class="footer-add" id="footer-add-haiau4">
								<p class="cn-adr-head"> Mega Market Biên Hòa - Đồng Nai</p>
								<p> Đường Nguyễn Ái Quốc, Phường Quang Vinh, Tp. Biên Hòa</p>
								<a rel="nofollow" title="Bản đồ đường đi tới Mega Market Biên Hòa" class="link-map seoquake-nofollow" href="https://www.google.com/maps/place/MM+MEGA+MARKET+Bi%C3%AAn+H%C3%B2a/@10.956866,106.814345,15z/data=!4m2!3m1!1s0x0:0x84c05d0f23690ed7?sa=X&amp;ved=0ahUKEwj1v4HLrpTTAhXQNpQKHQN3A8AQ_BIIYzAK"> <i class="fa fa-map-marker" aria-hidden="true" style="color:red"></i> Bản đồ đường đi</a>
							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
							<div class="footer-add" id="footer-add-haiau1">
								<p class="cn-adr-head"> Mega Market Bình Dương</p>
								<p> Đại Lộ Bình Dương, Phường Phú Thọ, Thị Xã Thủ Dầu Một</p>
								<a class="link-map" title="Bản đồ đường đi tới Mega Market Bình Dương" target="_blank" href="https://www.google.com/maps/place/Mega Market+B%C3%ACnh+D%C6%B0%C6%A1ng/@10.96364,106.688379,15z/data=!4m2!3m1!1s0x0:0xde14e16862cc85ce?sa=X&amp;ved=0ahUKEwijrtH9r5TTAhVFupQKHVg2DcQQ_BIIZjAK" rel="nofollow"> <i class="fa fa-map-marker" aria-hidden="true" style="color:red"></i> Bản đồ đường đi</a>
							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
							<div class="footer-add" id="footer-add-haiau2">
								<p class="cn-adr-head"> Mega Market VŨNG TÀU</p>
								<p> Quốc lộ 51B, Phường 11, Tp. Vũng Tàu</p>
								<a title="Bản đồ đường đi tới Mega Market VŨNG TÀU" target="_blank" class="link-map" href="https://www.google.com/maps/place/MM+MEGA+MARKET+V%C5%A9ng+T%C3%A0u/@10.395103,107.1340189,15z/data=!4m2!3m1!1s0x0:0x3f655911b1ce6b6a?sa=X&amp;ved=0ahUKEwjd0-qbsJTTAhVME5QKHWF3A8AQ_BIIYjAK" rel="nofollow"> <i class="fa fa-map-marker" aria-hidden="true" style="color:red"></i> Bản đồ đường đi</a>
							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
							<div class="footer-add" id="footer-add-haiau3">
								<p class="cn-adr-head"> Mega Market HƯNG LỢI - Cần Thơ</p>
								<p> Quốc lộ 91B, Phường Hưng Lợi, Quận Ninh Kiều, Tp. Cần Thơ</p>
								<a title="Bản đồ đường đi tới Showroom HƯNG LỢI" target="_blank" class="link-map" href="https://www.google.com/maps/place/MM+MEGA+MARKET+H%C6%B0ng+L%E1%BB%A3i/@10.023032,105.760769,15z/data=!4m2!3m1!1s0x0:0xf3c5fc18c47a01f9?sa=X&amp;ved=0ahUKEwi_yvm1sJTTAhUHUZQKHXinBQsQ_BIIWjAK" rel="nofollow"> <i class="fa fa-map-marker" aria-hidden="true" style="color:red"></i> Bản đồ đường đi</a>
							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
							<div class="footer-add" id="footer-add-haiau4">
								<p class="cn-adr-head"> Mega Market LONG XUYÊN - An Giang</p>
								<p> 414, Đường Trần Hưng Đạo, Phường Mỹ Phước, Tp. Long Xuyên</p>
								<a rel="nofollow" title="Bản đồ đường đi tới Mega Market Biên Hòa" class="link-map seoquake-nofollow" href="https://www.google.com/maps/place/MM+MEGA+MARKET+Long+Xuy%C3%AAn/@10.371474,105.443412,15z/data=!4m5!3m4!1s0x0:0x1cb4aee0d1d21041!8m2!3d10.371474!4d105.443412"> <i class="fa fa-map-marker" aria-hidden="true" style="color:red"></i> Bản đồ đường đi</a>
							</div>
						</div>
					</div>
					<div class="copyright-footer">
						Copyright © Hai Au Group. All Rights Reserved. | <a rel="nofollow" href="<?php echo get_site_url(); ?>/quy-che-hoat-dong/">Quy chế hoạt động</a> | <a rel="nofollow" href="<?php echo get_site_url(); ?>/chinh-sach-bao-mat/">Chính sách bảo mật</a> | <a rel="nofollow" href="<?php echo get_site_url(); ?>/chinh-sach-bao-hanh/">Chính sách bảo hành</a> | <a href="<?php echo get_site_url(); ?>/chinh-sach-gia-han-bao-hanh/" rel="nofollow">Chính sách gia hạn bảo hành, đổi/mua lại sản phẩm</a>
						<br> Chỉ được phát hành lại thông tin từ website này khi có sự đồng ý bằng văn bản của Tập Đoàn Hải Âu.
					</div>
				</div>
			</div>
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
	<div class="hotline_bottom">
		<h4 class="title_hotline">Hotline 24/7</h4>
		<ul class="list_hotline">
			<li class="item_hotline"><span class="item_hotline_title">M. Bắc: </span><span><a href="tel:+84913102168" rel="nofollow">0913.102.168</a></span></li>
			<li class="item_hotline item_hotline2"><span class="item_hotline_title">M. Nam: </span><span><a href="tel:+84915078989" rel="nofollow">091.507.8989</a></span></li>
		</ul>
	</div><!-- .hotline_bottom -->
</div><!-- .site -->
<?php wp_footer(); ?>
<?php if( is_home() ) { ?>
<style>
	#menu2017 {
		display: block;
	}
</style>
<?php } ?>
</body>
</html>
