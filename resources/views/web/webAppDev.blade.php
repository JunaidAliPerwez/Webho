@extends('web.layouts.main') @section('content')
<!-- START: Inner Banner-->
@include('web.layouts.inner_banner')
<!-- END: Inner Banner-->

<section class="consultation_services_sec web_consultation_services_sec">
    <div class="container">
        <div class="row">
            <div class="consultation_services_boxes">
                <div class="col-sm-7">
                    <div class="consultation_services_box">

                        <h2 class="title clr_blk_p">{{ $content_28->name }}</h2>
                        <p class="para clr_blk_p"> <?= html_entity_decode($content_28->details) ?> </p>

                        <div class="button mt_50">
                            <a href="javascript:;" class="popup_btn blue_btn" onclick="order_now_value(this)" name="for $59">Order Now</a>
                            <a href="javascript:;" class="chat tr_btn_blue" target="_self" onclick="setButtonURL();"> Live Chat</a>
                        </div>

                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="consultation_services_box_img">
                        <img src="{{ asset($content_28->img) }} " />
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
                    <h2 class="wow fadeInUp" data-wow-delay="420ms">Web App Development Services</h2>
                    <p class="wow fadeInUp" data-wow-delay="440ms">
                        The Webho specializes in creating websites that are user-friendly and responsive. We believe that websites are the online representation of your brand. A website that impresses the audience has a greater chance of
                        converting the visitor into a customer. We design and develop websites that help the business achieve their short-term and long-term goals.
                    </p>
                </div>

                <div class="tabs">

                    <ul class="nav nav-tabs iconic-nav">
                        <li class="nav-item active" data-wow-delay="480ms"><a class="nav-link active" data-toggle="tab" href="#web_tab1">{{ $content_29->name }}</a></li>
                        <li class="nav-item" data-wow-delay="480ms"><a class="nav-link" data-toggle="tab" href="#web_tab2">{{ $content_30->name }}</a></li>
                        <li class="nav-item" data-wow-delay="460ms"><a class="nav-link" data-toggle="tab" href="#web_tab3">{{ $content_31->name }}</a></li>
                        <li class="nav-item" data-wow-delay="480ms"><a class="nav-link" data-toggle="tab" href="#web_tab4">{{ $content_32->name }}</a></li>
                        <li class="nav-item" data-wow-delay="480ms"><a class="nav-link" data-toggle="tab" href="#web_tab5">{{ $content_33->name }}</a></li>
                    </ul>

                </div>
            </div>
            <div class="col-sm-12">

                <div class="tab-content">

                    <div role="tabpanel" class="tab-pane fade in active" id="web_tab1">
                        <div class="col-sm-12 p0 flex_center">
                            <div class="col-sm-7">
                                <div class="iconic-main">
                                    <h2 class="wow fadeInUp" data-wow-delay="420ms">{{ $content_29->name }}</h2>
                                    <p class="wow fadeInUp" data-wow-delay="460ms"> <?= html_entity_decode($content_29->details) ?> </p>
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
                                    <img class="wow zoomIn" data-wow-delay="520ms" src="{{ asset($content_29->img) }}" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="web_tab2">
                        <div class="col-sm-12 p0 flex_center">
                            <div class="col-sm-7">
                                <div class="iconic-main">
                                    <h2>{{ $content_30->name }}</h2>
                                    <p> <?= html_entity_decode($content_30->details) ?> </p>
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
                                    <img src="{{ asset($content_30->img) }}" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="web_tab3">
                        <div class="col-sm-12 p0 flex_center">
                            <div class="col-sm-7">
                                <div class="iconic-main">
                                    <h2>{{ $content_31->name }}</h2>
                                    <p> <?= html_entity_decode($content_31->details) ?> </p>
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
                                    <img src="{{ asset($content_31->img) }}" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="web_tab4">
                        <div class="col-sm-12 p0 flex_center">
                            <div class="col-sm-7">
                                <div class="iconic-main">
                                    <h2>{{ $content_32->name }}</h2>
                                    <p> <?= html_entity_decode($content_32->details) ?> </p>
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
                                    <img src="{{ asset($content_32->img) }}" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="web_tab5">
                        <div class="col-sm-12 p0 flex_center">
                            <div class="col-sm-7">
                                <div class="iconic-main">
                                    <h2>{{ $content_33->name }}</h2>
                                    <p> <?= html_entity_decode($content_33->details) ?> </p>
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
                                    <img src="{{ asset($content_33->img) }}" />
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
                <h2 class="cn clr_blk title">{{ $content_156->name }}</h2>
                <p class="title_para cn clr_blk_p"><?= html_entity_decode($content_156->details) ?></p>
                <div class="portfoilo_boxes">

                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="htab2">

                            <div class="row">

                                @foreach($showClientsPackages as $key => $value)

                                    @if ($value->page == 'web-app-dev')

                                        <div class="col-sm-4 col-xs-6 portfolio-box">

                                            <div class="portfolio_box video_portfolio_fancy js-wow u-slideUp is-animated" data-wow-delay="0.1s">

                                                <a class="fancybox" rel="ligthbox" href="{{ $value->link == '' ? asset($value->img) : $value->link }}">

                                                    <div class="hovereffect"><img src="{{ asset($value->img) }}" alt="" /></div>

                                                </a>

                                            </div>

                                        </div>

                                    @endif

                                @endforeach


                            </div>



                            <div id="loadMore_port" style="">
                                <a class="blue_btn" href="javascript:;">Load More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="price-sec web-designprice-sec">
    <div class="container">
        <div class="row">
            <div class="col-sm-offset-1 col-sm-10">
                <h2 class="title cn clr_blk_p">{{ $content_34->name }}</h2>
                <p class="para mt_20 cn clr_blk_p"><?= html_entity_decode($content_34->details) ?></p>
            </div>
            <div class="col-sm-12 p0 mt_50">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="prtab2">
                        <div class="col-sm-4">
                            <div class="price-bx price-bx-1">
                                @foreach($setPackage as $key => $value) @if ($value->id == 1) @include('web.packagesBox')

                                <div class="view-del-btn">
                                    <a href="{{route('basicWebsite')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
                                    <a name="299" data-fancybox="" title="{{ $value->name }}" data-src="#popupformWebsite" href="javascript:;" class="view-del-btn tr_btn_blue open_modal" data-pack_id="{{ $value->id }}">
                                        Order Now
                                    </a>
                                </div>
                                <div class="bnr-btn price-btn">
                                    <a href="{{ $setting['phone'] }}" class="packages_tel"><i class="fa fa-phone"></i>{{ $setting['phone'] }}</a>
                                </div>
                                @endif @endforeach
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="price-bx">
                                @foreach($setPackage as $key => $value) @if ($value->id == 2) @include('web.packagesBox')

                                <div class="view-del-btn">
                                    <a href="{{route('startupWebsite')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
                                    <a name="299" data-fancybox="" title="{{ $value->name }}" data-src="#popupformWebsite" href="javascript:;" class="view-del-btn tr_btn_blue open_modal" data-pack_id="{{ $value->id }}">
                                        Order Now
                                    </a>
                                </div>
                                <div class="bnr-btn price-btn">
                                    <a href="{{ $setting['phone'] }}" class="packages_tel"><i class="fa fa-phone"></i>{{ $setting['phone'] }}</a>
                                </div>

                                @endif @endforeach
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="price-bx price-bx-1">
                                @foreach($setPackage as $key => $value) @if ($value->id == 3) @include('web.packagesBox')

                                <div class="view-del-btn">
                                    <a href="{{route('professionalWebsite')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
                                    <a name="299" data-fancybox="" title="{{ $value->name }}" data-src="#popupformWebsite" href="javascript:;" class="view-del-btn tr_btn_blue open_modal" data-pack_id="{{ $value->id }}">
                                        Order Now
                                    </a>
                                </div>
                                <div class="bnr-btn price-btn">
                                    <a href="{{ $setting['phone'] }}" class="packages_tel"><i class="fa fa-phone"></i>{{ $setting['phone'] }}</a>
                                </div>

                                @endif @endforeach
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="price-bx price-bx-1">
                                @foreach($setPackage as $key => $value) @if ($value->id == 4) @include('web.packagesBox')

                                <div class="view-del-btn">
                                    <a href="{{route('eliteEcommerceDetails')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
                                    <a name="299" data-fancybox="" title="{{ $value->name }}" data-src="#popupformWebsite" href="javascript:;" class="view-del-btn tr_btn_blue open_modal" data-pack_id="{{ $value->id }}">
                                        Order Now
                                    </a>
                                </div>

                                <div class="bnr-btn price-btn">
                                    <a href="{{ $setting['phone'] }}" class="packages_tel"><i class="fa fa-phone"></i>{{ $setting['phone'] }}</a>
                                </div>

                                @endif @endforeach
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="price-bx price-bx-1">
                                @foreach($setPackage as $key => $value) @if ($value->id == 5) @include('web.packagesBox')

                                <div class="view-del-btn">
                                    <a href="{{route('corporateWebsitePackageDetail')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
                                    <a name="299" data-fancybox="" title="{{ $value->id }}" data-src="#popupformWebsite" href="javascript:;" class="view-del-btn tr_btn_blue open_modal" data-pack_id="{{ $value->id }}">
                                        Order Now
                                    </a>
                                </div>
                                <div class="bnr-btn price-btn">
                                    <a href="{{ $setting['phone'] }}" class="packages_tel"><i class="fa fa-phone"></i>{{ $setting['phone'] }}</a>
                                </div>

                                @endif @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection @section('css')
<style type="text/css"></style>
@endsection @section('js') @endsection
