@extends('web.layouts.main')
@section('content')
        <!-- START: Inner Banner-->
        @include('web.layouts.inner_banner')
        <!-- END: Inner Banner-->

<section class="consultation_services_sec packages_consultation_services_sec">
    <div class="container">
        <div class="row">
            <div class="consultation_services_boxes">
                <div class="col-sm-7">
                    <div class="consultation_services_box">
                        <h2 class="title clr_blk_p">{{ $content_75->name }}</h2>
                        <p class="para clr_blk_p">
                            <?= html_entity_decode($content_75->details) ?>
                        </p>
                        <div class="button mt_50">
                            <a href="javascript:;" class="popup_btn blue_btn" onclick="order_now_value(this)" name="for $59">Order Now</a>
                            <a href="javascript:;" class="chat tr_btn_blue" target="_self" onclick="setButtonURL();"> Live Chat</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="consultation_services_box_img">
                        <img src="{{ asset($content_75->img) }}" />
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
                <h2 class="title cn clr_blk_p">{{ $content_76->name }}</h2>
                <p class="para mt_20 cn clr_blk_p">
                    <?= html_entity_decode($content_76->details) ?>
                </p>
            </div>
            <div class="col-sm-12 p0">
                <div class="portfoilo_boxes">
                    <ul id="nav-tabs-wrapper" class="nav nav-tabs nav-tabs-horizontal">
                        <li class="active"><a href="#package_website_design" data-toggle="tab">Website Design</a></li>
                        <li><a href="#package_ecommerce" data-toggle="tab">Ecommerce</a></li>
                        <li><a href="#package_branding" data-toggle="tab">Branding</a></li>
                        <li><a href="#package_animation" data-toggle="tab">Animation</a></li>
                        <li><a href="#package_digital_marketing" data-toggle="tab">Digital Marketing</a></li>
                        <li><a href="#package_combo" data-toggle="tab">Combo</a></li>
                        <li><a href="#package_logo_design" data-toggle="tab">Logo Design</a></li>
                    </ul>
                </div>
                <div class="tab-content">

                    <div role="tabpanel" class="tab-pane fade" id="package_logo_design">
                        <div class="col-sm-4">
                            <div class="price-bx price-bx-1">

                                @foreach($setPackage as $key => $value)

                                    @if ($value->id == 56)

                                    @include('web.packagesBox')

                                    <div class="view-del-btn">
                                        <a href="{{route('logoBasic')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
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

                                    @if ($value->id == 58)

                                        @include('web.packagesBox')

                                        <div class="view-del-btn">
                                            <a href="{{route('logoPlus')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
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

                                @if ($value->id == 57)

                                    @include('web.packagesBox')

                                    <div class="view-del-btn">
                                        <a href="{{ route('logoInfinity') }}" class="view-dtl-btn-st blue_btn">View Detail</a>
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

								@if ($value->id == 13)

									@include('web.packagesBox')


                                    <div class="view-del-btn">
                                        <a href="{{route('illustration')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
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

								@if ($value->id == 59)

									@include('web.packagesBox')

                                    <div class="view-del-btn">
                                        <a href="{{route('mascot')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
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

                        <section class="combo-pack col-sm-12">
                            <div class="container">
                                <div class="col-sm-12 combo-bg-st">

                                    @foreach($setPackage as $key => $value)

                                    @if ($value->id == 66)

                                        @include('web.packagesBox')

                                    @endif

                                    @endforeach


                                </div>
                                <div class="col-sm-12">
                                    <div class="bnr-btn cnslt-btn cmb-btn">
                                        <a href="javascript:;" class="order_btn_img popup_btn" onclick="order_now_value(this)" name="for $1399"><img src="{{asset('web/images/order-btn-img.png')}}" alt="" /> </a>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                    <div role="tabpanel" class="tab-pane fade in active" id="package_website_design">
                        <div class="col-sm-4">
                            <div class="price-bx price-bx-1">

                                @foreach($setPackage as $key => $value)

                                    @if ($value->id == 28)

                                        @include('web.packagesBox')

                                    @endif

                                @endforeach

                                <div class="view-del-btn">
                                    <a href="{{route('basicWebsite')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
                                    <a name="" data-fancybox="" title="{{ $value->name }}"
                                        data-src="#popupformWebsite" href="javascript:;"
                                        class="view-del-btn tr_btn_blue open_modal"
                                        data-pack_id="{{ $value->id }}">Order Now</a>
                                </div>
                                <div class="bnr-btn price-btn">
                                    <a href="{{ $setting['phone'] }}" class="packages_tel"><i class="fa fa-phone"></i>{{ $setting['phone'] }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="price-bx">

                                @foreach($setPackage as $key => $value)

                                    @if ($value->id == 29)

                                        @include('web.packagesBox')


                                        <div class="view-del-btn">
                                            <a href="{{route('startupWebsite')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
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

                                    @if ($value->id == 30)

                                        @include('web.packagesBox')




                                <div class="view-del-btn">
                                    <a href="{{route('professionalWebsite')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
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

                                    @if ($value->id == 31)

                                        @include('web.packagesBox')



                                <div class="view-del-btn">
                                    <a href="{{route('eliteWebsitePackageDetail')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
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

                                    @if ($value->id == 32)

                                        @include('web.packagesBox')





                                <div class="view-del-btn">
                                    <a href="{{route('corporateComboDetails')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
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

                                    @if ($value->id == 33)

                                        @include('web.packagesBox')


                                        <div class="view-del-btn">
                                            <a href="{{route('businessWebsitePackageDetail')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
                                            <a name="" data-fancybox="" title="{{ $value->name }}"
                                                data-src="#popupformWebsite" href="javascript:;"
                                                class="view-del-btn tr_btn_blue open_modal"
                                                data-pack_id="{{ $value->id }}">Order Now</a>
                                        </div>
                                        <div class="bnr-btn price-btn">
                                            <a href={{ $setting['phone'] }}" class="packages_tel"><i class="fa fa-phone"></i>{{ $setting['phone'] }}</a>
                                        </div>

                                @endif

                                @endforeach

                            </div>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="package_ecommerce">

                        <div class="col-sm-4">
                            <div class="price-bx price-bx-1">

                                @foreach($setPackage as $key => $value)

                                    @if ($value->id == 34)

                                        @include('web.packagesBox')


                                        <div class="view-del-btn">
                                            <a href="{{route('startupEcommerceDetails')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
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

                                    @if ($value->id == 35)

                                        @include('web.packagesBox')


                                <div class="view-del-btn">
                                    <a href="{{route('startupEcommerceDetails')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
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

                                    @if ($value->id == 36)

                                        @include('web.packagesBox')



                                <div class="view-del-btn">
                                    <a href="{{route('professionalEcommerceDetails')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
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

                                    @if ($value->id == 37)

                                        @include('web.packagesBox')




                                <div class="view-del-btn">
                                    <a href="{{route('eliteEcommerceDetails')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
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

                                    @if ($value->id == 38)

                                        @include('web.packagesBox')



                                        <div class="view-del-btn">
                                            <a href="{{route('customEcommerceMarketplaceDetails')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
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

                                    @if ($value->id == 39)

                                        @include('web.packagesBox')

                                        <div class="view-del-btn">
                                            <a href="{{route('advancedEcommerceDetails')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
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

                        <div class="col-sm-4 col-sm-offset-2">
                            <div class="price-bx price-bx-1">

                                @foreach($setPackage as $key => $value)

                                    @if ($value->id == 40)

                                        @include('web.packagesBox')


                                        <div class="view-del-btn">
                                            <a href="{{route('customCrmErpPortalDetails')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
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

                                    @if ($value->id == 41)

                                        @include('web.packagesBox')

                                        <div class="view-del-btn">
                                            <a href="{{route('customizedWebPortalDetails')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
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

                    <div role="tabpanel" class="tab-pane fade" id="package_branding">
                        <div class="col-sm-4">
                            <div class="price-bx price-bx-1">

                                @foreach($setPackage as $key => $value)

                                    @if ($value->id == 42)

                                        @include('web.packagesBox')


                                        <div class="view-del-btn">
                                            <a href="{{route('startupCollateralDetails')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
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

                                    @if ($value->id == 43)

                                        @include('web.packagesBox')


                                        <div class="view-del-btn">
                                            <a href="{{route('collateralClassicDetails')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
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

                                    @if ($value->id == 44)

                                        @include('web.packagesBox')


                                        <div class="view-del-btn">
                                            <a href="{{route('premiumCollateralDetails')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
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
                        <div class="col-sm-4 col-sm-offset-2">
                            <div class="price-bx price-bx-1">

                                 @foreach($setPackage as $key => $value)

                                    @if ($value->id == 45)

                                        @include('web.packagesBox')

                                        <div class="view-del-btn">
                                            <a href="{{route('unlimitedCollateralDetails')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
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

                                    @if ($value->id == 46)

                                        @include('web.packagesBox')

                                        <div class="view-del-btn">
                                            <a href="{{route('completeBrandingDetails')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
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

                    <div role="tabpanel" class="tab-pane fade" id="package_animation">
                        <div class="portfoilo_boxes">
                            <ul id="nav-tabs-wrapper" class="nav nav-tabs nav-tabs-horizontal">
                                <li class="active"><a href="#inrprtab1-1" data-toggle="tab">Video Animation</a></li>
                                <li><a href="#inrprtab2-1" data-toggle="tab">Logo Animation</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="inrprtab1-1">
                                <div class="col-sm-4">
                                    <div class="price-bx price-bx-1">

                                        @foreach($setPackage as $key => $value)

                                        @if ($value->id == 65)

                                            @include('web.packagesBox')


                                            <div class="view-del-btn">
                                                <a href="{{route('teaserIntroVideoDetails')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
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

                                        @if ($value->id == 64)

                                            @include('web.packagesBox')

                                            <div class="view-del-btn">
                                                <a href="{{route('startupVideoDetails')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
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

                                        @if ($value->id == 51)

                                            @include('web.packagesBox')

                                            <div class="view-del-btn">
                                                <a href="{{route('classicVideoDetails')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
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
                                <div class="col-sm-4 col-sm-offset-2">
                                    <div class="price-bx price-bx-1">

                                        @foreach($setPackage as $key => $value)

                                        @if ($value->id == 61)

                                            @include('web.packagesBox')

                                            <div class="view-del-btn">
                                                <a href="{{route('premiumVideoDetails')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
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

                                        @if ($value->id == 53)

                                            @include('web.packagesBox')

                                            <div class="view-del-btn">
                                                <a href="{{route('deluxVideoDetails')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
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
                            <div role="tabpanel" class="tab-pane fade" id="inrprtab2-1">
                                <div class="col-sm-4">
                                    <div class="price-bx price-bx-1">

                                        @foreach($setPackage as $key => $value)

                                            @if ($value->id == 47)

                                                @include('web.packagesBox')

                                                <div class="view-del-btn">
                                                    <a href="{{route('logoAnimationBasic')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
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

                                            @if ($value->id == 48)

                                                @include('web.packagesBox')

                                            @endif

                                        @endforeach


                                        <div class="view-del-btn">
                                            <a href="{{route('logoAnimationStartup')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
                                            <a href="javascript:;" class="popup_btn tr_btn_blue" onclick="order_now_value(this)" name="for $79">Order Now</a>
                                        </div>
                                        <div class="bnr-btn price-btn">
                                            <a href="{{ $setting['phone'] }}" class="packages_tel"><i class="fa fa-phone"></i>{{ $setting['phone'] }}</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="price-bx price-bx-1">

                                        @foreach($setPackage as $key => $value)

                                            @if ($value->id == 49)

                                                @include('web.packagesBox')

                                                <div class="view-del-btn">
                                                    <a href="{{route('logoAnimationProfessional')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
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

                    <div role="tabpanel" class="tab-pane fade" id="package_digital_marketing">
                        <div class="portfoilo_boxes">
                            <ul id="nav-tabs-wrapper" class="nav nav-tabs nav-tabs-horizontal">
                                <li class="active"><a href="#inrprtab1" data-toggle="tab">SMM</a></li>
                                <li><a href="#inrprtab2" data-toggle="tab">SEO</a></li>
                                <li><a href="#inrprtab3" data-toggle="tab">ORM</a></li>
                            </ul>
                        </div>
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
                                <div class="col-sm-4">
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
                                <div class="col-sm-4">
                                    <div class="price-bx price-bx-1">

                                        @foreach($setPackage as $key => $value)

                                            @if ($value->id == 15)

                                                @include('web.packagesBox')

                                                <div class="view-del-btn">
                                                    <a href="{{route('seoStartupDetails')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
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

                                            @if ($value->id == 16)

                                                @include('web.packagesBox')

                                                <div class="view-del-btn">
                                                    <a href="{{route('identitySeoDetails')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
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

                                            @if ($value->id == 17)

                                                @include('web.packagesBox')

                                                <div class="view-del-btn">
                                                    <a href="{{route('eliteSeoDetails')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
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

                                            @if ($value->id == 18)

                                                @include('web.packagesBox')

                                                <div class="view-del-btn">
                                                    <a href="{{route('professionalSeoDetails')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
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
                            <div role="tabpanel" class="tab-pane fade" id="inrprtab3">
                                <div class="col-sm-4">
                                    <div class="price-bx price-bx-1">

                                        @foreach($setPackage as $key => $value)

                                            @if ($value->id == 23)

                                                @include('web.packagesBox')

                                                <div class="view-del-btn">
                                                    <a href="{{route('ormBasic')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
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

                                            @if ($value->id == 24)

                                                @include('web.packagesBox')

                                                <div class="view-del-btn">
                                                    <a href="{{route('ormValue')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
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

                                            @if ($value->id == 25)

                                                @include('web.packagesBox')

                                                <div class="view-del-btn">
                                                    <a href="{{route('ormStandard')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
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

                                            @if ($value->id == 26)

                                                @include('web.packagesBox')

                                                <div class="view-del-btn">
                                                    <a href="{{route('ormPremium')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
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

                                            @if ($value->id == 27)

                                                @include('web.packagesBox')

                                                <div class="view-del-btn">
                                                    <a href="{{route('ormBusiness')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
                                                    <a href="javascript:;" class="popup_btn tr_btn_blue" onclick="order_now_value(this)" name="for $1299">Order Now</a>
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

                    <div role="tabpanel" class="tab-pane fade" id="package_combo">
                        <div class="col-sm-4">
                            <div class="price-bx price-bx-1">
                                @foreach($setPackage as $key => $value)

								@if ($value->id == 50)

									@include('web.packagesBox')

                                    <div class="view-del-btn">
                                        <a href="{{route('basicCombo')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
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

								@if ($value->id == 63)

									@include('web.packagesBox')

                                    <div class="view-del-btn">
                                        <a href="{{route('startupCombo')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
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

								@if ($value->id == 62)

									@include('web.packagesBox')

                                    <div class="view-del-btn">
                                        <a href="{{route('professionalCombo')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
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
                        <div class="col-sm-4 col-sm-offset-2">
                            <div class="price-bx price-bx-1">

                                @foreach($setPackage as $key => $value)

								@if ($value->id == 52)

									@include('web.packagesBox')

                                    <div class="view-del-btn">
                                        <a href="{{route('corporateComboDetails')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
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

                                @if ($value->id == 55)

                                    @include('web.packagesBox')

                                    <div class="view-del-btn">
                                        <a href="{{route('eliteCombo')}}" class="view-dtl-btn-st blue_btn">View Detail</a>
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
                        <section class="combo-pack col-sm-12">
                            <div class="container">
                                <div class="col-sm-12 combo-bg-st">

                                    @foreach($setPackage as $key => $value)

									@if ($value->id == 70)

										@include('web.packagesBox')

									@endif

								@endforeach

                                </div>
                                <div class="col-sm-12">
                                    <div class="bnr-btn cnslt-btn cmb-btn">
                                        <!-- <a href="javascript:;" class="order_btn_img popup_btn" onclick="order_now_value(this)" name="for $5099"><img src="{{asset('web/images/order-btn-img.png')}}" alt=""> </a> -->
                                        <a name="" data-fancybox="" title="{{ $value->name }}"
                                            data-src="#popupformWebsite" href="javascript:;"
                                            class="view-del-btn tr_btn_blue open_modal"
                                            data-pack_id="{{ $value->id }}">Order Now</a>
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
@endsection
@section('css')
<style type="text/css">
</style>
@endsection
@section('js')
@endsection
