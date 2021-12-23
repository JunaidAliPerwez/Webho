@extends('web.layouts.main')
@section('content')
        <!-- START: Inner Banner-->
        @include('web.layouts.inner_banner')
        <!-- END: Inner Banner-->

<section class="consultation_services_sec web_consultation_services_sec">
	<div class="container">
		<div class="row">
			<div class="consultation_services_boxes">
				<div class="col-sm-7">
					<div class="consultation_services_box">
						<h2 class="title clr_blk_p">Get in Touch with Our Experts for A Free Consultation</h2>
						<p class="para clr_blk_p">A unique and creative branding can help your business stand out from the competition and get your brand noticed. The Webho has a team of experienced professionals proficient at creating innovative branding strategies that can help your brand uncover its true potential.</p>
						<div class="button mt_50">
							<a href="javascript:;" class="popup_btn blue_btn" onclick="order_now_value(this)" name="for $59">Order Now</a>
							<a href="javascript:;" class="chat tr_btn_blue" target="_self" onclick="setButtonURL();"> Live Chat</a>
						</div>
					</div>
				</div>
				<div class="col-sm-5">
					<div class="consultation_services_box_img">
						<img src="{{asset('web/images/ecom-page/webdesign-consultation-services-img.png')}}">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="iconic-sec">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="iconic-text">
					<h2 class="wow fadeInUp" data-wow-delay="420ms">Responsive & Interactive Website Designs</h2>
					<p class="wow fadeInUp" data-wow-delay="440ms">The Webho specializes in creating websites that are user-friendly and responsive. We believe that websites are the online representation of your brand. A website that impresses the audience has a greater chance of converting the visitor into a customer. We design and develop websites that help the business achieve their short-term and long-term goals.</p>
				</div>
				<div class="tabs">
					<ul class="nav nav-tabs iconic-nav">
						<li class="wow fadeInUp active" data-wow-delay="480ms"><a data-toggle="tab" href="#web-tab1">Wordpress <br><span>Websites</span></a></li>
						<li class="wow fadeInUp "><a data-toggle="tab" href="#web-tab2">Shopify <br><span>Websites</span></a></li>
						<li class="wow fadeInUp" data-wow-delay="460ms"><a data-toggle="tab" href="#web-tab3">Drupal</a></li>
						<li class="wow fadeInUp" data-wow-delay="480ms"><a data-toggle="tab" href="#web-tab4">Joomla </a></li>
						<li class="wow fadeInUp" data-wow-delay="480ms"><a data-toggle="tab" href="#web-tab5">Responsive <br><span>Websites </span></a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane fade in active" id="web-tab1">
						<div class="col-sm-12 p0 flex_center">
							<div class="col-sm-7">
								<div class="iconic-main">
									<h2 class="wow fadeInUp" data-wow-delay="420ms">WordPress Websites</h2>
									<p class="wow fadeInUp" data-wow-delay="460ms">What makes WordPress stand out from other platforms is its highly customizable Content Management System that offers various themes and plugins. The websites that are created on WordPress are search engine friendly and captivating at the same time.</p>
								</div>
								<div class="clearfix"></div>
								<div class="button mt_50">
									<a href="javascript:;" class="popup_btn blue_btn" onclick="order_now_value(this)" name="for $59">Order Now</a>
									<a href="javascript:;" class="chat tr_btn_blue" target="_self" onclick="setButtonURL();"> Live Chat</a>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="col-sm-5">
								<div class="iconic-image-box">
									<img class="wow zoomIn" data-wow-delay="520ms" src="{{asset('web/images/ecom-page/web-1.png')}}">
								</div>
							</div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane fade in " id="web-tab2">
						<div class="col-sm-12 p0 flex_center">
							<div class="col-sm-7">
								<div class="iconic-main">
									<h2>Shopify Websites</h2>
									<p>If you are looking to get an e-commerce website made, Shopify is the best choice for it. At DMD, we have Shopify experts that create unique eCommerce stores that are easy to manage by the admin and easy to navigate by the visitors.</p>
								</div>
								<div class="clearfix"></div>
								<div class="button mt_50">
									<a href="javascript:;" class="popup_btn blue_btn" onclick="order_now_value(this)" name="for $59">Order Now</a>
									<a href="javascript:;" class="chat tr_btn_blue" target="_self" onclick="setButtonURL();"> Live Chat</a>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="col-sm-5">
								<div class="iconic-image-box">
									<img src="{{asset('web/images/ecom-page/web-2.png')}}">
								</div>
							</div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane fade in" id="web-tab3">
						<div class="col-sm-12 p0 flex_center">
							<div class="col-sm-7">
								<div class="iconic-main">
									<h2>Drupal</h2>
									<p>Drupal is a popular web development platform that can be used
										for creating & modifying complex website structures. At The Webho,
									we have Drupal experts skilled at creating websites that load fast and with enhanced performance.</p>
								</div>
								<div class="clearfix"></div>
								<div class="button mt_50">
									<a href="javascript:;" class="popup_btn blue_btn" onclick="order_now_value(this)" name="for $59">Order Now</a>
									<a href="javascript:;" class="chat tr_btn_blue" target="_self" onclick="setButtonURL();"> Live Chat</a>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="col-sm-5">
								<div class="iconic-image-box">
									<img src="{{asset('web/images/ecom-page/web-3.png')}}">
								</div>
							</div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane fade in" id="web-tab4">
						<div class="col-sm-12 p0 flex_center">
							<div class="col-sm-7">
								<div class="iconic-main">
									<h2>Joomla</h2>
									<p>Joomla is an excellent Content Management System that comes with excellent features.
										At DMD, we have a team of Joomla developers to create websites that are highly functional,
									secure, and significantly increase sales & ROI.</p>
								</div>
								<div class="clearfix"></div>
								<div class="button mt_50">
									<a href="javascript:;" class="popup_btn blue_btn" onclick="order_now_value(this)" name="for $59">Order Now</a>
									<a href="javascript:;" class="chat tr_btn_blue" target="_self" onclick="setButtonURL();"> Live Chat</a>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="col-sm-5">
								<div class="iconic-image-box">
									<img src="{{asset('web/images/ecom-page/web-4.png')}}">
								</div>
							</div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane fade in" id="web-tab5">
						<div class="col-sm-12 p0 flex_center">
							<div class="col-sm-7">
								<div class="iconic-main">
									<h2>Responsive Websites</h2>
									<p>The Webho specializes in creating websites that are user-friendly and responsive. We believe that websites are the online representation of your brand. A website that impresses the audience has a greater chance of converting the visitor into a customer. We design and develop websites that help the business achieve their short-term and long-term goals.</p>
								</div>
								<div class="clearfix"></div>
								<div class="button mt_50">
									<a href="javascript:;" class="popup_btn blue_btn" onclick="order_now_value(this)" name="for $59">Order Now</a>
									<a href="javascript:;" class="chat tr_btn_blue" target="_self" onclick="setButtonURL();"> Live Chat</a>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="col-sm-5">
								<div class="iconic-image-box">
									<img src="{{asset('web/images/ecom-page/web-5.png')}}">
								</div>
							</div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane fade in" id="web-tab6">
						<div class="col-sm-12 p0 flex_center">
							<div class="col-sm-7">
								<div class="iconic-main">
									<h2>Responsive Website</h2>
									<p>A responsive website design looks perfect on various devices such as desktops, phones, laptops, tablets, etc. Our team of web experts creates responsive websites, leading to higher search engine rankings and increased customer engagement.</p>
								</div>
								<div class="clearfix"></div>
								<div class="button mt_50">
									<a href="javascript:;" class="popup_btn blue_btn" onclick="order_now_value(this)" name="for $59">Order Now</a>
									<a href="javascript:;" class="chat tr_btn_blue" target="_self" onclick="setButtonURL();"> Live Chat</a>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="col-sm-5">
								<div class="iconic-image-box">
									<img src="https://www.digitmediadesigns.com/404.php">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Portfolio -->
