<link rel="stylesheet" href="{{asset('web/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('web/css/owl.carousel.css')}}">
<link rel="stylesheet" href="{{asset('web/css/animate.css')}}">
<link rel="stylesheet" href="{{asset('web/css/slick.css')}}">
<link rel="stylesheet" href="{{asset('web/css/slick-theme.css')}}">
<link rel="stylesheet" href="{{asset('web/css/jquery.fancybox.css')}}">
<link rel="stylesheet" href="{{asset('web/css/style.css')}}">
<link rel="stylesheet" href="{{asset('web/css/responsive.css')}}">
<link rel="stylesheet" href="{{asset('web/css/font-awesome.min.css')}}">


{{-- <link rel="stylesheet" href="{{asset('web/font-awesome/css/font-awesome.css')}}"> --}}
{{-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> --}}


<style>


  .overlay-bg {
    background: rgba(0, 0, 0, 0.8);
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    width: 100%;
    height: 100%;
    z-index: 10;
    display: none;
}
.popupform-main label.control.control--checkbox {
     text-align: left;
    font-weight: 500;
}
.popupform-main label.control.control--checkbox label {
    font-weight: 500;
}

.popupform-main label.control.control--checkbox a {
    color: #000;
}
.control--checkbox {
    color: #000;
}

.pop-form .close-btn {
    width: 45px;
    height: 45px;
    display: block;
    position: absolute;
    top: 0;
    right: 140px;
    font-size: 38px;
    font-weight: 500;
    color: #000;
    padding-top: 3px;
    background-color: transparent;
    text-align: center;
    border-radius: 50px;
    text-decoration: none;
    align-items: center;
    display: grid;
    border: 0;
    /* border: 5px solid #fff; */
}
.p0{
        padding: 0;
    }
div#pop-form {
   margin: 0 auto;
   display: table;
   text-align: left;
   padding-top: 0;
   width: 65%;
}
.textarea_auto textarea {
    background-color: rgb(255, 255, 255);
    box-shadow: 5.142px 6.128px 54px 0px rgba(162, 162, 162, 0.15);
    border-radius: 32px;
    resize: none;
    padding-top: 15px;
    height: 60px;
    border: 0;
}

.pop-form form .control-group input:focus {
    outline: 0;
}

.pop-form form .control-group textarea:focus {
    outline: 0;
}

div#pop-form form {
    width: 75%;
    display: table;
}
.pop-form .submit-btn {
    font-size: 18px;
    width: 100%;
    padding: 10px 20px;
    color: #fff;
    cursor: pointer;
    border-radius: 5px;
    position: relative;
    border: none;
    margin-top: 15px;
    margin: 10px 0 0 0px !important;
    font-weight: 300;
    text-transform: uppercase;
    display: table;
    text-align: left;
    background: #235acf;
    width: auto;
    border-radius: 0 32px 32px 32px;
}
.popupform-main.active {
    display: block;
}
.popupform-main {
    position: fixed;
    background-color: rgba(0, 0, 0, 0.62);
    top: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    width: 100%;
    height: 100%;
    z-index: 9999;
    display: none;
}
.pop-form {
    position: absolute;
    width: 1040px;
    height: 560px;
    top: 0px;
    left: 0;
    bottom: 0;
    right: 0;
    margin: auto;
    background: url(popup-bg2.png);
    padding: 0px 0 0px 0;
    z-index: 99;
    -webkit-transition: 0.5s;
    -moz-transition: 0.5s;
    -o-transition: 0.5s;
    transition: 0.5s;
    background-size: 92%;
    background-repeat: no-repeat;
    display: flex;
    align-items: center;
    justify-content: flex-start;
}

.popupform-main .main-pop .col-md-12 {
    padding: 0;
}

.popupform-main h3 {
    font-size: 26px;
    margin: 31px 0 0 0;
    float: none;
    color: #ffffff;
    font-weight: 500;
    text-align: center;
    padding: 0 !important;
}

.popupform-main h2 {
    font-size: 40px;
    margin: 10px 0 0 0;
    color: #235acf;
    font-weight: 700;
    text-align: LEFT;
}

