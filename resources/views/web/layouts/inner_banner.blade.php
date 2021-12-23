<div class="banner_main banner_inner banner_webdisgn">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="banner_box">
                    <?php echo html_entity_decode($inner_banner['details']) ?>
                    <div class="button">
                        <a href="javascript:;" class="popup_btn wht_btn" onclick="order_now_value(this)"
                            name="for $59">Order Now</a>
                        <a href="javascript:;" class="chat tr_btn_blue" target="_self" onclick="setButtonURL();"> Live
                            Chat</a>
                    </div>
                    <h4 class="clr_wht">{{$inner_banner->name}}</h4>
                    <div class="banner_trust_img">
                        <ul>
                            <li><img src="{{asset('web/images/trust-icon1.png')}}"></li>

                            <li><img src="{{asset('web/images/trust-icon3.png')}}"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="banner_box_img">
                    <img class="banner_img" src="{{asset($inner_banner->img)}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>   

