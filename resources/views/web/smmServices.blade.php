@extends('web.layouts.main')
@section('content')
        <!-- START: Inner Banner-->
        @include('web.layouts.inner_banner')
        <!-- END: Inner Banner-->
<section class="consultation_services_sec smm_consultation_services_sec">
    <div class="container">
        <div class="row">
            <div class="consultation_services_boxes">
                <div class="col-sm-7">
                    <div class="consultation_services_box">
                        <h2 class="title clr_blk_p">{{ $content_87->name }}</h2>
                        <p class="para clr_blk_p">
                            <?= html_entity_decode($content_87->details) ?>
                        </p>
                        <div class="button mt_50">
                            <a href="javascript:;" class="popup_btn blue_btn" onclick="order_now_value(this)" name="for $59">Order Now</a>
                            <a href="javascript:;" class="chat tr_btn_blue" target="_self" onclick="setButtonURL();"> Live Chat</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="consultation_services_box_img">
                        <img src="{{ asset($content_87->img) }}" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="consultation_services_sec professional_smm_sec">
    <div class="container">
        <div class="row">
            <div class="consultation_services_boxes">
                <div class="col-sm-6">
                    <div class="professional_smm_box_img">
                        <img src="{{ asset($content_88->img) }}" />
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="consultation_services_box">
                        <h2 class="title clr_blk_p">{{ $content_88->name }}</h2>
                        <p class="para clr_blk_p">
                            <?= html_entity_decode($content_88->details) ?>
                        </p>
                        <div class="button mt_50">
                            <a href="javascript:;" class="popup_btn blue_btn" onclick="order_now_value(this)" name="for $59">Order Now</a>
                            <a href="javascript:;" class="chat tr_btn_blue" target="_self" onclick="setButtonURL();"> Live Chat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="type_of_seo_sec">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="title cn clr_blk_p">{{ $content_89->name }}</h2>
                <p class="para mt_20 cn clr_blk_p">
                    <?= html_entity_decode($content_89->details) ?>
                </p>
            </div>

            <div class="type_of_seo_boxes">
                <ul class="nav nav-tabs nav-tabs-horizontal">
                    <div class="col-sm-4">
                        <li class="active">
                            <a href="#typeseotab1" data-toggle="tab">
                                <div class="">
                                    <div class="type_of_seo_box">
                                        <img src="{{ asset($content_90->img) }}" />
                                        <h3>{{ $content_90->name }}</h3>
                                        <p><?= html_entity_decode($content_90->details) ?></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </div>
                    <div class="col-sm-4">
                        <li class="">
                            <a href="#typeseotab2" data-toggle="tab">
                                <div class="">
                                    <div class="type_of_seo_box">
                                        <img src="{{ asset($content_91->img) }}" />
                                        <h3>{{ $content_91->name }}</h3>
                                        <p><?= html_entity_decode($content_91->details) ?></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </div>
                    <div class="col-sm-4">
                        <li class="">
                            <a href="#typeseotab3" data-toggle="tab">
                                <div class="">
                                    <div class="type_of_seo_box">
                                        <img src="{{ asset($content_92->img) }}" />
                                        <h3>{{ $content_92->name }}</h3>
                                        <p><?= html_entity_decode($content_92->details) ?></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </div>
                </ul>
            </div>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="typeseotab1">
                    <div class="type_of_seo_boxes2">
                        <div class="col-sm-7">
                            <div class="type_of_seo_box2">
                                <h3>
                                    {{ $content_93->name }}
                                </h3>
                                <p>
                                    <?= html_entity_decode($content_93->details) ?>
                                </p>
                                <!-- <a href="javascript:;">Read More  >></a> -->
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="type_of_seo_box2">
                                <img src="{{ asset($content_93->img) }}" />
                            </div>
                        </div>
                    </div>
                </div>

                <div role="tabpanel" class="tab-pane fade" id="typeseotab2">
                    <div class="type_of_seo_boxes2">
                        <div class="col-sm-7">
                            <div class="type_of_seo_box2">
                                <h3>
                                    {{ $content_94->name }}
                                </h3>
                                <p>
                                    <?= html_entity_decode($content_94->details) ?>
                                </p>
                                <!-- <a href="javascript:;">Read More  >></a> -->
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="type_of_seo_box2">
                                <img src="{{ asset($content_94->img) }}" />
                            </div>
                        </div>
                    </div>
                </div>

                <div role="tabpanel" class="tab-pane fade" id="typeseotab3">
                    <div class="type_of_seo_boxes2">
                        <div class="col-sm-7">
                            <div class="type_of_seo_box2">
                                <h3>{{ $content_95->name }}</h3>
                                <p><?= html_entity_decode($content_95->details) ?></p>
                                <!-- <a href="javascript:;">Read More  >></a> -->
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="type_of_seo_box2">
                                <img src="{{asset('web/images/type-of-seo-img.png')}}" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="seo_services_slider_sec smm_services_slider_sec">
    <div class="container">
        <div class="col-sm-10">
            <h2 class="title cn clr_wht slide-wh">{{ $content_96->name }}</h2>
            <p class="para mt_20 cn clr_wht slide-wh"><?= html_entity_decode($content_96->details) ?></p>
        </div>

        <div class="col-sm-10">
            <div class="seo_services_slider">

                <div class="seo-box">
                    <div class="seo_services_slider_box_icon">
                        <img src="{{ asset($content_97->img) }}" alt="" />
                    </div>
                    <h3>{{ $content_97->name }}</h3>
                    <p><?= html_entity_decode($content_97->details) ?></p>
                </div>

                <div class="seo-box">
                    <div class="seo_services_slider_box_icon">
                        <img src="{{ asset($content_98->img) }}" alt="" />
                    </div>
                    <h3>{{ $content_98->name }}</h3>
                    <p><?= html_entity_decode($content_98->details) ?></p>
                </div>

                <div class="seo-box">
                    <div class="seo_services_slider_box_icon">
                        <img src="{{ asset($content_99->img) }}" alt="" />
                    </div>
                    <h3>{{ $content_99->name }}</h3>
                    <p><?= html_entity_decode($content_99->details) ?></p>
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
                <h2 class="cn clr_blk title">{{ $content_100->name }}</h2>
                <p class="title_para cn clr_blk_p"><?= html_entity_decode($content_100->details) ?></p>
                <div class="portfoilo_boxes">
                    <!-- <ul id="nav-tabs-wrapper" class="nav nav-tabs nav-tabs-horizontal">
		              <li class="active"><a href="#htab1" data-toggle="tab">Logo</a></li>
		              <li><a href="#htab2" data-toggle="tab">Website</a></li>
		              <li><a href="#htab3" data-toggle="tab">Video</a></li>
		              <li><a href="#htab4" data-toggle="tab">Stationery</a></li>
		              <li><a href="#htab5" data-toggle="tab">Social Media</a></li>
		            </ul> -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="htab5">
                            <div class="row">
                                <div class="col-sm-4 col-xs-6 portfolio-box">
                                    <div class="portfolio_box video_portfolio_fancy js-wow u-slideUp is-animated" data-wow-delay="0.1s">
                                        <a class="fancybox" rel="ligthbox" href="{{asset('web/images/port-new/smm/1-1.jpg')}}">
                                            <div class="hovereffect"><img src="{{asset('web/images/port-new/smm/1.jpg')}}" alt="" /></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-xs-6 portfolio-box">
                                    <div class="portfolio_box video_portfolio_fancy js-wow u-slideUp is-animated" data-wow-delay="0.1s">
                                        <a class="fancybox" rel="ligthbox" href="{{asset('web/images/port-new/smm/2-1.jpg')}}">
                                            <div class="hovereffect"><img src="{{asset('web/images/port-new/smm/2.jpg')}}" alt="" /></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-xs-6 portfolio-box">
                                    <div class="portfolio_box video_portfolio_fancy js-wow u-slideUp is-animated" data-wow-delay="0.1s">
                                        <a class="fancybox" rel="ligthbox" href="{{asset('web/images/port-new/smm/3-1.jpg')}}">
                                            <div class="hovereffect"><img src="{{asset('web/images/port-new/smm/3.jpg')}}" alt="" /></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 col-xs-6 portfolio-box">
                                    <div class="portfolio_box video_portfolio_fancy js-wow u-slideUp is-animated" data-wow-delay="0.1s">
                                        <a class="fancybox" rel="ligthbox" href="{{asset('web/images/port-new/smm/4-1.jpg')}}">
                                            <div class="hovereffect"><img src="{{asset('web/images/port-new/smm/4.jpg')}}" alt="" /></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-xs-6 portfolio-box">
                                    <div class="portfolio_box video_portfolio_fancy js-wow u-slideUp is-animated" data-wow-delay="0.1s">
                                        <a class="fancybox" rel="ligthbox" href="{{asset('web/images/port-new/smm/5-1.jpg')}}">
                                            <div class="hovereffect"><img src="{{asset('web/images/port-new/smm/5.jpg')}}" alt="" /></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-xs-6 portfolio-box">
                                    <div class="portfolio_box video_portfolio_fancy js-wow u-slideUp is-animated" data-wow-delay="0.1s">
                                        <a class="fancybox" rel="ligthbox" href="{{asset('web/images/port-new/smm/6-1.jpg')}}">
                                            <div class="hovereffect"><img src="{{asset('web/images/port-new/smm/6.jpg')}}" alt="" /></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 col-xs-6 portfolio-box">
                                    <div class="portfolio_box video_portfolio_fancy js-wow u-slideUp is-animated" data-wow-delay="0.1s">
                                        <a class="fancybox" rel="ligthbox" href="{{asset('web/images/port-new/smm/7-1.jpg')}}">
                                            <div class="hovereffect"><img src="{{asset('web/images/port-new/smm/7.jpg')}}" alt="" /></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-xs-6 portfolio-box">
                                    <div class="portfolio_box video_portfolio_fancy js-wow u-slideUp is-animated" data-wow-delay="0.1s">
                                        <a class="fancybox" rel="ligthbox" href="{{asset('web/images/port-new/smm/8-1.jpg')}}">
                                            <div class="hovereffect"><img loading="lazy" src="{{asset('web/images/port-new/smm/8.jpg')}}" alt="" /></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-xs-6 portfolio-box">
                                    <div class="portfolio_box video_portfolio_fancy js-wow u-slideUp is-animated" data-wow-delay="0.1s">
                                        <a class="fancybox" rel="ligthbox" href="{{asset('web/images/port-new/smm/9-1.jpg')}}">
                                            <div class="hovereffect"><img loading="lazy" src="{{asset('web/images/port-new/smm/9.jpg')}}" alt="" /></div>
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
<section class="price-sec">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="title cn clr_blk_p">{{ $content_101->name }}</h2>
                <p class="para mt_20 cn clr_blk_p">
                    <?= html_entity_decode($content_101->details) ?>
                </p>
            </div>
            <div class="col-sm-12 p0 mt_50">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="inrprtab1">
                        <div class="col-sm-4">
                            <div class="price-bx price-bx-1">


                                 @foreach($setPackage as $key => $value)

                                    @if ($value->id == 19)

                                        @include('web.packagesBox')

                                        <div class="view-del-btn">
                                            <a href="{{route('smmStartupOneTime')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
                                            <a name="" data-fancybox="" title="{{ $value->name }}"
                                                data-src="#popupformWebsite" href="javascript:;"
                                                class="view-del-btn tr_btn_blue open_modal"
                                                data-pack_id="{{ $value->id }}">Order Now</a>
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

                                    @if ($value->id == 20)

                                        @include('web.packagesBox')


                                        <div class="view-del-btn">
                                            <a href="{{route('smmBasic3MonthsPlan')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
                                            <a name="" data-fancybox="" title="{{ $value->name }}"
                                                data-src="#popupformWebsite" href="javascript:;"
                                                class="view-del-btn tr_btn_blue open_modal"
                                                data-pack_id="{{ $value->id }}">Order Now</a>
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

                                    @if ($value->id == 21)

                                        @include('web.packagesBox')


                                        <div class="view-del-btn">
                                            <a href="{{route('smmPlus6MonthsPlan1')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
                                            <a name="" data-fancybox="" title="{{ $value->name }}"
                                                data-src="#popupformWebsite" href="javascript:;"
                                                class="view-del-btn tr_btn_blue open_modal"
                                                data-pack_id="{{ $value->id }}">Order Now</a>
                                        </div>
                                        <div class="bnr-btn price-btn">
                                            <a href="{{ $setting['phone'] }}" class="packages_tel"><i class="fa fa-phone"></i>{{ $setting['phone'] }}</a>
                                        </div>

                                @endif

                                @endforeach
                            </div>
                        </div>
                        <div class="col-sm-4 col-sm-offset-4">
                            <div class="price-bx price-bx-1">

                                @foreach($setPackage as $key => $value)

                                    @if ($value->id == 22)

                                        @include('web.packagesBox')






                                        <div class="view-del-btn">
                                            <a href="{{route('smmPlus6MonthsPlan2')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
                                            <a name="" data-fancybox="" title="{{ $value->name }}"
                                                data-src="#popupformWebsite" href="javascript:;"
                                                class="view-del-btn tr_btn_blue open_modal"
                                                data-pack_id="{{ $value->id }}">Order Now</a>
                                        </div>
                                        <div class="bnr-btn price-btn">
                                            <a href="{{ $setting['phone'] }}" class="packages_tel"><i class="fa fa-phone"></i>{{ $setting['phone'] }}</a>
                                        </div>

                                    @endif

                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="inrprtab2">
                        <div class="col-sm-4 col-sm-offset-4">
                            <div class="price-bx price-bx-1">
                                @foreach($setPackage as $key => $value)

                                @if ($value->id == 15)

                                    @include('web.packagesBox')


                                    <div class="view-del-btn">
                                        <a href="" class="view-dtl-btn-st blue_btn">View Detail</a>
                                        <a name="" data-fancybox="" title="{{ $value->name }}"
                                            data-src="#popupformWebsite" href="javascript:;"
                                            class="view-del-btn tr_btn_blue open_modal"
                                            data-pack_id="{{ $value->id }}">Order Now</a>
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