<section class="portfolio_sec">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="cn clr_blk title">Some of Our Recent Work</h2>
				<p class="title_para cn clr_blk_p">The Webho offers a comprehensive range of brand development and digital marketing services. We have a team of industry experts to provide your business with dependable solutions that can skyrocket your business's success. We specialize in providing top-notch web design, logo design, video animation, and digital marketing services. All our services are delivered by professionals who curate unique strategies as per your unique brand requirements. Take a peek at some of our latest works:</p>
				<div class="portfoilo_boxes">
					<!-- <ul id="nav-tabs-wrapper" class="nav nav-tabs nav-tabs-horizontal">
							<li class="active"><a href="#htab1" data-toggle="tab">Logo</a></li>
							<li><a href="#htab2" data-toggle="tab">Website</a></li>
							<li><a href="#htab3" data-toggle="tab">Video</a></li>
							<li><a href="#htab4" data-toggle="tab">Stationery</a></li>
							<li><a href="#htab5" data-toggle="tab">Social Media</a></li>
					</ul> -->
					<div class="tab-content">

						<div role="tabpanel" class="tab-pane fade in active " id="htab2">
							<div class="row">
								<div class="col-sm-4 col-xs-6 portfolio-box">
									<div class="portfolio_box video_portfolio_fancy js-wow u-slideUp is-animated" data-wow-delay="0.1s">
										<a class=" fancybox" rel="ligthbox" href="{{asset('web/images/port-new/web/1-1.jpg')}}">
											<div class="hovereffect"> <img src="{{asset('web/images/port-new/web/1.jpg')}}" alt=""> </div>
										</a>
									</div>
								</div>
								<div class="col-sm-4 col-xs-6 portfolio-box">
									<div class="portfolio_box video_portfolio_fancy js-wow u-slideUp is-animated" data-wow-delay="0.1s">
										<a class=" fancybox" rel="ligthbox" href="{{asset('web/images/port-new/web/2-1.jpg')}}">
											<div class="hovereffect"> <img src="{{asset('web/images/port-new/web/2.jpg')}}" alt=""> </div>
										</a>
									</div>
								</div>
								<div class="col-sm-4 col-xs-6 portfolio-box">
									<div class="portfolio_box video_portfolio_fancy js-wow u-slideUp is-animated" data-wow-delay="0.1s">
										<a class=" fancybox" rel="ligthbox" href="{{asset('web/images/port-new/web/3-1.jpg')}}">
											<div class="hovereffect"> <img src="{{asset('web/images/port-new/web/3.jpg')}}" alt=""> </div>
										</a>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-4 col-xs-6 portfolio-box">
									<div class="portfolio_box video_portfolio_fancy js-wow u-slideUp is-animated" data-wow-delay="0.1s">
										<a class=" fancybox" rel="ligthbox" href="{{asset('web/images/port-new/web/4-1.jpg')}}">
											<div class="hovereffect"> <img src="{{asset('web/images/port-new/web/4.jpg')}}" alt=""> </div>
										</a>
									</div>
								</div>
								<div class="col-sm-4 col-xs-6 portfolio-box">
									<div class="portfolio_box video_portfolio_fancy js-wow u-slideUp is-animated" data-wow-delay="0.1s">
										<a class=" fancybox" rel="ligthbox" href="{{asset('web/images/port-new/web/5-1.jpg')}}">
											<div class="hovereffect"> <img src="{{asset('web/images/port-new/web/5.jpg')}}" alt=""> </div>
										</a>
									</div>
								</div>
								<div class="col-sm-4 col-xs-6 portfolio-box">
									<div class="portfolio_box video_portfolio_fancy js-wow u-slideUp is-animated" data-wow-delay="0.1s">
										<a class=" fancybox" rel="ligthbox" href="{{asset('web/images/port-new/web/6-1.jpg')}}">
											<div class="hovereffect"> <img src="{{asset('web/images/port-new/web/6.jpg')}}" alt=""> </div>
										</a>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-4 col-xs-6 portfolio-box">
									<div class="portfolio_box video_portfolio_fancy js-wow u-slideUp is-animated" data-wow-delay="0.1s">
										<a class=" fancybox" rel="ligthbox" href="{{asset('web/images/port-new/web/7-1.jpg')}}">
											<div class="hovereffect"> <img src="{{asset('web/images/port-new/web/7.jpg')}}" alt=""> </div>
										</a>
									</div>
								</div>
								<div class="col-sm-4 col-xs-6 portfolio-box">
									<div class="portfolio_box video_portfolio_fancy js-wow u-slideUp is-animated" data-wow-delay="0.1s">
										<a class=" fancybox" rel="ligthbox" href="{{asset('web/images/port-new/web/8-1.jpg')}}">
											<div class="hovereffect"> <img loading="lazy" src="{{asset('web/images/port-new/web/8.jpg')}}" alt=""> </div>
										</a>
									</div>
								</div>
								<div class="col-sm-4 col-xs-6 portfolio-box">
									<div class="portfolio_box video_portfolio_fancy js-wow u-slideUp is-animated" data-wow-delay="0.1s">
										<a class=" fancybox" rel="ligthbox" href="{{asset('web/images/port-new/web/9-1.jpg')}}">
											<div class="hovereffect"> <img loading="lazy" src="{{asset('web/images/port-new/web/9.jpg')}}" alt=""> </div>
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
</section>
<!-- Portfolio -->
<!-- Pricing -->
<section class="price-sec web-designprice-sec">
	<div class="container">
		<div class="row">
			<div class="col-sm-offset-1 col-sm-10">

				<h2 class="title cn clr_blk_p">Our Custom Packages for our Clients </h2>
				<p class="para mt_20 cn clr_blk_p">Our core values are honesty, integrity, and innovation. We have excelled based on providing the work with complete transparency to all our clients. We offer various packages to cater to as many customers and turn away no one who feels the rates would make it difficult for them to avail the services. Our packages are very accommodating and considerate to allow more people to avail of all of our services. This has allowed way more customers to reach out to us.</p>

			</div>
			<div class="col-sm-12 p0 mt_50">
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane fade  active in" id="package_ecommerce">
						<div class="col-sm-4">
	                     <div class="price-bx price-bx-1">

	                        @foreach($setPackage as $key => $value)

                                @if ($value->id == 69)

                                    @include('web.packagesBox')


                                    <div class="view-del-btn">
                                    <a href="{{route('startupEcommerceDetails')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
                                    <a name="299" data-fancybox="" title="{{ $value->name }}" data-src="#popupformWebsite" href="javascript:;" class="view-del-btn tr_btn_blue open_modal" data-pack_id="Basic Website Package - $244.00">Order Now</a>
                                    </div>
                                    <div class="bnr-btn price-btn">
                                    <a href="{{ $setting['phone'] }}" class="packages_tel"><i class="fa fa-phone"></i>{{ $setting['phone'] }}</a>
                                    </div>

                                @endif

                            @endforeach
	                     </div>
	                  </div>

	                  <div class="col-sm-4">
	                     <div class="price-bx price-bx-1">
                            @foreach($setPackage as $key => $value)

                                @if ($value->id == 2)

                                    @include('web.packagesBox')

                                    <div class="view-del-btn">
                                    <a href="{{route('startupEcommerceDetails')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
                                    <a name="299" data-fancybox="" title="{{ $value->name }}" data-src="#popupformWebsite" href="javascript:;" class="view-del-btn tr_btn_blue open_modal" data-pack_id="Basic Website Package - $244.00">Order Now</a>
                                    </div>
                                    <div class="bnr-btn price-btn">
                                    <a href="{{ $setting['phone'] }}" class="packages_tel"><i class="fa fa-phone"></i>{{ $setting['phone'] }}</a>
                                    </div>

                                @endif

                            @endforeach

	                     </div>
	                  </div>
	                  <div class="col-sm-4">
	                     <div class="price-bx">

                            @foreach($setPackage as $key => $value)

                                @if ($value->id == 3)

                                    @include('web.packagesBox')

                                    <div class="view-del-btn">
                                    <a href="{{route('professionalEcommerceDetails')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
                                    <a name="299" data-fancybox="" title="{{ $value->name }}" data-src="#popupformWebsite" href="javascript:;" class="view-del-btn tr_btn_blue open_modal" data-pack_id="Basic Website Package - $244.00">Order Now</a>
                                    </div>

                                    <div class="bnr-btn price-btn">
                                    <a href="{{ $setting['phone'] }}" class="packages_tel"><i class="fa fa-phone"></i>{{ $setting['phone'] }}</a>
                                    </div>

                                @endif

                            @endforeach

	                     </div>
	                  </div>

	               </div>
				</div>
			</div>

		</div>
	</div>
</section>
@endsection
@section('css')
<style type="text/css">
</style>
@endsection
@section('js')
@endsection
