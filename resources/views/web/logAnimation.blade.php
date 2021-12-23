@extends('web.layouts.main')
@section('content')
        <!-- START: Inner Banner-->
        @include('web.layouts.inner_banner')
        <!-- END: Inner Banner-->
<section class="consultation_services_sec logo_consultation_services_sec">
    <div class="container">
        <div class="row">
            <div class="consultation_services_boxes">
                <div class="col-sm-7">
                    <div class="consultation_services_box">
                        <h2 class="title clr_blk_p">{{ $content_45->name }}</h2>
                        <p class="para clr_blk_p"> <?= html_entity_decode($content_45->details) ?></p>
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
                        <img src="{{ asset($content_45->img) }}" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="unique-logo-sec">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="hd-txt">
                    <h2 class="title cn clr_blk">{{ $content_46->name }}</h2>
                    <p class="para clr_blk_p mt_20 cn wow fadeInUp" data-wow-delay="350ms">
                        <?= html_entity_decode($content_46->details) ?>
                    </p>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="uniq-lg-ul mt_50">
                    <ul>
                        <li class="uniq-logo-div-li uniq-logo-div-li-1">
                            <div class="uniq-lg-details">
                                <h4>{{ $content_158->name }}</h4>
                                <!-- <img loading="lazy" class="uniq-l-dtl" src="images/un-logo-1.png"> -->
                                <div class="logo-inner-u-txt">
                                    <h3>{{ $content_158->name }}</h3>

                                    <p>
                                        <?= html_entity_decode($content_158->details) ?>
                                    </p>

                                    <ul>
                                        @foreach($showClientsPackages as $key => $value)

                                            @if ($value->page == 'log-animation' && $value->title == 'Iconic Logo Design')

                                            <li><img loading="lazy" src="{{ asset($value->img) }}" /></li>

                                            @endif

                                        @endforeach
                                    </ul>

                                </div>
                            </div>
                        </li>

                        <li class="uniq-logo-div-li active uniq-logo-div-li-2">
                            <div class="uniq-lg-details">
                                <h4>{{ $content_159->name }}</h4>

                                <div class="logo-inner-u-txt">
                                    <h3>{{ $content_159->name }}</h3>
                                    <p><?= html_entity_decode($content_159->details) ?></p>
                                    <ul>

                                        @foreach($showClientsPackages as $key => $value)

                                            @if ($value->page == 'log-animation' && $value->title == '2D Animated Logo')

                                            <li><img loading="lazy" src="{{ asset($value->img) }}" /></li>

                                            @endif

                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li class="uniq-logo-div-li uniq-logo-div-li-3">
                            <div class="uniq-lg-details">
                                <h4>{{ $content_160->name }}</h4>

                                <div class="logo-inner-u-txt">
                                    <h3>{{ $content_160->name }}</h3>
                                    <p><?= html_entity_decode($content_160->details) ?></p>
                                    <ul>

                                        @foreach($showClientsPackages as $key => $value)

                                            @if ($value->page == 'log-animation' && $value->title == '3D Animated Logo')

                                            <li><img src="{{ asset($value->img) }}" /></li>

                                            @endif

                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li class="uniq-logo-div-li uniq-logo-div-li-4">
                            <div class="uniq-lg-details">
                                <h4>{{ $content_161->name }}</h4>
                                <div class="logo-inner-u-txt">
                                    <h3>{{ $content_161->name }}</h3>
                                    <p><?= html_entity_decode($content_161->details) ?></p>
                                    <ul>
                                        @foreach($showClientsPackages as $key => $value)

                                            @if ($value->page == 'log-animation' && $value->title == 'Illustrative Logo')

                                                <li><img src="{{ asset($value->img) }}" /></li>

                                            @endif

                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li class="uniq-logo-div-li uniq-logo-div-li-5">
                            <div class="uniq-lg-details">

                                <h4>{{ $content_162->name }}</h4>

                                <div class="logo-inner-u-txt">

                                    <h3>{{ $content_162->name }}</h3>

                                    <p><?= html_entity_decode($content_162->details) ?></p>


                                    <ul>
                                        @foreach($showClientsPackages as $key => $value)

                                            @if ($value->page == 'log-animation' && $value->title == 'Symbolic Logo')

                                                <li><img src="{{ asset($value->img) }}" /></li>

                                            @endif

                                        @endforeach
                                    </ul>


                                </div>
                            </div>
                        </li>

                        <li class="uniq-logo-div-li uniq-logo-div-li-6">
                            <div class="uniq-lg-details">
                                <h4>{{ $content_163->name }}</h4>

                                <div class="logo-inner-u-txt">
                                    <h3>{{ $content_163->name }}</h3>
                                    <p><?= html_entity_decode($content_162->details) ?></p>
                                    <ul>

                                        @foreach($showClientsPackages as $key => $value)

                                            @if ($value->page == 'log-animation' && $value->title == 'Typographic Logo')

                                                <li><img src="{{ asset($value->img) }}" /></li>

                                            @endif

                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </li>

                    </ul>
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
                <h2 class="cn clr_blk title">{{ $content_164->name }}</h2>
                <p class="title_para cn clr_blk_p">
                    <?= html_entity_decode($content_164->details) ?>
                </p>
                <div class="portfoilo_boxes">

                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="htab1">
                            <div class="row">

                                @foreach($showClientsPackages as $key => $value)

                                    @if ($value->page == 'log-animation' && $value->title == 'Our Recent Work')

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
</section>



