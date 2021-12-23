@extends('web.layouts.main')
@section('content')
        <!-- START: Inner Banner-->
        @include('web.layouts.inner_banner')
        <!-- END: Inner Banner-->

<section class="consultation_services_sec portfolio_consultation_services_sec">
    <div class="container">
        <div class="row">
            <div class="consultation_services_boxes">
                <div class="col-sm-7">
                    <div class="consultation_services_box">
                        <h2 class="title clr_blk_p">{{ $content_77->name }}</h2>
                        <p class="para clr_blk_p">
                            <?= html_entity_decode($content_77->details) ?>
                        </p>
                        <div class="button mt_50">
                            <a href="javascript:;" class="popup_btn blue_btn" onclick="order_now_value(this)" name="for $59">Order Now</a>
                            <a href="javascript:;" class="chat tr_btn_blue" target="_self" onclick="setButtonURL();"> Live Chat</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="consultation_services_box_img">
                        <img src="{{ asset($content_77->img) }}" />
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
                <h2 class="cn clr_blk title">{{ $content_78->name }}</h2>
                <p class="title_para cn clr_blk_p"><?= html_entity_decode($content_78->details) ?></p>


                <div class="portfoilo_boxes">

                    <ul id="nav-tabs-wrapper" class="nav nav-tabs nav-tabs-horizontal">
                        <li class="active"><a href="#htab1" data-toggle="tab">Website</a></li>
                        <li><a href="#htab2" data-toggle="tab">Logo</a></li>
                        <li><a href="#htab3" data-toggle="tab">Video</a></li>
                        <li><a href="#htab4" data-toggle="tab">Stationery</a></li>
                        <li><a href="#htab5" data-toggle="tab">Social Media</a></li>
                    </ul>

                    <div class="tab-content">

                        <div role="tabpanel" class="tab-pane fade in active" id="htab1">

                            <div class="row">

                                @foreach($showClientsPackages as $key => $value)

                                    @if ($value->page == 'Home' && $value->title == 'Website')

                                        <div class="col-sm-4 col-xs-6 portfolio-box">

                                            <div class="portfolio_box video_portfolio_fancy js-wow u-slideUp is-animated" data-wow-delay="0.1s">


                                                <a class="fancybox" rel="ligthbox" href="{{ $value->link == '' ? asset($value->img) : $value->link }}">

                                                    <div class="hovereffect"><img src="{{ asset($value->img) }}" alt="" style="width: 360px; height:240px;" /></div>

                                                </a>

                                            </div>

                                        </div>

                                    @endif

                                @endforeach

                            </div>

                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="htab2">

                            <div class="row">

                                @foreach($showClientsPackages as $key => $value)

                                    @if ($value->page == 'Home' && $value->title == 'Logo')

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

                        <div role="tabpanel" class="tab-pane fade" id="htab3">

                            <ul id="nav-tabs-wrapper" class="nav nav-tabs nav-tabs-horizontal">
                                <li class="active"><a href="#inrvtab1" data-toggle="tab">2D Animation</a></li>
                                <li class=""><a href="#inrvtab2" data-toggle="tab">Whiteboard Animation</a></li>
                                <li class=""><a href="#inrvtab3" data-toggle="tab">Motion Graphics</a></li>
                            </ul>

                            <div class="tab-content">

                                <div role="tabpanel" class="tab-pane fade in active" id="inrvtab1">


                                    <div class="row">

                                        @foreach($showClientsPackages as $key => $value)

                                            @if ($value->page == 'Home' && $value->title == 'Video' && $value->sub_title == '2D Animation')

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

                                            @if ($value->page == 'Home' && $value->title == 'Video' && $value->sub_title == 'Whiteboard Animation')

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

                                            @if ($value->page == 'Home' && $value->title == 'Video' && $value->sub_title == 'Motion Graphics')

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

                        <div role="tabpanel" class="tab-pane fade" id="htab4">

                            <div class="row">

                                @foreach($showClientsPackages as $key => $value)

                                    @if ($value->page == 'Home' && $value->title == 'Stationery')

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

                        <div role="tabpanel" class="tab-pane fade" id="htab5">

                            <div class="row">

                                @foreach($showClientsPackages as $key => $value)

                                    @if ($value->page == 'Home' && $value->title == 'Social Media')

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
@endsection
@section('css')
<style type="text/css">
</style>
@endsection
@section('js')
@endsection
