@extends('web.layouts.main') @section('content')

<section class="consultation_services_sec packages_consultation_services_sec veiw-dtl-sec-st">
    <div class="container">
        <div class="row">
            <div class="consultation_services_boxes">
                <div class="col-sm-4">
                    <div class="price-bx price-bx-1">

                        @foreach($setPackage as $key => $value)

                            @if ($value->id == 57)

                                @include('web.packagesBox')

                            @endif

                        @endforeach


                        <div class="bnr-btn price-btn">
                            <a href="javascript:;" class="order_btn_img popup_btn" onclick="order_now_value(this)" name="for $69"><img src="https://www.digitmediadesigns.com/404.php" alt="" /> </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="consultation_services_box_img view-dtl-txt">
                        <h2>{{ $content_131->name }}</h2>
                        <p>
                            <?= html_entity_decode($content_131->details) ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="satisfied_clients_sec">
    <div class="container">
        <h2 class="title clr_wht cn">Hundreds of Satisfied Clients Across the Globe</h2>
        <p class="title_para clr_wht cn">
            Digit Media Design is very proud of its broad client base that stretches across the globe. We have worked on hundreds of projects in various industries, and they have been a success across the board. We have learned and
            experimented with many of these projects, and it has worked out well. We thoroughly enjoy collaborating with different people in different industries. It is an excellent exchange of ideas and develops a great network.
        </p>
        <div class="row">
            <div class="satisfied_clients_boxes">
                <div class="col-sm-2">
                    <div class="satisfied_clients_box">
                        <img src="{{asset('web/images/satisfied-client-icon1.png')}}" />
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="satisfied_clients_box">
                        <img src="{{asset('web/images/satisfied-client-icon2.png')}}" />
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="satisfied_clients_box">
                        <img src="{{asset('web/images/satisfied-client-icon3.png')}}" />
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="satisfied_clients_box">
                        <img src="{{asset('web/images/satisfied-client-icon4.png')}}" />
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="satisfied_clients_box">
                        <img src="{{asset('web/images/satisfied-client-icon5.png')}}" />
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="satisfied_clients_box">
                        <img src="{{asset('web/images/satisfied-client-icon6.png')}}" />
                    </div>
                </div>
                <div class="col-sm-2 col-sm-offset-1">
                    <div class="satisfied_clients_box">
                        <img src="{{asset('web/images/satisfied-client-icon7.png')}}" />
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="satisfied_clients_box">
                        <img src="{{asset('web/images/satisfied-client-icon8.png')}}" />
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="satisfied_clients_box">
                        <img src="{{asset('web/images/satisfied-client-icon9.png')}}" />
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="satisfied_clients_box">
                        <img src="{{asset('web/images/satisfied-client-icon10.png')}}" />
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="satisfied_clients_box">
                        <img src="{{asset('web/images/satisfied-client-icon11.png')}}" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="cta_sec">
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <h2 class="title clr_wht">Are You Ready?</h2>
                <p class="clr_wht">Use your Coupon and Get a 50% Discount Now!</p>
                <div class="button">
                    <a href="javascript:;" class="popup_btn blue_btn" onclick="order_now_value(this)" name="for $59">Order Now</a>
                    <a href="javascript:;" class="chat tr_btn" target="_self" onclick="setButtonURL();"> Live Chat</a>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="cta_box_img">
                    <img src="{{asset('web/images/cta-img.png')}}" alt="" />
                </div>
            </div>
        </div>
    </div>
</section>

@endsection @section('css')
<style type="text/css"></style>
@endsection @section('js') @endsection
