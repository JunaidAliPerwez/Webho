@extends('web.layouts.main') @section('content')
<!-- START: Inner Banner-->
@include('web.layouts.inner_banner')
<!-- END: Inner Banner-->
<section class="consultation_services_sec orm_consultation_services_sec">
    <div class="container">
        <div class="row">
            <div class="consultation_services_boxes">
                <div class="col-sm-7">
                    <div class="consultation_services_box">
                        <h2 class="title clr_blk_p">{{ $content_102->name }}</h2>
                        <p class="para clr_blk_p"><?= html_entity_decode($content_102->details) ?></p>
                        <div class="button mt_50">
                            <a href="javascript:;" class="popup_btn blue_btn" onclick="order_now_value(this)" name="for $59">Order Now</a>
                            <a href="javascript:;" class="chat tr_btn_blue" target="_self" onclick="setButtonURL();"> Live Chat</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="consultation_services_box_img">
                        <img src="{{ asset($content_102->img) }}" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="orm_sec">
    <div class="container">
        <h2 class="title cn clr_blk_p">{{ $content_103->name }}</h2>
        <p class="para cn clr_blk_p mt_20"><?= html_entity_decode($content_103->details) ?></p>
        <div class="row">
            <div class="orm_sec_boxes mt_50">
                <div class="col-sm-4">
                    <div class="orm_sec_box">
                        <div class="h_ser_icon"><img src="{{ asset($content_104->img) }}" /></div>
                        <h3>{{ $content_104->name }}</h3>
                        <p><?= html_entity_decode($content_104->details) ?></p>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="orm_sec_box">
                        <div class="h_ser_icon"><img src="{{ asset($content_105->img) }}" /></div>
                        <h3>{{ $content_105->name }}</h3>
                        <p><?= html_entity_decode($content_105->details) ?></p>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="orm_sec_box">
                        <div class="h_ser_icon"><img src="{{ asset($content_106->img) }}" /></div>
                        <h3>{{ $content_106->name }}</h3>
                        <p><?= html_entity_decode($content_106->details) ?></p>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="orm_sec_box">
                        <div class="h_ser_icon"><img src="{{ asset($content_107->img) }}" /></div>
                        <h3>{{ $content_107->name }}</h3>
                        <p><?= html_entity_decode($content_107->details) ?></p>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="orm_sec_box">
                        <div class="h_ser_icon"><img src="{{ asset($content_108->img) }}" /></div>
                        <h3>{{ $content_108->name }}</h3>
                        <p><?= html_entity_decode($content_108->details) ?></p>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="orm_sec_box">
                        <div class="h_ser_icon"><img src="{{ asset($content_109->img) }}" /></div>
                        <h3>{{ $content_109->name }}</h3>
                        <p><?= html_entity_decode($content_109->details) ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing -->
<section class="price-sec">
    <div class="container">
        <div class="row">
            <div class="col-sm-offset-1 col-sm-10">
                <h2 class="title cn clr_blk_p">{{ $content_110->name }}</h2>
                <p class="para mt_20 cn clr_blk_p"><?= html_entity_decode($content_110->details) ?></p>
            </div>
            <div class="col-sm-12 p0 mt_50">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="inrprtab3">
                        <div class="col-sm-4">
                            <div class="price-bx price-bx-1">
                                @foreach($setPackage as $key => $value) @if ($value->id == 23) @include('web.packagesBox')

                                <div class="view-del-btn">
                                    <a href="{{route('ormBasic')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
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
                                @foreach($setPackage as $key => $value) @if ($value->id == 24) @include('web.packagesBox')

                                <div class="view-del-btn">
                                    <a href="{{route('ormValue')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
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
                                @foreach($setPackage as $key => $value) @if ($value->id == 25) @include('web.packagesBox')

                                <div class="view-del-btn">
                                    <a href="{{route('ormStandard')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
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
                                @foreach($setPackage as $key => $value) @if ($value->id == 26) @include('web.packagesBox')

                                <div class="view-del-btn">
                                    <a href="{{route('ormPremium')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
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
                                @foreach($setPackage as $key => $value) @if ($value->id == 27) @include('web.packagesBox')

                                <div class="view-del-btn">
                                    <a href="{{route('ormBusiness')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
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

@endsection @section('js') @endsection
