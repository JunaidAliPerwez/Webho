<?php 
   if(!isset($menu)){
       $menu="home";
   }
use App\Models\logo;
use App\Models\setting;
$logo = logo::find(1);   
$setting = setting::find(1);   
   ?>
<header>
    <!-- Begin: Bottom Row -->
    <div class="top_bar">
        <div class="container">
            <ul class="socialicons">
                <li class="header_cta"><a href="javascript:;" onclick="setButtonURL();">For Quick Inquiries</a></li>
                <li class="header_cta"><a href="tel:{{str_replace("-","",$setting["phone"])}}"><i class="fa fa-phone"></i>{{ $setting['phone'] }} </a></li>
                {{-- <li class="header_cta">
                    <a href="cdn-cgi/l/email-protection.html#fe8d9f929b8dbe9a9799978a939b9a979f9a9b8d9799908dd09d9193">
                        <i class="fa fa-envelope"></i><span class="__cf_email__" data-cfemail="90e3f1fcf5e3d0f4f9f7f9e4fdf5f4f9f1f4f5e3f9f7fee3bef3fffd">[email&#160;protected]</span>
                    </a>
                </li> --}}
                <ul class="soc-icons">
                    <li class="first">
                        <a href="{{ $setting['facebook'] }}" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="{{ $setting['twitter'] }}" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="{{ $setting['instagram'] }}" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </li>
                    <li class="last">
                        <a href="{{ $setting['linkedin'] }}" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </li>
                </ul>
                <li class="header_cta">
                    <a href="{{route('login')}}" target="_blank"><i class="fa fa-sign-in" aria-hidden="true"></i>My Account</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="header_main_sec">
        <div class="container-fluid">
            <div class="row">
                <div class="header_navbar">
                    <div class="top-fix11">
                        <div class="col-sm-2">
                            <div class="logo">
                                <a href="{{route('welcome')}}"> <img src="{{asset($logo->img)}}" class="" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-sm-10">
                            <nav class="navbar navbar_custom">
                                <div class="">
                                    <div class="navbar-header">
                                        <button class="navbar-toggle"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
                                    </div>
                                    <div class="collapse navbar-collapse">
                                        <ul class="nav navbar-nav nav-make-active">
                                            <li><a href="{{route('webDesign')}}">Web Design</a></li>
                                            <li><a href="{{route('webAppDev')}}">Web Application Development</a></li>
                                            <li class="dropdown">
                                                <a class="dropdown-toggle" href="javascript:;">Animation <span class="caret"></span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="{{route('videoAnimation')}}" class="a-elem">Video Animation</a></li>
                                                    <li><a href="{{route('logAnimation')}}" class="a-elem">Logo Animation</a></li>
                                                </ul>
                                            </li>

                                            <li class="dropdown">
                                                <a class="dropdown-toggle" href="javascript:;">Digital Marketing <span class="caret"></span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="{{route('seoServices')}}">SEO</a></li>
                                                    <li><a href="{{route('smmServices')}}">SMM</a></li>
                                                    <li><a href="{{route('ormServices')}}">ORM</a></li>
                                                </ul>
                                            </li>

                                            <li><a href="{{route('packages')}}">Our Packages </a></li>

                                            <li><a href="{{route('portfolio')}}">Our Portfolio </a></li>
                                        </ul>
                                        <div class="button header_btn">
                                            <a href="javascript:;" class="popup_btn btn_yellow" onclick="order_now_value(this)" name="for $59">Order Now</a>
                                            <a href="javascript:;" class="chat btn_blue" target="_self" onclick="setButtonURL();"> Live Chat</a>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="head_top mobile-top">
        <div class="navbar navbar-defult">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar11">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('web/images/logo.png')}}" class="logo" alt="" /></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar11">
                    <ul class="nav navbar-nav">
                        <li><a href="{{route('webDesign')}}">Web Design</a></li>
                        <li><a href="{{route('webAppDev')}}">Logo Design</a></li>

                        <li class="dropdown">
                            <a class="dropdown-toggle" href="javascript:;">Animation <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('videoAnimation')}}">Video Animation</a></li>
                                <li><a href="{{route('logAnimation')}}">Logo Animation</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="javascript:;">Digital Marketing <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('seoServices')}}">SEO</a></li>
                                <li><a href="{{route('smmServices')}}">SMM</a></li>
                                <li><a href="{{route('ormServices')}}">ORM</a></li>
                            </ul>
                        </li>
                        {{--
                        <li><a href="content-writing.html">Content Writing</a></li>
                        --}}

                        <li>
                            <a href="{{route('packages')}}"><i class="fa fa-check"></i>Our Packages </a>
                        </li>
                        {{--
                        <li>
                            <a href="combo-package.html"><i class="fa fa-check"></i>Combo Package </a>
                        </li>
                        --}}
                        <li>
                            <a href="{{route('portfolio')}}"><i class="fa fa-check"></i>Our Portfolio </a>
                        </li>

                        <!-- <li><a href="contact.php">Contact Us</a></li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Bottom Row -->
</header>
