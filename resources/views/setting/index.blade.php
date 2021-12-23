@extends('layouts.main') @section('content')
<div class="main-content-wrap sidenav-open d-flex flex-column">
    <div class="main-content">
        <div class="separator-breadcrumb border-top"></div>
        <main>
            <div class="container-fluid site-width">
                <div class="row">
                    <div class="col-12 align-self-center">
                        <div class="sub-header py-3 align-self-center d-sm-flex w-100 rounded">
                            <div class="w-sm-100 mr-auto pl-2"><span class="h4 my-auto">Setting Managment</span></div>
                            <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active"><a href="{{route('setting_index')}}">Setting</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block"><button type="button" class="close" data-dismiss="alert">×</button><strong>{{ $message }}</strong></div>
                @endif
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br />
                    <br />
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="container animated bounce">
                    <form action="{{ route('setting_update') }}" method="POST" enctype="multipart/form-data" id="form1" runat="server">
                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}" />
                        <input type="hidden" value="{{ csrf_token() }}" name="_token" />
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="control-label col-md-2" for="con1"> Company </label>
                                    <div class="col-md-9">
                                        <input type="text" name="company" value="{{ $setting['company'] }}" id="con1" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2" for="con1"> Facebook </label>
                                    <div class="col-md-9">
                                        <input type="text" name="facebook" value="{{ $setting['facebook'] }}" id="con1" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2" for="con1"> Twitter </label>
                                    <div class="col-md-9">
                                        <input type="text" name="twitter" value="{{ $setting['twitter'] }}" id="con1" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2" for="con1"> Instagram </label>
                                    <div class="col-md-9">
                                        <input type="text" name="instagram" value="{{ $setting['instagram'] }}" id="con1" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2" for="con1"> Linkedin </label>
                                    <div class="col-md-9">
                                        <input type="text" name="linkedin" value="{{ $setting['linkedin'] }}" id="con1" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2" for="con1"> Trustpilot </label>
                                    <div class="col-md-9">
                                        <input type="text" name="trustpilot" value="{{ $setting['trustpilot'] }}" id="con1" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2" for="con1"> Reviews </label>
                                    <div class="col-md-9">
                                        <input type="text" name="reviews" value="{{ $setting['reviews'] }}" id="con1" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2" for="con1"> Bark </label>
                                    <div class="col-md-9">
                                        <input type="text" name="bark" value="{{ $setting['bark'] }}" id="con1" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2" for="con1"> Phone </label>
                                    <div class="col-md-9">
                                        <input type="text" name="phone" value="{{ $setting['phone'] }}" id="con1" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2" for="con1"> Email </label>
                                    <div class="col-md-9">
                                        <input type="text" name="email" value="{{ $setting['email'] }}" id="con1" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2" for="con1"> Copyright </label>
                                    <div class="col-md-9">
                                        <input type="text" name="copyright" value="{{ $setting['copyright'] }}" id="con1" class="form-control" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block"><button type="button" class="close" data-dismiss="alert">×</button><strong>{{ $message }}</strong></div>
                @endif
            </div>
        </main>
    </div>
</div>
<br />
<br />
@endsection @section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
<!-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css'> -->
<style>
   .container {
    margin-left: auto;
    margin-right: auto;
    margin-top: 30px;
}
    #form1 {
        width: auto;
    }
    .alert {
        text-align: center;
    }
    #editImg {
        max-height: 256px;
        height: auto;
        width: auto;
        display: block;
        margin-left: auto;
        margin-right: auto;
        padding: 5px;
    }
    #img_container {
        border-radius: 5px;
        margin-top: 20px;
        width: auto;
    }
    .input-group {
        margin-left: calc(calc(100vw - 100%) / 2);
        margin-top: 40px;
        width: 320px;
    }
    .imgInp {
        width: 150px;
        margin-top: 10px;
        padding: 10px;
        background-color: #d3d3d3;
    }
    .loading {
        animation: blinkingText ease 2.5s infinite;
    }
    @keyframes blinkingText {
        0% {
            color: #000;
        }
        50% {
            color: #transparent;
        }
        99% {
            color: transparent;
        }
        100% {
            color: #000;
        }
    }
    .custom-file-label {
        cursor: pointer;
    }
    .app-footer {
        position: relative;
    }
    .modal-title {
        color: #fff;
    }
    .sub-header {
        background-color: #eee;
        padding: 0 5px;
    }
    .breadcrumb-item a {
        color: #000;
        padding: 0 5px;
    }
    .form-delete {
        margin: 0;
    }
</style>
@endsection @section('js')
<script>
    // Code By Webdevtrick ( https://webdevtrick.com )
    $("#img").change(function (event) {
        RecurFadeIn();
        readURL(this);
    });
    $("#img").on("click", function (event) {
        RecurFadeIn();
    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            var filename = $("#img").val();
            filename = filename.substring(filename.lastIndexOf("\\") + 1);
            reader.onload = function (e) {
                debugger;
                $("#editImg").attr("src", e.target.result);
                $("#editImg").hide();
                $("#editImg").fadeIn(500);
                $(".custom-file-label").text(filename);
            };
            reader.readAsDataURL(input.files[0]);
        }
        $(".alert").removeClass("loading").hide();
    }
    function RecurFadeIn() {
        console.log("ran");
        FadeInAlert("Wait for it...");
    }
    function FadeInAlert(text) {
        $(".alert").show();
        $(".alert").text(text).addClass("loading");
    }
</script>
@endsection
