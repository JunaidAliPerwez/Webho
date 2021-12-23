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


                        <h2 class="title clr_blk_p">{{ $content_20->name }}</h2>
                        <p class="para clr_blk_p"><?= html_entity_decode($content_20->details) ?></p>


                        <div class="button mt_50">
                            <a href="javascript:;" class="popup_btn blue_btn" onclick="order_now_value(this)" name="for $59">Order Now</a>
                            <a href="javascript:;" class="chat tr_btn_blue" target="_self" onclick="setButtonURL();"> Live Chat</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="consultation_services_box_img">

                        <img src="{{asset($content_20->img)}}" />
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
                    <h2 class="wow fadeInUp" data-wow-delay="420ms">{{ $content_21->name }}</h2>
                    <p class="wow fadeInUp" data-wow-delay="440ms"><?= html_entity_decode($content_21->details) ?></p>
                </div>

                {{-- wow fadeInUp active --}}
                <div class="tabs">
                    <ul class="nav nav-tabs iconic-nav">
                        <li class="nav-item active" data-wow-delay="480ms"><a class="nav-link active" data-toggle="tab" href="#web_tab1">{{ $content_22->name }}</a></li>
                        <li class="nav-item" data-wow-delay="460ms"><a class="nav-link" data-toggle="tab" href="#web_tab2">{{ $content_23->name }}</a></li>
                        <li class="nav-item" data-wow-delay="460ms"><a class="nav-link" data-toggle="tab" href="#web_tab3">{{ $content_24->name }}</a></li>
                        <li class="nav-item" data-wow-delay="480ms"><a class="nav-link" data-toggle="tab" href="#web_tab4">{{ $content_25->name }}</a></li>
                        <li class="nav-item" data-wow-delay="480ms"><a class="nav-link" data-toggle="tab" href="#web_tab5">{{ $content_26->name }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="tab-content">

                    <div role="tabpanel" class="tab-pane fade in active" id="web_tab1">
                        <div class="col-sm-12 p0 flex_center">
                            <div class="col-sm-7">
                                <div class="iconic-main">
                                    <h2 class="wow fadeInUp" data-wow-delay="420ms">{{ $content_22->name }}</h2>
                                    <p class="wow fadeInUp" data-wow-delay="460ms">
                                        <?= html_entity_decode($content_22->details) ?>
                                    </p>
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
                                    <img class="wow zoomIn" data-wow-delay="520ms" src="{{asset($content_22->img)}}" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="web_tab2">
                        <div class="col-sm-12 p0 flex_center">
                            <div class="col-sm-7">
                                <div class="iconic-main">
                                    <h2>{{ $content_23->name }}</h2>
                                    <p>
                                        <?= html_entity_decode($content_23->details) ?>
                                    </p>
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
                                    <img src="{{ asset($content_23->img) }}" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="web_tab3">
                        <div class="col-sm-12 p0 flex_center">
                            <div class="col-sm-7">
                                <div class="iconic-main">
                                    <h2>{{ $content_24->name }}</h2>
                                    <p>
                                        <?= html_entity_decode($content_24->details) ?>
                                    </p>
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
                                    <img src="{{ asset($content_24->img) }}" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="web_tab4">
                        <div class="col-sm-12 p0 flex_center">
                            <div class="col-sm-7">
                                <div class="iconic-main">
                                    <h2>{{ $content_25->name }}</h2>
                                    <p>
                                        <?= html_entity_decode($content_25->details) ?>
                                    </p>
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
                                    <img src="{{ asset($content_25->img) }}" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="web_tab5">
                        <div class="col-sm-12 p0 flex_center">
                            <div class="col-sm-7">
                                <div class="iconic-main">
                                    <h2>{{ $content_26->name }}</h2>
                                    <p>
                                        <?= html_entity_decode($content_26->details) ?>
                                    </p>
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
                                    <img src="{{ asset($content_26->img) }}" />
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
                <h2 class="cn clr_blk title">{{ $content_27->name }}</h2>
                <p class="title_para cn clr_blk_p">

                    <?= html_entity_decode($content_27->details) ?>
                </p>
                <div class="portfoilo_boxes">

                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="htab2">

                            <div class="row">

                                @foreach($showClientsPackages as $key => $value)

                                    @if ($value->page == 'web-design')

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

                            {{-- <div class="row">
                                <div class="col-sm-4 col-xs-6 portfolio-box">
                                    <div class="portfolio_box video_portfolio_fancy js-wow u-slideUp is-animated" data-wow-delay="0.1s">
                                        <a class="fancybox" rel="ligthbox" href="{{asset('web/images/port-new/web/1.jpg')}}">
                                            <div class="hovereffect"><img src="{{asset('web/images/port-new/web/1.jpg')}}" alt="" /></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-xs-6 portfolio-box">
                                    <div class="portfolio_box video_portfolio_fancy js-wow u-slideUp is-animated" data-wow-delay="0.1s">
                                        <a class="fancybox" rel="ligthbox" href="{{asset('web/images/port-new/web/2.jpg')}}">
                                            <div class="hovereffect"><img src="{{asset('web/images/port-new/web/2.jpg')}}" alt="" /></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-xs-6 portfolio-box">
                                    <div class="portfolio_box video_portfolio_fancy js-wow u-slideUp is-animated" data-wow-delay="0.1s">
                                        <a class="fancybox" rel="ligthbox" href="{{asset('web/images/port-new/web/3.jpg')}}">
                                            <div class="hovereffect"><img src="{{asset('web/images/port-new/web/3.jpg')}}" alt="" /></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 col-xs-6 portfolio-box">
                                    <div class="portfolio_box video_portfolio_fancy js-wow u-slideUp is-animated" data-wow-delay="0.1s">
                                        <a class="fancybox" rel="ligthbox" href="{{asset('web/images/port-new/web/4.jpg')}}">
                                            <div class="hovereffect"><img src="{{asset('web/images/port-new/web/4.jpg')}}" alt="" /></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-xs-6 portfolio-box">
                                    <div class="portfolio_box video_portfolio_fancy js-wow u-slideUp is-animated" data-wow-delay="0.1s">
                                        <a class="fancybox" rel="ligthbox" href="{{asset('web/images/port-new/web/5.jpg')}}">
                                            <div class="hovereffect"><img src="{{asset('web/images/port-new/web/5.jpg')}}" alt="" /></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-xs-6 portfolio-box">
                                    <div class="portfolio_box video_portfolio_fancy js-wow u-slideUp is-animated" data-wow-delay="0.1s">
                                        <a class="fancybox" rel="ligthbox" href="{{asset('web/images/port-new/web/6.jpg')}}">
                                            <div class="hovereffect"><img src="{{asset('web/images/port-new/web/6.jpg')}}" alt="" /></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 col-xs-6 portfolio-box">
                                    <div class="portfolio_box video_portfolio_fancy js-wow u-slideUp is-animated" data-wow-delay="0.1s">
                                        <a class="fancybox" rel="ligthbox" href="{{asset('web/images/port-new/web/7.jpg')}}">
                                            <div class="hovereffect"><img src="{{asset('web/images/port-new/web/7.jpg')}}" alt="" /></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-xs-6 portfolio-box">
                                    <div class="portfolio_box video_portfolio_fancy js-wow u-slideUp is-animated" data-wow-delay="0.1s">
                                        <a class="fancybox" rel="ligthbox" href="{{asset('web/images/port-new/web/8.jpg')}}">
                                            <div class="hovereffect"><img loading="lazy" src="{{asset('web/images/port-new/web/8.jpg')}}" alt="" /></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-xs-6 portfolio-box">
                                    <div class="portfolio_box video_portfolio_fancy js-wow u-slideUp is-animated" data-wow-delay="0.1s">
                                        <a class="fancybox" rel="ligthbox" href="{{asset('web/images/port-new/web/9.jpg')}}">
                                            <div class="hovereffect"><img loading="lazy" src="{{asset('web/images/port-new/web/9.jpg')}}" alt="" /></div>
                                        </a>
                                    </div>
                                </div>
                            </div> --}}

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
                <h2 class="title cn clr_blk_p">{{ $content_27->name }}</h2>
                <p class="para mt_20 cn clr_blk_p">
                    <?= html_entity_decode($content_27->details) ?>
                </p>
            </div>
            <div class="col-sm-12 p0 mt_50">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="prtab2">
                        <div class="col-sm-4">
                            <div class="price-bx price-bx-1">
                                @foreach($setPackage as $key => $value) @if ($value->id == 1) @include('web.packagesBox')

                                <div class="view-del-btn">
                                    <a href="{{route('startupWebsite')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
                                    <a name="" data-fancybox="" title="{{ $value->name }}" data-src="#popupformWebsite" href="javascript:;" class="view-del-btn tr_btn_blue open_modal" data-pack_id="{{ $value->id }}">Order Now</a>
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
                                    <a href="{{route('professionalWebsite')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
                                    <a name="" data-fancybox="" title="{{ $value->name }}" data-src="#popupformWebsite" href="javascript:;" class="view-del-btn tr_btn_blue open_modal" data-pack_id="{{ $value->id }}">Order Now</a>
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
                                    <a href="{{route('eliteWebsitePackageDetail')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
                                    <a name="" data-fancybox="" title="{{ $value->name }}" data-src="#popupformWebsite" href="javascript:;" class="view-del-btn tr_btn_blue open_modal" data-pack_id="{{ $value->id }}">Order Now</a>
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
                                    <a href="{{route('corporateWebsitePackageDetail')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
                                    <a name="" data-fancybox="" title="{{ $value->name }}" data-src="#popupformWebsite" href="javascript:;" class="view-del-btn tr_btn_blue open_modal" data-pack_id="{{ $value->id }}">Order Now</a>
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
                                    <a name="" data-fancybox="" title="{{ $value->name }}" data-src="#popupformWebsite" href="javascript:;" class="view-del-btn tr_btn_blue open_modal" data-pack_id="{{ $value->id }}">Order Now</a>
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
@endsection @section('js')
@endsection
