@extends('web.layouts.main')
@section('content')
<!-- START: Inner Banner-->
        @include('web.layouts.inner_banner')
<!-- END: Inner Banner-->
<section class="consultation_services_sec seo_consultation_services_sec">
    <div class="container">
        <div class="row">
            <div class="consultation_services_boxes">
                <div class="col-sm-7">
                    <div class="consultation_services_box">
                        <h2 class="title clr_blk_p">{{ $content_48->name }}</h2>
                        <p class="para clr_blk_p">
                            <?= html_entity_decode($content_48->details) ?>
                        </p>
                        <div class="button mt_50">
                            <a href="javascript:;" class="popup_btn blue_btn" onclick="order_now_value(this)" name="for $59">Order Now</a>
                            <a href="javascript:;" class="chat tr_btn_blue" target="_self" onclick="setButtonURL();"> Live Chat</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="consultation_services_box_img">
                        <img src="{{ asset($content_48->img) }}" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="consultation_services_sec professional_seo_sec">
    <div class="container">
        <div class="row">
            <div class="consultation_services_boxes">
                <div class="col-sm-6">
                    <div class="professional_seo_box_img">
                        <img src="{{ asset($content_49->img) }}" />
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="consultation_services_box">
                        <h2 class="title clr_blk_p">
                            {{ $content_49->name }}
                        </h2>
                        <p class="para clr_blk_p">
                            <?= html_entity_decode($content_49->details) ?>
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

<section class="seo_services_sec">
    <div class="container">
        <div class="row">
            <div class="seo_services_boxes">
                <div class="col-sm-4">
                    <div class="seo_services_box">
                        <h2 class="title clr_blk_p">{{ $content_50->name }}</h2>
                        <p class="para clr_blk_p"><?= html_entity_decode($content_50->details) ?></p>

                        <div class="seo_services_box_tabs">
                            <ul class="nav nav-tabs nav-tabs-horizontal">
                                <li class="active"><a href="#seotab1" data-toggle="tab">SEO Strategy</a></li>
                                <li><a href="#seotab2" data-toggle="tab">Execution</a></li>
                                <li><a href="#seotab3" data-toggle="tab">Reporting & Analysis</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8 p_0">
                    <div class="seo_services_box">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="seotab1">
                                <div class="col-sm-4">
                                    <div class="seo_services_tab_content">
                                        <div class="seo_services_tab_icon">
                                            <img src="{{ asset($content_51->img) }}" alt="" />
                                        </div>
                                        <h3>{{ $content_51->name }}</h3>
                                        <p><?= html_entity_decode($content_51->details) ?></p>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="seo_services_tab_content">
                                        <div class="seo_services_tab_icon">
                                            <img src="{{ asset($content_52->img) }}" alt="" />
                                        </div>
                                        <h3>{{ $content_52->name }}</h3>
                                        <p><?= html_entity_decode($content_52->details) ?></p>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="seo_services_tab_content">
                                        <div class="seo_services_tab_icon">
                                            <img src="{{ asset($content_53->img) }}" alt="" />
                                        </div>
                                        <h3>{{ $content_53->name }}</h3>
                                        <p><?= html_entity_decode($content_53->details) ?></p>
                                    </div>
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane fade" id="seotab2">
                                <div class="col-sm-4">
                                    <div class="seo_services_tab_content">
                                        <div class="seo_services_tab_icon">
                                            <img src="{{ asset($content_54->img) }}" alt="" />
                                        </div>
                                        <h3>{{ $content_54->name }}</h3>
                                        <p><?= html_entity_decode($content_54->details) ?></p>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="seo_services_tab_content">
                                        <div class="seo_services_tab_icon">
                                            <img src="{{ asset($content_55->img) }}" alt="" />
                                        </div>
                                        <h3>{{ $content_55->name }}</h3>
                                        <p><?= html_entity_decode($content_55->details) ?></p>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="seo_services_tab_content">
                                        <div class="seo_services_tab_icon">
                                            <img src="{{ asset($content_56->img) }}" alt="" />
                                        </div>
                                        <h3>{{ $content_56->name }}</h3>
                                        <p><?= html_entity_decode($content_56->details) ?></p>
                                    </div>
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane fade" id="seotab3">
                                <div class="col-sm-4">
                                    <div class="seo_services_tab_content">
                                        <div class="seo_services_tab_icon">
                                            <img src="{{ asset($content_57->img) }}" alt="" />
                                        </div>
                                        <h3>{{ $content_57->name }}</h3>
                                        <p><?= html_entity_decode($content_57->details) ?></p>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="seo_services_tab_content">
                                        <div class="seo_services_tab_icon">
                                            <img src="{{ asset($content_58->img) }}" alt="" />
                                        </div>
                                        <h3>{{ $content_58->name }}</h3>
                                        <p><?= html_entity_decode($content_58->details) ?></p>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="seo_services_tab_content">
                                        <div class="seo_services_tab_icon">
                                            <img src="{{ asset($content_59->img) }}" alt="" />
                                        </div>
                                        <h3>{{ $content_59->name }}</h3>
                                        <p><?= html_entity_decode($content_59->details) ?></p>
                                    </div>
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