<section class="price-sec logo-design-price-sec">
    <div class="container">
        <div class="row">
            <div class="col-sm-offset-1 col-sm-10">
                <h2 class="title cn clr_blk_p">{{ $content_47->name }}</h2>
                <p class="para mt_20 cn clr_blk_p"><?= html_entity_decode($content_47->details) ?></p>
            </div>
            <div class="col-sm-12 p0 mt_50">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="prtab1">
                        <div class="col-sm-4">
                            <div class="price-bx price-bx-1">

                                @foreach($setPackage as $key => $value)

                                    @if ($value->id == 10)

                                        @include('web.packagesBox')


                                    <div class="view-del-btn">
                                        <a href="{{route('logoBasic')}}" class="view-dtl-btn-st blue_btn">View
                                            Detail</a>
                                        <!-- <a href="javascript:;" class="popup_btn tr_btn_blue" onclick="order_now_value(this)" name="for $59">Order Now</a> -->
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

                                    @if ($value->id == 11)

                                        @include('web.packagesBox')


                                    <div class="view-del-btn">
                                        <a href="{{route('logoBasic')}}" class="view-dtl-btn-st blue_btn">View
                                            Detail</a>
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

                                    @if ($value->id == 12)

                                        @include('web.packagesBox')

                                    <div class="view-del-btn">
                                        <a href="{{route('logoPlus')}}" class="view-dtl-btn-st blue_btn">View
                                            Detail</a>
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

                        <div class="clearfix"></div>

                        <div class="col-sm-4">
                            <div class="price-bx price-bx-1">

                                @foreach($setPackage as $key => $value)

                                    @if ($value->id == 13)

                                        @include('web.packagesBox')


                                    <div class="view-del-btn">
                                        <a href="{{route('illustration')}}" class="view-dtl-btn-st blue_btn">View
                                            Detail</a>
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

                                    @if ($value->id == 14)

                                        @include('web.packagesBox')


                                        <div class="view-del-btn">
                                            <a href="{{route('3dDesign')}}" class="view-dtl-btn-st blue_btn">View
                                                Detail</a>
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


                        <section class="combo-pack col-sm-12">
                            <div class="container">
                                <div class="col-sm-12 combo-bg-st">

                                    @foreach($setPackage as $key => $value)

                                        @if ($value->id == 67)

                                            @include('web.bigPackagesBox')

                                        @endif

                                    @endforeach

                                </div>
                                <div class="col-sm-12">
                                    <div class="bnr-btn cnslt-btn cmb-btn">
                                        <!-- <a href="javascript:;" class="order_btn_img popup_btn" onclick="order_now_value(this)" name="for $5099"><img src="{{asset('web/images/order-btn-img.png')}}" alt=""> </a> -->
                                        <a href="javascript:;" class="popup_btn tr_btn_blue"
                                            onclick="order_now_value(this)" name="for $1399">Order Now</a>
                                    </div>
                                </div>

                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="combo-pack">
    <div class="container">
        <div class="col-sm-12 combo-bg-st">

            @foreach($setPackage as $key => $value)

                @if ($value->id == 68)

                    @include('web.bigPackagesBox')

                @endif

            @endforeach


        </div>
        <div class="col-sm-12">
            <div class="bnr-btn cnslt-btn cmb-btn">
                <a href="javascript:;" class="popup_btn tr_btn_blue" onclick="order_now_value(this)"
                    name="for $180">Order Now</a>
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
