@extends('web.layouts.main')
@section('content')

<div class="banner_main">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="banner_box">
                    <?php echo html_entity_decode($banner['details']) ?>
                    <div class="button">
                        <a href="javascript:;" class="popup_btn wht_btn" onclick="order_now_value(this)" name="for $59">Get Started</a>
                        <a href="javascript:;" class="chat tr_btn" target="_self" onclick="setButtonURL();"> Live Chat</a>
                    </div>
                    <h4>{{$banner->name}}</h4>
                    <div class="banner_trust_img">
                        <ul>
                            <li><img src="{{asset('web/images/trust-icon1.png')}}" /></li>

                            <li><img src="{{asset('web/images/trust-icon3.png')}}" /></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="banner_box_img">
                    <img loading="lazy" class="banner_img" src="{{asset($banner->img)}}" alt="" />
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <section class="client_logo">
	<div class="container">
		<h2 class="title cn clr_blk">Awards We've Received</h2>
		<div class="client_logo_boxes">
			<img src="images/cl-logo/cl-logo-1.png" class="client_logo1">
			<img src="images/cl-logo/cl-logo-2.png" class="client_logo2">
			<img src="images/cl-logo/cl-logo-3.png" class="client_logo2">
			<img src="images/cl-logo/cl-logo-4.png" class="client_logo2">
			<img src="images/cl-logo/cl-logo-5.png" class="client_logo2">
			<img src="images/cl-logo/cl-logo-6.png" class="client_logo2">
		</div>
	</div>
</section> -->

<section class="client_logo">
    <div class="container">
        <?php echo html_entity_decode($content_1['details'])?>
        <div class="slider-slide">
            @foreach ($technologies as $key => $technology)
            <div class="tech-img-logo">
                <img src="{{asset($technology->img)}}" />
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="h_service_sec">
    <div class="container">
        <div class="row">
            <div class="h_service_text_boxes">
                <div class="col-sm-4">
                    <div class="h_service_text_box">
                        <h2 class="title clr_blk">{{$content_2->name}}</h2>
                    </div>
                </div>

                <div class="col-sm-8">
                    <div class="h_service_text_box">
                        <?php echo html_entity_decode($content_2['details']) ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="h_service_boxes">
                <div class="col-sm-3">
                    <div class="h_service_box">
                        <div class="h_ser_icon"><img src="{{asset($content_3->img)}}" /></div>
                        <h3>{{$content_3->name}}</h3>
                        <?php echo html_entity_decode($content_3['details']) ?>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="h_service_box">
                        <div class="h_ser_icon"><img src="{{asset($content_4->img)}}" /></div>
                        <h3>{{$content_4->name}}</h3>
                        <?php echo html_entity_decode($content_4['details']) ?>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="h_service_box">
                        <div class="h_ser_icon"><img src="{{asset($content_5->img)}}" /></div>
                        <h3>{{$content_5->name}}</h3>
                        <?php echo html_entity_decode($content_5['details']) ?>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="h_service_box">
                        <div class="h_ser_icon"><img src="{{asset($content_6->img)}}" /></div>
                        <h3>{{$content_6->name}}</h3>
                        <?php echo html_entity_decode($content_6['details']) ?>
                    </div>
                </div>

                <div class="col-sm-3 col-sm-offset-3">
                    <div class="h_service_box">
                        <div class="h_ser_icon"><img src="{{asset($content_7->img)}}" /></div>
                        <h3>{{$content_7->name}}</h3>
                        <?php echo html_entity_decode($content_7['details']) ?>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="h_service_box">
                        <div class="h_ser_icon"><img src="{{asset($content_8->img)}}" /></div>
                        <h3>{{$content_8->name}}</h3>
                        <?php echo html_entity_decode($content_8['details']) ?>
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

                <h2 class="cn clr_blk title">{{$content_9->name}}</h2>

                <?php echo html_entity_decode($content_9['details']) ?>

                <div class="portfoilo_boxes">

                    <ul id="nav-tabs-wrapper" class="nav nav-tabs nav-tabs-horizontal">
                        <li class="nav-item active"><a class="nav-link active" href="#htab1" data-toggle="tab">Website</a></li>
                        <li class="nav-item"><a class="nav-link" href="#htab2" data-toggle="tab">Logo</a></li>
                        <li class="nav-item"><a class="nav-link" href="#htab3" data-toggle="tab">Video</a></li>
                        <li class="nav-item"><a class="nav-link" href="#htab4" data-toggle="tab">Stationery</a></li>
                        <li class="nav-item"><a class="nav-link" href="#htab5" data-toggle="tab">Social Media</a></li>
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
                                <li class="nav-item active"><a class="nav-link active" href="#inrvtab1" data-toggle="tab">2D Animation</a></li>
                                <li class="nav-item"><a class="nav-link " href="#inrvtab2" data-toggle="tab">Whiteboard Animation</a></li>
                                <li class="nav-item"><a class="nav-link " href="#inrvtab3" data-toggle="tab">Motion Graphics</a></li>
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

                                <div role="tabpanel" class="tab-pane fade " id="inrvtab2">


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

                                <div role="tabpanel" class="tab-pane fade " id="inrvtab3">


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