.popupform-main h4 {
    font-size: 26px;
    margin: 8px 0 0 0;
    color: #ffffff;
    font-weight: 700;
}

.fspx-23 {
    font-size: 23px;
}
.fw-exbold {
    font-weight: 800 !important;
}

.ls-xsmall {
    letter-spacing: -2px;
}
.fc-red {
    color: #fb2224;
}
.tt-uppercase {
    text-transform: uppercase !important;
}
.popupform-main h6 {
    letter-spacing: 0;
    font-size: 45px;
    background: #4274fa;
    color: #fff;
    border-radius: 10px;
    padding: 10px 15px 5px 15px;
    text-align: left;
    position: relative;
    right: 0px;
    margin: 0px;
    float: right;
}
.fspx-20 {
    font-size: 20px;
    display: block;
}
.fspx-23 {
    font-size: 23px;
    margin-bottom: 10px;
}
.fw-normal {
    font-weight: 400 !important;
}
.popupform-main .main-pop {
    padding: 15px 10px 0 0;
}
.pop-form .no-thanks {
    text-decoration: underline;
    color: #666666;
}
.pop-form form .control-group {
    margin-bottom: 10px;
}
form .control-group {
    margin-bottom: 24px;
    position: relative;
}
.pop-form form .control-group input[type=text],.pop-form form .control-group input[type=text], .pop-form form .control-group input[type=number], .pop-form form .control-group input[type=email], .pop-form form .control-group select, .pop-form form .control-group textarea {
    background-color: #fff;
    text-align: left;
}
.popupform-main form input[type=text], .popupform-main form input[type=number], .popupform-main form input[type=email] {
    padding-left: 10px;
    min-height: auto;
}
.popupform-main form select{
    color: #333333;
    padding: 10px;
    height: auto;
    width: 100%;
     background: rgb(255, 255, 255);
    box-shadow: 5.142px 6.128px 54px 0px rgba(162, 162, 162, 0.15);
    border: 0;
    border-radius: 32px;
    margin-bottom: 6px;
}

.popupform-main form input[type=text], .popupform-main form input[type=number], .popupform-main form input[type=email] {
    color: #333333;
    padding: 10px;
    height: auto;
    width: 100%;
    -webkit-appearance: none;
    border-radius: 4px;
    background: rgb(255, 255, 255);
    box-shadow: 5.142px 6.128px 54px 0px rgba(162, 162, 162, 0.15);
    border: 0;
    border-radius: 32px;
    margin-bottom: 6px;
}

form .numberarea {
    width: auto;
    position: relative;
}
.pop-form .submit-btn {
    font-size: 18px;
    width: 100%;
    padding: 10px 20px;
    color: #fff;
    cursor: pointer;
    border-radius: 5px;
    position: relative;
    border: none;
    margin-top: 15px;
    margin: 10px 0 0 0px !important;
    font-weight: 300;
    text-transform: uppercase;
    display: table;
    text-align: left;
    background: #235acf;
    width: auto;
    border-radius: 0 32px 32px 32px;
}
.pop-form .no-thanks {
    text-decoration: underline;
    color: #666666;
}
.popupform-main h6:before {
    position: absolute;
    content: "";
    left: -35px;
    top: 0px;
    width: 0;
    height: 0;
    border-top: 0px solid transparent;
    border-right: 45px solid #4274fa;
    border-bottom: 28px solid transparent;
}
.float-left {
    float: left;
}
.lh-medium {
    line-height: 1.2;
}
.lh-medium {
    line-height: 1.2;
}
.ta-left {
    text-align: left;
}
.fw-exbold {
    font-weight: 800 !important;
}
.mtpx-60{
    margin-top: 60px;
}

.show{
    display:contents !important;
}


