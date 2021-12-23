<?php
use App\Models\logo;
use App\Models\package;
use App\Models\budget_range;
use App\Models\setting;
use App\Models\cms;
use App\Models\client;
use App\Models\testimonials;
$clients = client::get();
$testimonials = testimonials::get();
$setPackage = package::get();
$setbudgetRange = budget_range::get();
$footer_logo = logo::find(1);
$setting = setting::find(1);
$content_10 = cms::find(10);
$content_11 = cms::find(11);
$content_12 = cms::find(12);
$content_13 = cms::find(13);
$content_14 = cms::find(14);
$content_15 = cms::find(15);
$content_16 = cms::find(16);
$content_17 = cms::find(17);
$content_18 = cms::find(18);
$content_19 = cms::find(19);
$actual_link = "$_SERVER[REQUEST_URI]";
// dd($actual_link);
?>
@if( $actual_link != '/terms-condition' &&
 $actual_link != '/return-policy'&&
  $actual_link != '/privacy-policy'&&
   $actual_link != '/review'&&
    $actual_link != '/combo-package'&& $actual_link != '/contact-us')
<!-- Portfolio -->
<section class="satisfied_clients_sec">
    <div class="container">
        <h2 class="title clr_wht cn">{{$content_10->name}}</h2>
         <?php echo html_entity_decode($content_10['details']) ?>
        <div class="row">
            <div class="satisfied_clients_boxes">
@foreach ($clients as $key => $client)
            <div class="col-sm-2 {{($key==6)?'col-sm-offset-1':''}}">
                    <div class="satisfied_clients_box">
                        <img src="{{asset($client->img)}}" />
                    </div>
            </div>
@endforeach
            </div>
        </div>
    </div>
</section>
<section class="cta_sec">
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <h2 class="title clr_wht">{{$content_11->name}}</h2>
                <?php echo html_entity_decode($content_11['details']) ?>
                <div class="button">
                    <a href="javascript:;" class="popup_btn blue_btn" onclick="order_now_value(this)" name="for $59">Order Now</a>
                    <a href="javascript:;" class="chat tr_btn" target="_self" onclick="setButtonURL();"> Live Chat</a>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="cta_box_img">
                    <img src="{{asset($content_11->img)}}" alt="" />
                </div>
            </div>
        </div>
    </div>
</section>
<section class="process_sec">
    <div class="container">
        <h2 class="title cn clr_blk">{{$content_12->name}}</h2>
        <?php echo html_entity_decode($content_12['details']) ?>
        <div class="row">
            <div class="process_boxes">
                <div class="col-sm-3">
                    <div class="process_box process_box1">
                        <div class="process_iocn">
                            <img src="{{asset($content_13->img)}}" alt="" />
                        </div>
                        <?php echo html_entity_decode($content_13['details']) ?>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="process_box process_box2">
                        <div class="process_iocn">
                            <img src="{{asset($content_14->img)}}" alt="" />
                        </div>
                        <?php echo html_entity_decode($content_14['details']) ?>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="process_box process_box3">
                        <div class="process_iocn">
                            <img src="{{asset($content_15->img)}}" alt="" />
                        </div>
                        <?php echo html_entity_decode($content_15['details']) ?>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="process_box process_box4">
                        <div class="process_iocn">
                            <img src="{{asset($content_16->img)}}" alt="" />
                        </div>
                        <?php echo html_entity_decode($content_16['details']) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
@if( $actual_link == '/combo-package' || $actual_link == '/contact-us')
<section class="section-padding gray_bg get_quote">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="form_bt_box">
                    <img src="{{asset($content_18->img)}}" alt="" />
                </div>
            </div>
            <div class="col-sm-6">
                @include('web.contactUsBox')
            </div>
        </div>
    </div>
</section>
@endif
<section class="cta_sec2">
    <div class="container">
        <div class="row">
            <div class="cta_sec2_boxes">

                <a href="tel:{{str_replace("-","",$setting["phone"])}}">
                    <div class="cta_sec2_box">
                        <img src="{{asset('web/images/cta-icon1.png')}}" alt="" />
                        <p>{{ $setting['phone'] }}</p>
                    </div>
                </a>

                <a href="javascript:;" class="popup_btn" onclick="order_now_value(this)" name="for $59">
                    <div class="cta_sec2_box">
                        <img src="{{asset('web/images/cta-icon2.png')}}" alt="" />
                        <p>Order Now</p>
                    </div>
                </a>

                <a href="javascript:;" class="chat" target="_self" onclick="setButtonURL();">
                    <div class="cta_sec2_box">
                        <img src="{{asset('web/images/cta-icon3.png')}}" alt="" />
                        <p>Live Chat</p>
                    </div>
                </a>

                <a href="javascript:;">
                    <div class="cta_sec2_box">
                        <img src="{{asset('web/images/cta-icon4.png')}}" alt="" />
                        <p>USA</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="testi-sec">
    <div class="container">
        <h2 class="title cn clr_blk">{{$content_17->name}}</h2>
         <?php echo html_entity_decode($content_17['details']) ?>
        <div class="row">
            <div class="col-sm-12">
                <div class="testi-slider-st">
                    <div class="testi-slider">
