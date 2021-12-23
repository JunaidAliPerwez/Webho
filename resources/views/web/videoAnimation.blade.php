@extends('web.layouts.main')
@section('content')
        <!-- START: Inner Banner-->
        @include('web.layouts.inner_banner')
        <!-- END: Inner Banner-->


<section class="consultation_services_sec video_consultation_services_sec">
    <div class="container">
        <div class="row">
            <div class="consultation_services_boxes">
                <div class="col-sm-7">
                    <div class="consultation_services_box">
                        <h2 class="title clr_blk_p">{{ $content_35->name }}</h2>
                        <p class="para clr_blk_p"><?= html_entity_decode($content_35->details) ?></p>
                        <div class="button mt_50">
                            <a href="javascript:;" class="popup_btn blue_btn" onclick="order_now_value(this)"
                                name="for $59">Order Now</a>
                            <a href="javascript:;" class="chat tr_btn_blue" target="_self" onclick="setButtonURL();">
                                Live Chat</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="consultation_services_box_img">
                        <img src="{{ asset($content_35->img) }}" />
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
                    <h2 class="wow fadeInUp" data-wow-delay="420ms">{{ $content_36->name }}</h2>
                    <p class="wow fadeInUp" data-wow-delay="440ms"><?= html_entity_decode($content_36->details) ?></p>
                </div>
                <div class="tabs">
                    <ul class="nav nav-tabs iconic-nav">
                        <li class="nav-item active" data-wow-delay="480ms"><a class="nav-link active" data-toggle="tab" href="#vid_tab1">{{ $content_37->name }}</a></li>
                        <li class="nav-item" data-wow-delay="460ms"><a class="nav-link" data-toggle="tab" href="#vid_tab2">{{ $content_38->name }}</a></li>
                        <li class="nav-item" data-wow-delay="460ms"><a class="nav-link" data-toggle="tab" href="#vid_tab3">{{ $content_39->name }}</a></li>
                        <li class="nav-item" data-wow-delay="480ms"><a class="nav-link" data-toggle="tab" href="#vid_tab4">{{ $content_40->name }}</a></li>
                        <li class="nav-item" data-wow-delay="480ms"><a class="nav-link" data-toggle="tab" href="#vid_tab5">{{ $content_41->name }}</a></li>
                        <li class="nav-item" data-wow-delay="480ms"><a class="nav-link" data-toggle="tab" href="#vid_tab6">{{ $content_42->name }}</a></li>
                        <li class="nav-item" data-wow-delay="480ms"><a class="nav-link" data-toggle="tab" href="#vid_tab7">{{ $content_43->name }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="vid_tab1">
                        <div class="col-sm-12 p0 flex_center">
                            <div class="col-sm-7">
                                <div class="iconic-main">
                                    <h2 class="wow fadeInUp" data-wow-delay="420ms">{{ $content_37->name }}</h2>
                                    <p class="wow fadeInUp" data-wow-delay="460ms"><?= html_entity_decode($content_37->details) ?></p>
                                </div>
                                <div class="clearfix"></div>
                                <div class="button mt_50">
                                    <a href="javascript:;" class="popup_btn blue_btn" onclick="order_now_value(this)"
                                        name="for $59">Order Now</a>
                                    <a href="javascript:;" class="chat tr_btn_blue" target="_self"
                                        onclick="setButtonURL();"> Live Chat</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="col-sm-5">
                                <div class="iconic-image-box">
                                    <img class="wow zoomIn" data-wow-delay="520ms" src="{{ asset($content_37->img) }}" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="vid_tab2">
                        <div class="col-sm-12 p0 flex_center">
                            <div class="col-sm-7">
                                <div class="iconic-main">
                                    <h2>{{ $content_38->name }}</h2>
                                    <p>
                                        <?= html_entity_decode($content_38->details) ?>
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                                <div class="button mt_50">
                                    <a href="javascript:;" class="popup_btn blue_btn" onclick="order_now_value(this)"
                                        name="for $59">Order Now</a>
                                    <a href="javascript:;" class="chat tr_btn_blue" target="_self"
                                        onclick="setButtonURL();"> Live Chat</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="col-sm-5">
                                <div class="iconic-image-box">
                                    <img src="{{ asset($content_38->img) }}" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="vid_tab3">
                        <div class="col-sm-12 p0 flex_center">
                            <div class="col-sm-7">
                                <div class="iconic-main">
                                    <h2>{{ $content_39->name }}</h2>
                                    <p><?= html_entity_decode($content_39->details) ?></p>
                                </div>
                                <div class="clearfix"></div>
                                <div class="button mt_50">
                                    <a href="javascript:;" class="popup_btn blue_btn" onclick="order_now_value(this)"
                                        name="for $59">Order Now</a>
                                    <a href="javascript:;" class="chat tr_btn_blue" target="_self"
                                        onclick="setButtonURL();"> Live Chat</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="col-sm-5">
                                <div class="iconic-image-box">
                                    <img src="{{ asset($content_39->img) }}" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="vid_tab4">
                        <div class="col-sm-12 p0 flex_center">
                            <div class="col-sm-7">
                                <div class="iconic-main">
                                    <h2>{{ $content_40->name }}</h2>
                                    <p><?= html_entity_decode($content_40->details) ?> </p>
                                </div>
                                <div class="clearfix"></div>
                                <div class="button mt_50">
                                    <a href="javascript:;" class="popup_btn blue_btn" onclick="order_now_value(this)"
                                        name="for $59">Order Now</a>
                                    <a href="javascript:;" class="chat tr_btn_blue" target="_self"
                                        onclick="setButtonURL();"> Live Chat</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="col-sm-5">
                                <div class="iconic-image-box">
                                    <img src="{{ asset($content_40->img) }}" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="vid_tab5">
                        <div class="col-sm-12 p0 flex_center">
                            <div class="col-sm-7">
                                <div class="iconic-main">
                                    <h2>{{ $content_41->name }}</h2>
                                    <p>
                                        <?= html_entity_decode($content_41->details) ?>
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                                <div class="button mt_50">
                                    <a href="javascript:;" class="popup_btn blue_btn" onclick="order_now_value(this)"
                                        name="for $59">Order Now</a>
                                    <a href="javascript:;" class="chat tr_btn_blue" target="_self"
                                        onclick="setButtonURL();"> Live Chat</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="col-sm-5">
                                <div class="iconic-image-box">
                                    <img src="{{ asset($content_41->img) }}" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="vid_tab6">
                        <div class="col-sm-12 p0 flex_center">
                            <div class="col-sm-7">
                                <div class="iconic-main">
                                    <h2>{{ $content_42->name }}</h2>
                                    <p>
                                        <?= html_entity_decode($content_42->details) ?>
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                                <div class="button mt_50">
                                    <a href="javascript:;" class="popup_btn blue_btn" onclick="order_now_value(this)"
                                        name="for $59">Order Now</a>
                                    <a href="javascript:;" class="chat tr_btn_blue" target="_self"
                                        onclick="setButtonURL();"> Live Chat</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="col-sm-5">
                                <div class="iconic-image-box">
                                    <img src="{{ asset($content_42->img) }}" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="vid_tab7">
                        <div class="col-sm-12 p0 flex_center">
                            <div class="col-sm-7">
                                <div class="iconic-main">
                                    <h2>{{ $content_43->name }}</h2>
                                    <p><?= html_entity_decode($content_43->details) ?></p>
                                </div>
                                <div class="clearfix"></div>
                                <div class="button mt_50">
                                    <a href="javascript:;" class="popup_btn blue_btn" onclick="order_now_value(this)"
                                        name="for $59">Order Now</a>
                                    <a href="javascript:;" class="chat tr_btn_blue" target="_self"
                                        onclick="setButtonURL();"> Live Chat</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="col-sm-5">
                                <div class="iconic-image-box">
                                    <img src="{{ asset($content_43->img) }}" />
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
                <h2 class="cn clr_blk title">{{ $content_157->name }}</h2>
                <p class="title_para cn clr_blk_p">
                    <?= html_entity_decode($content_157->details) ?>
                </p>
                <div class="portfoilo_boxes">

                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="htab3">
                            <ul id="nav-tabs-wrapper" class="nav nav-tabs nav-tabs-horizontal">
                                <li class="nav-item active"><a class="nav-link active" href="#inrvtab1" data-toggle="tab">2D Animation</a></li>
                                <li class="nav-item"><a class="nav-link" href="#inrvtab2" data-toggle="tab" aria-expanded="false">Whiteboard Animation</a></li>
                                <li class="nav-item"><a class="nav-link" href="#inrvtab3" data-toggle="tab" aria-expanded="false">Motion Graphics</a></li>
                            </ul>
                            <div class="tab-content">

                                <div role="tabpanel" class="tab-pane fade in active" id="inrvtab1">

                                    <div class="row">

                                    @foreach($showClientsPackages as $key => $value)

                                        @if ($value->page == 'video-animation' && $value->sub_title == '2D Animation')

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

                                </div>

                                <div role="tabpanel" class="tab-pane fade in" id="inrvtab2">

                                    <div class="row">

                                        @foreach($showClientsPackages as $key => $value)

                                        @if ($value->page == 'video-animation' && $value->sub_title == 'Whiteboard Animation')

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

                                </div>

                                <div role="tabpanel" class="tab-pane fade in" id="inrvtab3">

                                    <div class="row">

                                        @foreach($showClientsPackages as $key => $value)

                                        @if ($value->page == 'video-animation' && $value->sub_title == 'Motion Graphics')

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
<section class="price-sec video-anim-price-sec">
    <div class="container">
        <div class="row">
            <div class="col-sm-offset-1 col-sm-10">
                <h2 class="title cn clr_blk_p">{{ $content_44->name }}</h2>
                <p class="para mt_20 cn clr_blk_p"><?= html_entity_decode($content_44->details) ?></p>
            </div>
            <div class="col-sm-12 p0 mt_50">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="prtab3">
                        <div class="col-sm-4">
                            <div class="price-bx price-bx-1">

                                @foreach($setPackage as $key => $value)

                                    @if ($value->id == 6)

                                        @include('web.packagesBox')


                                    <div class="view-del-btn">
                                        <a href="{{route('teaserIntroVideoDetails')}}"
                                            class="view-dtl-btn-st blue_btn">View Detail</a>
                                        <a name="299" data-fancybox="" title="{{ $value->name }}"
                                            data-src="#popupformWebsite" href="javascript:;"
                                            class="view-del-btn tr_btn_blue open_modal"
                                            data-pack_id="{{ $value->id }}">
                                            Order Now
                                        </a>
                                    </div>
                                    <div class="bnr-btn price-btn">
                                        <a href="{{ $setting['phone'] }}" class="packages_tel"><i
                                                class="fa fa-phone"></i>{{ $setting['phone'] }}</a>
                                    </div>

                                @endif

                                @endforeach
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="price-bx">

                                @foreach($setPackage as $key => $value)

                                    @if ($value->id == 7)

                                        @include('web.packagesBox')


                                    <div class="view-del-btn">
                                        <a href="{{route('startupVideoDetails')}}"
                                            class="view-dtl-btn-st blue_btn">View Detail</a>
                                        <a name="299" data-fancybox="" title="{{ $value->name }}"
                                            data-src="#popupformWebsite" href="javascript:;"
                                            class="view-del-btn tr_btn_blue open_modal"
                                            data-pack_id="{{ $value->id }}">
                                            Order Now
                                        </a>
                                    </div>
                                    <div class="bnr-btn price-btn">
                                        <a href="{{ $setting['phone'] }}" class="packages_tel"><i
                                                class="fa fa-phone"></i>{{ $setting['phone'] }}</a>
                                    </div>

                                @endif

                                @endforeach
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="price-bx price-bx-1">

                                @foreach($setPackage as $key => $value)

                                    @if ($value->id == 8)

                                        @include('web.packagesBox')


                                    <div class="view-del-btn">
                                        <a href="{{route('classicVideoDetails')}}"
                                            class="view-dtl-btn-st blue_btn">View Detail</a>
                                        <a name="299" data-fancybox="" title="{{ $value->name }}"
                                            data-src="#popupformWebsite" href="javascript:;"
                                            class="view-del-btn tr_btn_blue open_modal"
                                            data-pack_id="{{ $value->id }}">
                                            Order Now
                                        </a>
                                    </div>
                                    <div class="bnr-btn price-btn">
                                        <a href="{{ $setting['phone'] }}" class="packages_tel"><i
                                                class="fa fa-phone"></i>{{ $setting['phone'] }}</a>
                                    </div>
                                @endif

                                @endforeach
                            </div>
                        </div>
                        <div class="col-sm-4 col-sm-offset-2">
                            <div class="price-bx price-bx-1">



                                 @foreach($setPackage as $key => $value)

                                    @if ($value->id == 9)

                                        @include('web.packagesBox')

                                    <div class="view-del-btn">
                                        <a href="{{route('premiumVideoDetails')}}"
                                            class="view-dtl-btn-st blue_btn">View Detail</a>
                                        <a name="299" data-fancybox="" title="{{ $value->name }}"
                                            data-src="#popupformWebsite" href="javascript:;"
                                            class="view-del-btn tr_btn_blue open_modal"
                                            data-pack_id="{{ $value->id }}">
                                            Order Now
                                        </a>
                                    </div>
                                    <div class="bnr-btn price-btn">
                                        <a href="{{ $setting['phone'] }}" class="packages_tel"><i
                                                class="fa fa-phone"></i>{{ $setting['phone'] }}</a>
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