@media(max-width: 1550px){

    div#pop-form form {
        width: 83%;
        display: table;
    }
    .pop-form {
    width: 950px;
    height: 620px;
    display: flex;
        align-items: center;
    }
    div#pop-form {
    width: 55%;
    }
    .pop-form {
    width: 1080px;
    top: 0px;
    height: auto;
    background-position: center;
    }

    .pop-form .close-btn {
    right: 80px;
    top: -5px;
    }
}
@media(max-width: 1180px){
    .popupform-main h2 {
    font-size: 40px;
    }

    div#pop-form form {
        padding-top: 15px;
    }

    .pop-form {
        width: 991px;
        display: flex;
        align-items: center;
    }
    div#pop-form {
    width: 55%;
    padding-top: 20px;
    }

    .popupform-main label.control.control--checkbox {
        font-size: 12px;
    }

    .pop-form .close-btn {
        top: 10px;
    }
}
@media(max-width: 991px){
    .col-sm-5.mobile-col-rm {
    display: none;
    }
    .pop-form {
    position: absolute;
    width: 510px;
    height: 500px;
    top: 0px;
    left: 0;
    bottom: 0;
    right: 0;
    margin: auto;
    /* background-image: url(../images/popup-bg2.png); */
    padding: 0px 0 0px 0;
    z-index: 99;
    -webkit-transition: 0.5s;
    -moz-transition: 0.5s;
    -o-transition: 0.5s;
    transition: 0.5s;
    background: #fff;
    }
    div#pop-form form {
    width: 100%;
    }
    .popupform-main h2 {
    text-align: center;
    }

    .pop-form form .control-group {
    }

    .pop-form .submit-btn {
        text-align: center;
        margin: 0 auto !important;
    }

    .popupform-main label.control.control--checkbox {
        text-align: center;
    }

    div#pop-form {
        width: 100%;
        padding-top: 18px;
    }
    .popupform-main .col-sm-offset-4.col-sm-8 {
    max-width: 100%;
    width: 100%;
    margin: 0;
    }
    .popupform-main h3{
        font-size: 30px !important;
    }
    .popupform-main h6 {
    font-size: 30px;
    }
    #flform input[type="text"], input[type="email"]{
        margin-bottom: 0px;
    }
    .pop-form .close-btn {
    width: 35px;
    height: 30px;
    display: block;
    position: absolute;
    top: 2px;
    right: 0;
    font-size: 18px;
    font-weight: 900;
    color: #080808;
    padding-top: 3px;
    }
}
@media(max-width: 767px){
    .popupform-main h6:before {
    position: absolute;
    content: "";
    left: -20px;
    top: 0px;
    width: 0;
    height: 0;
    border-top: 0px solid transparent;
    border-right: 28px solid #4274fa;
    border-bottom: 28px solid transparent;
    }
    div#pop-form form {
    width: 100%;
    }
    .pop-form {
    position: absolute;
    width: 334px !important;
    /* height: 535px !important; */
    }
    .popupform-main .pop-form h3 {
    font-size: 21px !important;
    margin-top: 4px;
    }
    .pop-form .close-btn {
    /* top: -13px; */
    /* right: -6px; */
    height: 35px;
    }
    .popupform-main h6 {
    letter-spacing: 0;
    font-size: 21px;
    background: #4274fa;
    color: #fff;
    border-radius: 10px;
    padding: 3px 8px 5px 8px;
    text-align: left;
    position: relative;
    right: 0px;
    margin: 0px;
    float: right;
    }
    .pop-form .submit-btn {
    font-size: 18px;
    width: 100%;
    padding: 8px 0px;

    }
    div#pop-form {
    max-width: 100%;
    width: 100%;
    margin: 0;
    text-align: center;
    padding-top: 10px;
    }
    .popupform-main h3 {
    font-size: 26px;
    margin: 31px 0 0 0;
    color: #ffffff;
    font-weight: 500;
    }
    .popupform-main h2 {
    font-size: 30px;
    margin: 10px 0 0 0;
    /* color: #ffffff; */
    font-weight: 700;
    }
    .popupform-main h4 {
    font-size: 24px;
    margin: 8px 0 0 0;
    color: #fff;
    font-weight: 700;
    }

    .chk-st-1 {display: inline-flex;}
}

</style>
@yield('link')