<?php foreach ($testimonials as $key => $testimonial): ?>
                         <div>
                            <div class="testi-div col-sm-12">
                                <div class="col-sm-5">
                                    <div class="testi-img">
                                        <img src="{{asset($testimonial->img)}}" />
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="testi-txt">
                                        <h3>{{$testimonial->name}}</h3>
                                       <?php echo html_entity_decode($testimonial['details']) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
<?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@if( $actual_link != '/combo-package' && $actual_link != '/contact-us')
<section class="section-padding gray_bg get_quote">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="form_bt_box">
                    <img src="{{asset($content_18->img)}}" alt="" />
                </div>
            </div>
            <div class="col-sm-6">
                @include('web.contactUsBox')
            </div>
        </div>
    </div>
</section>
@endif
<footer>
<div class="footer">
  <div class="container">
    <div class="col-sm-5 col-xs-12 fbox1">
      <h4>{{$content_19->name}}</h4>
      <?php echo html_entity_decode($content_19['details']) ?>
    <img loading="lazy" src="{{asset('web/images/payment.png')}}"></div>
    <div class="col-sm-4 col-xs-12">
      <h4>Our Services</h4>
      <ul>
        <li><a href="{{route('webDesign')}}"><i class="fa fa-check"></i>Logo Design</a></li>
        <li><a href="{{route('webAppDev')}}"><i class="fa fa-check"></i>Web Design</a></li>
        <li><a href="{{route('ecommerceDevelopment')}}"><i class="fa fa-check"></i>Ecommerce Development</a></li>
        <li><a href="{{route('videoAnimation')}}"><i class="fa fa-check"></i>Video Animation</a></li>
        <li><a href="{{route('packages')}}">Our Packages</a></li>
        <li><a href="{{route('portfolio')}}">Our Portfolio</a></li>
        <li><a href="{{route('comboPackage')}}"><i class="fa fa-check"></i>Combo Package</a></li>
        <li><a href="{{route('contact')}}"><i class="fa fa-check"></i>Contact Us </a></li>
        {{-- <li><a href="{{route('review')}}"><i class="fa fa-check"></i>Reviews</a></li> --}}
        <li><a href="#" target="_blank"><i class="fa fa-check"></i>Corporate Profile</a></li>
      </ul>
    </div>
    <div class="col-sm-3 col-xs-12">
      <h4>Contact details</h4>
      <p>Phone: <a href="tel:{{str_replace("-","",$setting["phone"])}}">{{ $setting['phone'] }}</a><br>
      {{-- Email: <a href="cdn-cgi/l/email-protection.php#6b180a070e182b0f020c021f060e0f020a0f0e18020c051845080406"><span class="__cf_email__" data-cfemail="25564449405665414c424c514840414c444140564c424b560b464a48">[email&#160;protected]</span></span></a></p> --}}
      <!-- <h4 class="soc">Lets Get Social </h4> -->
      <div class="cndbox">
        <section class="row">
          <aside class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="soc">
              <a href="{{ $setting['facebook'] }}" target="_blank"><i class="fa fa-facebook"></i></a>
              <a href="{{ $setting['twitter'] }}" target="_blank"><i class="fa fa-twitter"></i></a>
              <a href="{{ $setting['instagram'] }}" target="_blank"><i class="fa fa-instagram"></i></a>
              <a href="{{ $setting['trustpilot'] }}" target="_blank"><img src="{{asset('web/images/trustpilot-icon-2-copy.png')}}" alt=""></a>
              <a href="{{ $setting['reviews'] }}" target="_blank"><img src="{{asset('web/images/review-icon-2.png')}}" alt=""></a>
              <a href="{{ $setting['bark'] }}" target="_blank"><img src="{{asset('web/images/bark-icon-2.png')}}" alt=""></a>
            </div>
          </aside>
          <aside class="col-sm-3 col-xs-12">
            <div class="footer-logo-img">
              <img class="footer-logo" src="{{asset($footer_logo->img)}}" class="" alt="">
            </div>
          </aside>
        </section>
      </div>
    </div>
    <div class="footer_bottom"><span> {{ $setting['copyright'] }}</span> | <a href="{{route('termsCondition')}}">Terms of Use</a> | <a href="{{route('privacyPolicy')}}">Privacy Policy</a> | <a href="{{route('returnPolicy')}}">Return Policy </a> </div>
  </div>
</div>
<div class="overlay-bg"></div>
<div class="popupform-main">
    <div class="pop-form ta-center">
        <div class="col-sm-5 mobile-col-rm"></div>
        <div id="pop-form" class="col-sm-7">
            <h2>Start Your Project</h2>
            <a href="javascript:;" class="close-btn ta-center">X</a>
            <div class="clearfix"></div>
            <form action="{{route('inquiry_project_submit')}}" class="jform validate main-pop" method="POST">
                <?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
                <input type="hidden" value="<?= $actual_link ?>" id="url" name="url" />
                @csrf
                <div class="col-md-12">
                    <div class="control-group">
                        <input type="text" placeholder="Name" name="name" class="required" required />
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="control-group">
                        <input type="email" name="email" class="required email" placeholder="Enter your email here" required />
                    </div>
                </div>
                <div class="col-md-12 phonecode">
                    <div class="control-group clearfix">
                        <div class="numberarea">
                            <input type="number" name="phonenumber" id="phone" class="number required" placeholder="Phone Number" required />
                        </div>
                    </div>
                </div>
                <div class="col-md-12 phonecode">
                    <div class="control-group clearfix">
                        <div class="numberarea">
                            <select class="form-control dropdown-st" name="service" required>
                                <option value="">Please Select Service</option>
                                <option value="Web Design">Web Design</option>
                                <option value="Video Animation">Video Animation</option>
                                <option value="Logo Animation">Logo Animation</option>
                                <option value="SEO">SEO</option>
                                <option value="SMM">SMM</option>
                                <option value="ORM">ORM</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="control-group clearfix">
                        <div class="textarea_auto">
                            <textarea class="form-control" name="message" placeholder="Talk about your project" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 p0">
                    <label class="control control--checkbox">
                        <input type="checkbox" name="checkbox" value="yes" required />&nbsp;I have read &amp; fully understood and agreed to the <a href="{{route('termsCondition')}}">Terms of Use</a> and the
                        <a href="{{route('privacyPolicy')}}">Privacy Policy.</a><br />
                        <input type="checkbox" checked="checked" disabled="disabled" id="test1" style="width: 15px; height: 15px; margin-top: 6px;" />
                        <label for="test1" style="margin-top: 2px;">&nbsp;Please send me a copy of them. </label>
                        <div class="control__indicator"></div>
                    </label>
                </div>
                <div class="col-md-12">
                    <input type="submit" class="btn btn-default pop_btn submit-btn fspx-23 ls-medium d-block w-100 fw-bold" value="Submit" />
                </div>
            </form>
        </div>
    </div>
</div>
<!-- INCLUDE POPUP -->
<div style="display: none;" class="popupform myModal" id="popupformWebsite">
    <h2>We are here to help!</h2>
    <p>Providing you the perfect solution for your business needs. Let's work together and unlock doors to success.</p>
    <form action="{{route('order_placed_submit')}}" id="package_form" data-noinfo="true" data-customcallback="querycallback" class="CrudForm cmxform validate-popupform-web" method="POST">
        <?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
                <input type="hidden" value="<?= $actual_link ?>" id="url" name="url" />
                @csrf
        <div class="row">
            <div class="col-md-6">
                <ul>
                    <li>
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" class="required" placeholder="Full Name *" name="name" required/>
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul>
                    <li>
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <input type="email" class="required email" placeholder="Email Address *" name="email" required/>
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul>
                    <li>
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <input type="text" class="number" minlength="10" required placeholder="Phone No. *" name="phone_number" />
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul>
                    <li>
                        <select name="budget_id" id="form-your-budget" aria-invalid="false" required class="form-control">
                            <option value="">Budget range</option>
                            @foreach($setbudgetRange as $key => $value)
                            <option value="{{ $value->id }}">{{ $value->name }}</option>
                            @endforeach
                        </select>
                    </li>
                </ul>
            </div>
            <div class="col-md-12">
                <ul>
                    <li>
                        <select name="package_id" id="packages" class="valid safari_only form-control" aria-invalid="false" required>
                            <option value="">Select Package</option>
                            @foreach($setPackage as $key => $value)
                            <option value="<?= $value->id ?>"><?= $value->name . ' -  $' . ($value->discount_price == 0 ? $value->price : $value->discount_price) ?></option>
                            @endforeach
                        </select>
                    </li>
                </ul>
            </div>
            <div class="col-md-12">
                <ul>
                    <li>
                        <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                        <textarea name="message" id="message" class="required" required placeholder="Business Description"></textarea>
                    </li>
                </ul>
            </div>
            <div class="col-md-12">
                <ul>
                    <li>
                        <!--<input  class="btn-custom" type="button" id="package_submit"  value="Submit">-->
                        <a class="btn-custom popup-btn" style="cursor: pointer;" id="package_submit">Submit</a>
                    </li>
                </ul>
            </div>
        </div>
    </form>
</div>
<div style="display: none;" class="popupform" id="popupform">
    <h2>We are here to help!</h2>
    <p>Providing you the perfect solution for your business needs. Let's work together and unlock doors to success.</p>
    <form action="../../../includes/sendmail.php" method="post" class="validate-popupform">
        <div class="row">
            <div class="col-md-12">
                <ul>
                    <li>
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" class="required" required placeholder="Full Name *" name="customer_name" />
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul>
                    <li>
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <input type="email" class="required email" required placeholder="Email Address *" name="email_address" />
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul>
                    <li>
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <input type="text" class="required number" minlength="10" required placeholder="Phone No. *" name="contact_number" />
                    </li>
                </ul>
            </div>
            <div class="col-md-12">
                <ul>
                    <li>
                        <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                        <textarea name="comment" class="required" required placeholder="To help us understand better, enter a brief description about your project."></textarea>
                    </li>
                </ul>
            </div>
            <div class="col-md-12">
                <ul>
                    <li>
                        <input type="submit" value="Submit" />
                        <input type="hidden" name="send" value="1" />
                        <input type="hidden" name="lead_area" value="" class="leadprice" />
                        <!-- Email Source -->
                        <input type="hidden" name="lb_source" value="" />
                        <input type="hidden" name="lb_source_cat" value="" />
                        <input type="hidden" name="lb_source_nam" value="" />
                        <input type="hidden" name="lb_source_ema" value="" />
                        <input type="hidden" name="lb_source_con" value="" />
                        <input type="hidden" name="lb_source_pho" value="" />
                        <input type="hidden" name="lb_source_off" value="" />
                        <!-- Customer Info -->
                        <input type="hidden" name="fullpageurl" value="index.html" />
                        <input type="hidden" name="pageurl" value="index.html" />
                        <!-- ip2Location -->
                        <input type="hidden" name="ip2loc_ip" value="" />
                        <input type="hidden" name="ip2loc_isp" value="" />
                        <input type="hidden" name="ip2loc_org" value="" />
                        <input type="hidden" name="ip2loc_country" value="" />
                        <input type="hidden" name="ip2loc_region" value="" />
                        <input type="hidden" name="ip2loc_city" value="" />
                    </li>
                </ul>
            </div>
        </div>
    </form>
</div>
<div style="display: none;" class="popupform" id="popupformWebsiteVideo">
    <h2>We are here to help!</h2>
    <p>Providing you the perfect solution for your business needs. Let's work together and unlock doors to success.</p>
    <form action="../../../includes/sendmail.php" method="post" class="validate-popupform-video">
        <div class="row">
            <div class="col-md-12">
                <ul>
                    <li>
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" class="required" required placeholder="Full Name *" name="cn" />
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul>
                    <li>
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <input type="email" class="required email" required placeholder="Email Address *" name="em" />
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul>
                    <li>
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <input type="text" class="required number" minlength="10" required placeholder="Phone No. *" name="pn" />
                    </li>
                </ul>
            </div>
            <div class="col-md-12">
                <ul>
                    <li>
                        <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                        <textarea name="msg" class="required" required placeholder="To help us understand better, enter a brief description about your project."></textarea>
                    </li>
                </ul>
            </div>
            <div class="col-md-12">
                <ul>
                    <li>
                        <input type="submit" value="Submit" />
                        <input type="hidden" name="send" value="1" />
                        <input type="hidden" name="lead_area" value="" class="leadprice" />
                        <!-- Email Source -->
                        <input type="hidden" name="lb_source" value="" />
                        <input type="hidden" name="lb_source_cat" value="" />
                        <input type="hidden" name="lb_source_nam" value="" />
                        <input type="hidden" name="lb_source_ema" value="" />
                        <input type="hidden" name="lb_source_con" value="" />
                        <input type="hidden" name="lb_source_pho" value="" />
                        <input type="hidden" name="lb_source_off" value="" />
                        <!-- Customer Info -->
                        <input type="hidden" name="fullpageurl" value="index.html" />
                        <input type="hidden" name="pageurl" value="index.html" />
                        <!-- ip2Location -->
                        <input type="hidden" name="ip2loc_ip" value="" />
                        <input type="hidden" name="ip2loc_isp" value="" />
                        <input type="hidden" name="ip2loc_org" value="" />
                        <input type="hidden" name="ip2loc_country" value="" />
                        <input type="hidden" name="ip2loc_region" value="" />
                        <input type="hidden" name="ip2loc_city" value="" />
                    </li>
                </ul>
            </div>
        </div>
    </form>
</div>
<div style="display: none;" class="popupform" id="popupformWebsiteQuote">
    <h2>Get a Free Quote</h2>
    <p>Providing you the perfect solution for your business needs. Let's work together and unlock doors to success.</p>
    <form action="../../../includes/sendmail.php" method="post" class="validate-popupform-quote">
        <div class="row">
            <div class="col-md-12">
                <ul>
                    <li>
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" class="required" required placeholder="Full Name *" name="cn" />
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul>
                    <li>
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <input type="email" class="required email" required placeholder="Email Address *" name="em" />
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul>
                    <li>
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <input type="text" class="required number" minlength="10" required placeholder="Phone No. *" name="pn" />
                    </li>
                </ul>
            </div>
            <div class="col-md-12">
                <ul>
                    <li>
                        <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                        <textarea name="msg" class="required" required placeholder="To help us understand better, enter a brief description about your project."></textarea>
                    </li>
                </ul>
            </div>
            <div class="col-md-12">
                <ul>
                    <li>
                        <input type="submit" value="Submit" />
                        <input type="hidden" name="send" value="1" />
                        <input type="hidden" name="lead_area" value="0" class="leadprice" />
                        <!-- Email Source -->
                        <input type="hidden" name="lb_source" value="" />
                        <input type="hidden" name="lb_source_cat" value="" />
                        <input type="hidden" name="lb_source_nam" value="" />
                        <input type="hidden" name="lb_source_ema" value="" />
                        <input type="hidden" name="lb_source_con" value="" />
                        <input type="hidden" name="lb_source_pho" value="" />
                        <input type="hidden" name="lb_source_off" value="" />
                        <!-- Customer Info -->
                        <input type="hidden" name="fullpageurl" value="index.html" />
                        <input type="hidden" name="pageurl" value="index.html" />
                        <!-- ip2Location -->
                        <input type="hidden" name="ip2loc_ip" value="" />
                        <input type="hidden" name="ip2loc_isp" value="" />
                        <input type="hidden" name="ip2loc_org" value="" />
                        <input type="hidden" name="ip2loc_country" value="" />
                        <input type="hidden" name="ip2loc_region" value="" />
                        <input type="hidden" name="ip2loc_city" value="" />
                    </li>
                </ul>
            </div>
        </div>
    </form>
</div>
<div style="display: none;" class="popupform" id="popupformthnks">
    <h2>We are here to help!</h2>
    <p>Providing you the perfect solution for your business needs. Let's work together and unlock doors to success.</p>
    <form action="../../../includes/sendmail.php" method="post" class="validate-popupform-thnks">
        <div class="row">
            <div class="col-md-12">
                <ul>
                    <li>
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" class="required" required placeholder="Full Name *" name="cn" />
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul>
                    <li>
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <input type="email" class="required email" required placeholder="Email Address *" name="em" />
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul>
                    <li>
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <input type="text" class="required number" minlength="10" required placeholder="Phone No. *" name="pn" />
                    </li>
                </ul>
            </div>
            <div class="col-md-12">
                <ul>
                    <li>
                        <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                        <textarea name="msg" class="required" required placeholder="To help us understand better, enter a brief description about your project."></textarea>
                    </li>
                </ul>
            </div>
            <div class="col-md-12">
                <ul>
                    <li>
                        <input type="submit" value="Submit" />
                        <input type="hidden" name="send" value="1" />
                        <input type="hidden" name="lead_area" value="" class="leadprice" />
                        <!-- Email Source -->
                        <input type="hidden" name="lb_source" value="" />
                        <input type="hidden" name="lb_source_cat" value="" />
                        <input type="hidden" name="lb_source_nam" value="" />
                        <input type="hidden" name="lb_source_ema" value="" />
                        <input type="hidden" name="lb_source_con" value="" />
                        <input type="hidden" name="lb_source_pho" value="" />
                        <input type="hidden" name="lb_source_off" value="" />
                        <!-- Customer Info -->
                        <input type="hidden" name="fullpageurl" value="index.html" />
                        <input type="hidden" name="pageurl" value="index.html" />
                        <!-- ip2Location -->
                        <input type="hidden" name="ip2loc_ip" value="" />
                        <input type="hidden" name="ip2loc_isp" value="" />
                        <input type="hidden" name="ip2loc_org" value="" />
                        <input type="hidden" name="ip2loc_country" value="" />
                        <input type="hidden" name="ip2loc_region" value="" />
                        <input type="hidden" name="ip2loc_city" value="" />
                    </li>
                </ul>
            </div>
        </div>
    </form>
</div>
<div style="display: none;" class="popupform" id="popupformCombo">
    <h2>We are here to help!</h2>
    <p>Providing you the perfect solution for your business needs. Let's work together and unlock doors to success.</p>
    <form action="../../../includes/sendmail.php" method="post" class="validate-popupform-combo">
        <div class="row">
            <div class="col-md-12">
                <ul>
                    <li>
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" class="required" required placeholder="Full Name *" name="cn" />
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul>
                    <li>
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <input type="email" class="required email" required placeholder="Email Address *" name="em" />
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul>
                    <li>
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <input type="text" class="required number" minlength="10" required placeholder="Phone No. *" name="pn" />
                    </li>
                </ul>
            </div>
            <div class="col-md-12">
                <ul>
                    <li>
                        <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                        <textarea name="msg" class="required" required placeholder="To help us understand better, enter a brief description about your project."></textarea>
                    </li>
                </ul>
            </div>
            <div class="col-md-12">
                <ul>
                    <li>
                        <input type="submit" value="Submit" />
                        <input type="hidden" name="send" value="1" />
                        <input type="hidden" name="lead_area" value="" class="leadprice" />
                        <!-- Email Source -->
                        <input type="hidden" name="lb_source" value="" />
                        <input type="hidden" name="lb_source_cat" value="" />
                        <input type="hidden" name="lb_source_nam" value="" />
                        <input type="hidden" name="lb_source_ema" value="" />
                        <input type="hidden" name="lb_source_con" value="" />
                        <input type="hidden" name="lb_source_pho" value="" />
                        <input type="hidden" name="lb_source_off" value="" />
                        <!-- Customer Info -->
                        <input type="hidden" name="fullpageurl" value="index.html" />
                        <input type="hidden" name="pageurl" value="index.html" />
                        <!-- ip2Location -->
                        <input type="hidden" name="ip2loc_ip" value="" />
                        <input type="hidden" name="ip2loc_isp" value="" />
                        <input type="hidden" name="ip2loc_org" value="" />
                        <input type="hidden" name="ip2loc_country" value="" />
                        <input type="hidden" name="ip2loc_region" value="" />
                        <input type="hidden" name="ip2loc_city" value="" />
                    </li>
                </ul>
            </div>
        </div>
    </form>
</div>
</footer>
<style>
    .overlay-bg {
        background: rgba(0, 0, 0, 0.8);
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        z-index: 10;
        display: none;
    }
    .popupform-main label.control.control--checkbox {
        text-align: left;
        font-weight: 500;
    }
    .popupform-main label.control.control--checkbox label {
        font-weight: 500;
    }
    .popupform-main label.control.control--checkbox a {
        color: #000;
    }
    .control--checkbox {
        color: #000;
    }
    .pop-form .close-btn {
        width: 45px;
        height: 45px;
        display: block;
        position: absolute;
        top: 0;
        right: 140px;
        font-size: 38px;
        font-weight: 500;
        color: #000;
        padding-top: 3px;
        background-color: transparent;
        text-align: center;
        border-radius: 50px;
        text-decoration: none;
        align-items: center;
        display: grid;
        border: 0;
        /* border: 5px solid #fff; */
    }
    .p0 {
        padding: 0;
    }
    div#pop-form {
        margin: 0 auto;
        display: table;
        text-align: left;
        padding-top: 0;
        width: 65%;
    }
    .textarea_auto textarea {
        background-color: rgb(255, 255, 255);
        box-shadow: 5.142px 6.128px 54px 0px rgba(162, 162, 162, 0.15);
        border-radius: 32px;
        resize: none;
        padding-top: 15px;
        height: 60px;
        border: 0;
    }
    .pop-form form .control-group input:focus {
        outline: 0;
    }
    .pop-form form .control-group textarea:focus {
        outline: 0;
    }
    div#pop-form form {
        width: 75%;
        display: table;
    }
    .pop-form .submit-btn {
        font-size: 18px;
        width: 100%;
        padding: 10px 20px;
        color: #fff;
        cursor: pointer;
        border-radius: 5px;
        position: relative;
        border: none;
        margin-top: 15px;
        margin: 10px 0 0 0px !important;
        font-weight: 300;
        text-transform: uppercase;
        display: table;
        text-align: left;
        background: #235acf;
        width: auto;
        border-radius: 0 32px 32px 32px;
    }
    .popupform-main.active {
        display: block;
    }
    .popupform-main {
        position: fixed;
        background-color: rgba(0, 0, 0, 0.62);
        top: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        width: 100%;
        height: 100%;
        z-index: 9999;
        display: none;
    }
    .pop-form {
        position: absolute;
        width: 1040px;
        height: 560px;
        top: 0px;
        left: 0;
        bottom: 0;
        right: 0;
        margin: auto;
        /* background: url(popup-bg2.png); */
        background: url("{{asset("web/images/popup-bg2.png")}}");
        padding: 0px 0 0px 0;
        z-index: 99;
        -webkit-transition: 0.5s;
        -moz-transition: 0.5s;
        -o-transition: 0.5s;
        transition: 0.5s;
        background-size: 92%;
        background-repeat: no-repeat;
        display: flex;
        align-items: center;
        justify-content: flex-start;
    }
    .popupform-main .main-pop .col-md-12 {
        padding: 0;
    }
    .popupform-main h3 {
        font-size: 26px;
        margin: 31px 0 0 0;
        float: none;
        color: #ffffff;
        font-weight: 500;
        text-align: center;
        padding: 0 !important;
    }
    .popupform-main h2 {
        font-size: 40px;
        margin: 10px 0 0 0;
        color: #235acf;
        font-weight: 700;
        text-align: LEFT;
    }
    .popupform-main h4 {
        font-size: 26px;
        margin: 8px 0 0 0;
        color: #ffffff;
        font-weight: 700;
    }
    .fspx-23 {
        font-size: 23px;
    }
    .fw-exbold {
        font-weight: 800 !important;
    }
    .ls-xsmall {
        letter-spacing: -2px;
    }
    .fc-red {
        color: #fb2224;
    }
    .tt-uppercase {
        text-transform: uppercase !important;
    }
    .popupform-main h6 {
        letter-spacing: 0;
        font-size: 45px;
        background: #4274fa;
        color: #fff;
        border-radius: 10px;
        padding: 10px 15px 5px 15px;
        text-align: left;
        position: relative;
        right: 0px;
        margin: 0px;
        float: right;
    }
    .fspx-20 {
        font-size: 20px;
        display: block;
    }
    .fspx-23 {
        font-size: 23px;
        margin-bottom: 10px;
    }
    .fw-normal {
        font-weight: 400 !important;
    }
    .popupform-main .main-pop {
        padding: 15px 10px 0 0;
    }
    .pop-form .no-thanks {
        text-decoration: underline;
        color: #666666;
    }
    .pop-form form .control-group {
        margin-bottom: 10px;
    }
    form .control-group {
        margin-bottom: 24px;
        position: relative;
    }
    .pop-form form .control-group input[type="text"],
    .pop-form form .control-group input[type="text"],
    .pop-form form .control-group input[type="number"],
    .pop-form form .control-group input[type="email"],
    .pop-form form .control-group select,
    .pop-form form .control-group textarea {
        background-color: #fff;
        text-align: left;
    }
    .popupform-main form input[type="text"],
    .popupform-main form input[type="number"],
    .popupform-main form input[type="email"] {
        padding-left: 10px;
        min-height: auto;
    }
    .popupform-main form select {
        color: #333333;
        padding: 10px;
        height: auto;
        width: 100%;
        background: rgb(255, 255, 255);
        box-shadow: 5.142px 6.128px 54px 0px rgba(162, 162, 162, 0.15);
        border: 0;
        border-radius: 32px;
        margin-bottom: 6px;
    }
    .popupform-main form input[type="text"],
    .popupform-main form input[type="number"],
    .popupform-main form input[type="email"] {
        color: #333333;
        padding: 10px;
        height: auto;
        width: 100%;
        -webkit-appearance: none;
        border-radius: 4px;
        background: rgb(255, 255, 255);
        box-shadow: 5.142px 6.128px 54px 0px rgba(162, 162, 162, 0.15);
        border: 0;
        border-radius: 32px;
        margin-bottom: 6px;
    }
    form .numberarea {
        width: auto;
        position: relative;
    }
    .pop-form .submit-btn {
        font-size: 18px;
        width: 100%;
        padding: 10px 20px;
        color: #fff;
        cursor: pointer;
        border-radius: 5px;
        position: relative;
        border: none;
        margin-top: 15px;
        margin: 10px 0 0 0px !important;
        font-weight: 300;
        text-transform: uppercase;
        display: table;
        text-align: left;
        background: #235acf;
        width: auto;
        border-radius: 0 32px 32px 32px;
    }
    .pop-form .no-thanks {
        text-decoration: underline;
        color: #666666;
    }
    .popupform-main h6:before {
        position: absolute;
        content: "";
        left: -35px;
        top: 0px;
        width: 0;
        height: 0;
        border-top: 0px solid transparent;
        border-right: 45px solid #4274fa;
        border-bottom: 28px solid transparent;
    }
    .float-left {
        float: left;
    }
    .lh-medium {
        line-height: 1.2;
    }
    .lh-medium {
        line-height: 1.2;
    }
    .ta-left {
        text-align: left;
    }
    .fw-exbold {
        font-weight: 800 !important;
    }
    .mtpx-60 {
        margin-top: 60px;
    }
    @media (max-width: 1550px) {
        div#pop-form form {
            width: 83%;
            display: table;
        }
        .pop-form {
            width: 950px;
            height: 620px;
            display: flex;
            align-items: center;
        }
        div#pop-form {
            width: 55%;
        }
        .pop-form {
            width: 1080px;
            top: 0px;
            height: auto;
            background-position: center;
        }
        .pop-form .close-btn {
            right: 80px;
            top: -5px;
        }
    }
    @media (max-width: 1180px) {
        .popupform-main h2 {
            font-size: 40px;
        }
        div#pop-form form {
            padding-top: 15px;
        }
        .pop-form {
            width: 991px;
            display: flex;
            align-items: center;
        }
        div#pop-form {
            width: 55%;
            padding-top: 20px;
        }
        .popupform-main label.control.control--checkbox {
            font-size: 12px;
        }
        .pop-form .close-btn {
            top: 10px;
        }
    }
    @media (max-width: 991px) {
        .col-sm-5.mobile-col-rm {
            display: none;
        }
        .pop-form {
            position: absolute;
            width: 510px;
            height: 500px;
            top: 0px;
            left: 0;
            bottom: 0;
            right: 0;
            margin: auto;
            /* background-image: url(../images/popup-bg2.png); */
            padding: 0px 0 0px 0;
            z-index: 99;
            -webkit-transition: 0.5s;
            -moz-transition: 0.5s;
            -o-transition: 0.5s;
            transition: 0.5s;
            background: #fff;
        }
        div#pop-form form {
            width: 100%;
        }
        .popupform-main h2 {
            text-align: center;
        }
        .pop-form form .control-group {
        }
        .pop-form .submit-btn {
            text-align: center;
            margin: 0 auto !important;
        }
        .popupform-main label.control.control--checkbox {
            text-align: center;
        }
        div#pop-form {
            width: 100%;
            padding-top: 18px;
        }
        .popupform-main .col-sm-offset-4.col-sm-8 {
            max-width: 100%;
            width: 100%;
            margin: 0;
        }
        .popupform-main h3 {
            font-size: 30px !important;
        }
        .popupform-main h6 {
            font-size: 30px;
        }
        #flform input[type="text"],
        input[type="email"] {
            margin-bottom: 0px;
        }
        .pop-form .close-btn {
            width: 35px;
            height: 30px;
            display: block;
            position: absolute;
            top: 2px;
            right: 0;
            font-size: 18px;
            font-weight: 900;
            color: #080808;
            padding-top: 3px;
        }
    }
    @media (max-width: 767px) {
        .popupform-main h6:before {
            position: absolute;
            content: "";
            left: -20px;
            top: 0px;
            width: 0;
            height: 0;
            border-top: 0px solid transparent;
            border-right: 28px solid #4274fa;
            border-bottom: 28px solid transparent;
        }
        div#pop-form form {
            width: 100%;
        }
        .pop-form {
            position: absolute;
            width: 334px !important;
            /* height: 535px !important; */
        }
        .popupform-main .pop-form h3 {
            font-size: 21px !important;
            margin-top: 4px;
        }
        .pop-form .close-btn {
            /* top: -13px; */
            /* right: -6px; */
            height: 35px;
        }
        .popupform-main h6 {
            letter-spacing: 0;
            font-size: 21px;
            background: #4274fa;
            color: #fff;
            border-radius: 10px;
            padding: 3px 8px 5px 8px;
            text-align: left;
            position: relative;
            right: 0px;
            margin: 0px;
            float: right;
        }
        .pop-form .submit-btn {
            font-size: 18px;
            width: 100%;
            padding: 8px 0px;
        }
        div#pop-form {
            max-width: 100%;
            width: 100%;
            margin: 0;
            text-align: center;
            padding-top: 10px;
        }
        .popupform-main h3 {
            font-size: 26px;
            margin: 31px 0 0 0;
            color: #ffffff;
            font-weight: 500;
        }
        .popupform-main h2 {
            font-size: 30px;
            margin: 10px 0 0 0;
            /* color: #ffffff; */
            font-weight: 700;
        }
        .popupform-main h4 {
            font-size: 24px;
            margin: 8px 0 0 0;
            color: #fff;
            font-weight: 700;
        }
        .chk-st-1 {
            display: inline-flex;
        }
    }
</style>