<section class="type_of_seo_sec">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="title cn clr_blk_p">{{ $content_60->name }}</h2>
                <p class="para mt_20 cn clr_blk_p"><?= html_entity_decode($content_60->details) ?></p>
            </div>

            <div class="type_of_seo_boxes">
                <ul class="nav nav-tabs nav-tabs-horizontal">
                    <div class="col-sm-4">
                        <li class="active">
                            <a href="#typeseotab1" data-toggle="tab">
                                <div class="">
                                    <div class="type_of_seo_box">
                                        <img src="{{ asset($content_61->img) }}" />
                                        <h3>{{ $content_61->name }}</h3>
                                        <p><?= html_entity_decode($content_61->details) ?></p>
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
                                        <img src="{{ asset($content_62->img) }}" />
                                        <h3>{{ $content_62->name }}</h3>
                                        <p><?= html_entity_decode($content_62->details) ?></p>
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
                                        <img src="{{ asset($content_63->img) }}" />
                                        <h3>{{ $content_63->name }}</h3>
                                        <p><?= html_entity_decode($content_63->details) ?></p>
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
                                <h3>{{ $content_64->name }}</h3>
                                <p>
                                    <?= html_entity_decode($content_64->details) ?>
                                </p>
                                <!-- <a href="javascript:;">Read More  >></a> -->
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="type_of_seo_box2">
                                <img src="{{ asset($content_64->img) }}" />
                            </div>
                        </div>
                    </div>
                </div>

                <div role="tabpanel" class="tab-pane fade" id="typeseotab2">
                    <div class="type_of_seo_boxes2">
                        <div class="col-sm-7">
                            <div class="type_of_seo_box2">
                                <h3>{{ $content_65->name }}</h3>
                                <p>
                                    <?= html_entity_decode($content_65->details) ?>
                                </p>
                                <!-- <a href="javascript:;">Read More  >></a> -->
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="type_of_seo_box2">
                                <img src="{{ asset($content_65->img) }}" />
                            </div>
                        </div>
                    </div>
                </div>

                <div role="tabpanel" class="tab-pane fade" id="typeseotab3">
                    <div class="type_of_seo_boxes2">
                        <div class="col-sm-7">
                            <div class="type_of_seo_box2">
                                <h3>{{ $content_66->name }}</h3>
                                <p>
                                    <?= html_entity_decode($content_66->details) ?>
                                </p>
                                <!-- <a href="javascript:;">Read More  >></a> -->
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="type_of_seo_box2">
                                <img src="{{ asset($content_66->img) }}" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="seo_services_slider_sec">
    <div class="container">
        <div class="row">
            <div class="col-sm-10">
                <h2 class="title cn clr_wht">{{ $content_67->name }}</h2>
                <p class="para mt_20 cn clr_wht"> <?= html_entity_decode($content_67->details) ?> </p>
            </div>

            <div class="col-sm-10">
                <div class="seo_services_slider_boxes seo_services_slider">
                    <div class="seo_services_slider_box">
                        <div class="seo_services_slider_box_icon">
                            <img src="{{ asset($content_68->img) }}" alt="" />
                        </div>
                        <h3>{{ $content_68->name }}</h3>
                        <p><?= html_entity_decode($content_68->details) ?></p>
                    </div>

                    <div class="seo_services_slider_box">
                        <div class="seo_services_slider_box_icon">
                            <img src="{{ asset($content_69->img) }}" alt="" />
                        </div>
                        <h3>{{ $content_69->name }}</h3>
                        <p><?= html_entity_decode($content_69->details) ?></p>
                    </div>

                    <div class="seo_services_slider_box">
                        <div class="seo_services_slider_box_icon">
                            <img src="{{ asset($content_70->img) }}" alt="" />
                        </div>
                        <h3>{{ $content_70->name }}</h3>
                        <p><?= html_entity_decode($content_70->details) ?></p>
                    </div>

                    <div class="seo_services_slider_box">
                        <div class="seo_services_slider_box_icon">
                            <img src="{{ asset($content_71->img) }}" alt="" />
                        </div>
                        <h3>{{ $content_71->name }}</h3>
                        <p><?= html_entity_decode($content_71->details) ?></p>
                    </div>

                    <div class="seo_services_slider_box">
                        <div class="seo_services_slider_box_icon">
                            <img src="{{ asset($content_72->img) }}" alt="" />
                        </div>
                        <h3>{{ $content_72->name }}</h3>
                        <p><?= html_entity_decode($content_72->details) ?></p>
                    </div>

                    <div class="seo_services_slider_box">
                        <div class="seo_services_slider_box_icon">
                            <img src="{{ asset($content_73->img) }}" alt="" />
                        </div>
                        <h3>{{ $content_73->name }}</h3>
                        <p>T<?= html_entity_decode($content_73->details) ?></p>
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
            <div class="col-sm-12">
                <h2 class="title cn clr_blk_p">{{ $content_74->name }}</h2>
                <p class="para mt_20 cn clr_blk_p"><?= html_entity_decode($content_74->details) ?></p>
            </div>
            <div class="col-sm-12 p0 mt_50">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="inrprtab2">
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
