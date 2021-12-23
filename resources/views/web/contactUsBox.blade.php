<?php 
use App\Models\cms;  
$content_18 = cms::find(18);   
?>
<h4 class="san">{{$content_18->name}}</h4>

<p class="text-center"> <?php echo html_entity_decode($content_18['details']) ?></p>

<form method="POST" action="{{route('inquiry_submit')}}" id="quoteForm">

    <?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>

    <input type="hidden" value="<?= $actual_link ?>" id="url" name="url" />

    @csrf

    <div class="row">
        <div class="col-md-6 col-xs-12 margin-bottom-20 field-mergedright">
            <input type="text" autocomplete="off" class="form-control san-bor" placeholder="Full Name" name="name" required="required" />
        </div>
        <input type="hidden" name="" />
        <div class="col-md-6 col-xs-12 margin-bottom-20 field-mergedleft">
            <input type="email" autocomplete="off" class="form-control san-bor" placeholder="Email" name="email" required="required" />
        </div>
        <div class="col-md-12 col-xs-12 margin-bottom-20 field-mergedright">
            <input type="text" class="form-control san-bor" placeholder="Phone Number" name="phonenumber" required="required" />
        </div>

        <div class="col-md-12 col-xs-12 margin-bottom-20">
            <textarea class="form-control san-bor" placeholder="Talk about your project" name="message" required></textarea>
        </div>
        <div class="col-md-9 col-xs-12 margin-bottom-20 field-mergedleft">
            <div class="clearfix"></div>
            <div class="ch-box">
                <div class="company_profile pull-left">
                    <label class="control control--checkbox">
                        <input type="checkbox" name="checkbox" value="yes" required />
                        I have read & fully understood and agreed to the <a href="{{route('termsCondition')}}">Terms of Use</a> and the <a href="{{route('privacyPolicy')}}">Privacy Policy.</a><br />
                        <input type="checkbox" checked="checked" disabled="disabled" id="test1" / style="width: 15px; height: 15px; margin-top: 6px;">
                        <label for="test1" style="margin-top: 2px;">Please send me a copy of them. </label>
                        <div class="control__indicator"></div>
                    </label>
                </div>
            </div>
        </div>
        <div class="col-sm-3 col-xs-12 margin-bottom-20 field-mergedleft">
            <div class="button">
                <input class="btn_quote btn-validate" type="submit" id="quoteSubmit" name="quote" value="Submit Request" />
            </div>
        </div>
    </div>
</form>

