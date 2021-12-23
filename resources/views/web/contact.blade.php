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
                        <p class="para clr_blk_p">
                            A unique and creative branding can help your brand stand out from the competition and get your brand noticed. The Webho has a team of experienced professionals proficient at creating innovative branding
                            strategies that can help your brand uncover its true potential.
                        </p>
                        <div class="button mt_50">
                            <a href="javascript:;" class="popup_btn blue_btn" onclick="order_now_value(this)" name="for $59">Order Now</a>
                            <a href="javascript:;" class="chat tr_btn_blue" target="_self" onclick="setButtonURL();"> Live Chat</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="consultation_services_box_img">
                        <img src="{{asset('web/images/webdesign-consultation-services-img.png')}}" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection @section('css')
<style type="text/css"></style>
@endsection @section('js') @endsection
