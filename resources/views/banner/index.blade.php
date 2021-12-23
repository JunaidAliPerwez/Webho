@extends('layouts.main') @section('content')

<!-- =============== Left side End ================-->
<div class="main-content-wrap sidenav-open d-flex flex-column">
    <!-- ============ Body content start ============= -->
    <div class="main-content">
        {{--
        <div class="breadcrumb">
            <h1 class="mr-2">{{Auth::user()->name}}</h1>
            <ul>
                <li><a href="javascript:void(0)"> Banner Listing Dashboard</a></li>
            </ul>
        </div>
            --}}
        <div class="separator-breadcrumb border-top"></div>
        <!-- banner listing Start   -->
        <main>
            <div class="container-fluid site-width">
                <!-- START: Breadcrumbs-->
                <div class="row">
                    <div class="col-12 align-self-center">
                        <div class="sub-header py-3 align-self-center d-sm-flex w-100 rounded">
                            <div class="w-sm-100 mr-auto pl-2"><span class="h4 my-auto">Banner Listing</span></div>
                            <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active"><a href="{{route('banner_index')}}">Banner</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- END: Breadcrumbs-->
                <!-- START: Card Data-->
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <!-- <h2>Laravel 8 CRUD Example from scratch - ItSolutionStuff.com</h2> -->
                        </div>
                        <div class="pull-right text-right p-2">
                {{--
                            <a class="btn btn-success" href="" data-toggle="modal" data-target="#AddModal" style="background: #28a745; border-color: #28a745;"> Create New Banner</a>
                --}}
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block"><button type="button" class="close" data-dismiss="alert">×</button><strong>{{ $message }}</strong></div>
                @endif
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Post By</th>
                        <th>Post Date</th>
                        <th width="280px">Action</th>
                    </tr>
                    @foreach ($banners as $banner)
                    <tr>
                        <td>{{ $banner->id }}</td>
                        <td>{{ $banner->name }}</td>
                        <td>{{ $banner->post_by }}</td>
                        <td>{{date("d M y" ,strtotime($banner->created_at))}}</td>
                        <td>
                            <form action="{{ route('banner_destroy',$banner->id) }}" method="DELETE" class="form-delete">
                                <a class="btn btn-info showModalBtn" href="#" data-toggle="modal" data-showid="{!! $banner->id !!}">Show</a>
                                <a class="btn btn-primary editModalBtn" href="#" data-toggle="modal" data-id="{!! $banner->id !!}">Edit</a>
                                {{--
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger delete_button" onclick="return confirm('Are you sure you want to delete this banner?');">Delete</button>
                                --}}
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
                @if($banners->isEmpty())
                <div class="col-md-12">
                    <div class="alert alert-warning" style="margin: 10% 0; text-align: center;">
                        <strong>No Records Found</strong>
                    </div>
                </div>
                @endif
                <div class="row mt-3">
                    <div class="col-lg-6 offset-lg-6">
                     {!! $banners->links('pagination::bootstrap-4') !!}
                    </div>
                </div>
                <!-- END: Card DATA-->
            </div>
        </main>
        <!-- banner listing end   -->
        <!-- end of row-->
        <!-- end of main-content -->
    </div>
    <!-- Footer Start -->
    {{--
    <div class="flex-grow-1"></div>
    <div class="app-footer">
        <div class="footer-bottom border-top pt-3 d-flex flex-column flex-sm-row align-items-center">
            <span class="flex-grow-1"></span>
            <div class="d-flex align-items-center">
                <img class="logo" src="{{asset($logo)}}" alt="" />
                <div>
                    <p class="m-0">
                        Copyrights © {{date('Y')}}
                        <?=$config['COMPANY']?>
                    </p>
                    <p class="m-0">All rights reserved</p>
                </div>
            </div>
        </div>
    </div>
    --}}
    <!-- fotter end -->
</div>
<br>
<br>
@endsection
<!-- Add Modal start -->
<div class="modal fade" id="AddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background: #218838; color: #fff;">
                <h5 class="modal-title" id="exampleModalLongTitle">Add Banner</h5>
                <button type="button" class="close" style="color: #fff;" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="document-content">
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
                    <script type="text/javascript">
                        $("#AddModal").modal("show");
                    </script>
                    @endif
                    <form action="{{ route('banner_store') }}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}" />
                        <input type="hidden" value="{{ csrf_token() }}" name="_token" />
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Title</strong>
                                    <input type="text" id="name-text" name="name" value="{{ old('name') }}" class="form-control mt-2 mb-2" placeholder="Name" 
                                    />
                                    {{--
                                    <strong>Slug</strong>
                                    <input type="text" name="slug" value="{{ old('slug') }}" class="form-control mt-2 mb-2" placeholder="Slug" 
                                    id="slug-text"/>
                                    --}}
                                    <strong>Details:</strong>
                                    <textarea name="details" class="form-control mt-2 mb-2" id="details" placeholder="Details">{{ old('details') }}</textarea>
                                    <br />
                                    <strong>Select Image to upload</strong>
                                    <input type="file" name="img" value="{{ old('img') }}" id="img" class="form-control mt-2 mb-2" />
                                    <br />
                                     <strong>Post By</strong>
                                    <input type="text" name="post_by" value="{{ old('post_by') }}" class="form-control mt-2 mb-2" placeholder="Post By" 
                                    id="slug-text"/>
                                    <strong>Post Date</strong>
                                    <input type="date" name="created_at" value="{{ old('created_at') }}" class="form-control mt-2 mb-2" placeholder="Date" 
                                    id="slug-text"/>
                                    <!-- <strong>Select banner to upload</strong>
                                    <br /> -->
                                    <!-- <input type="file" name="file" value="{{ old('file') }}" id="file" class="form-control mt-2 mb-2" /> -->
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn" style="background: #218838; color: #fff;">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Add Modal end -->
<!-- Show Modal start -->
<div class="modal fade" id="showModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitleshow" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background: var(--info); color: #fff;">
                <h5 class="modal-title" id="exampleModalLongTitleshow">Show banner</h5>
                <button type="button" class="close" style="color: #fff;" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="document-content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Title:</strong>
                                <input type="text" id="showName" readonly name="name" value="" class="form-control mt-2" placeholder="Name" required />
                            </div>

                            {{--
                            <div class="form-group">
                                <strong>Slug:</strong>
                                <input type="text" id="showSlug" readonly name="slug" value="" class="form-control mt-2" placeholder="Slug" required />
                            </div>
                            --}}
                            <div class="form-group">
                                <strong>Details:</strong>
                                <textarea id="showDetails"  readonly name="details" class="form-control mt-2 mb-2" disabled placeholder="Details"></textarea>
                            </div>
                            <div class="form-group">
                                <strong>Image:</strong>
                                <br />
                                <img style="width:150px;height:150px" src="{{asset('images/no-img-avalible.png')}}" id="showImg" alt="banner" />
                            </div>
                            <div class="form-group">
                                <strong>Post By:</strong>
                                <input type="text" id="showPost_by" readonly name="post_by" value="" class="form-control mt-2" placeholder="Post By" required />
                            </div>
                            <div class="form-group">
                                <strong>Post Date:</strong>
                                <input type="text" id="showCreated_at" readonly name="created_at" value="" class="form-control mt-2" placeholder="Post Date" required />
                            </div>
                            <!-- <div class="form-group">
                                <strong>banner</strong>
                                <br />
                                <banner width="320" height="240" controls id="showFile"></banner>
                            </div> -->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn" style="background: var(--info); color: #fff;" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Edit Modal start -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background: #1e3d73; color: #fff;">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit Banner</h5>
                <button type="button" class="close" style="color: #fff;" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="document-content">
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
                    <form action="{{ route('banner_update') }}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}" />
                        <input type="hidden" name="id" id="editId" value="" />
                        <input type="hidden" value="{{ csrf_token() }}" name="_token" />
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Title:</strong>
                                <input type="text" id="editName" name="name" value="" class="form-control mt-2" placeholder="Name" required />
                            </div>
                            {{--
                            <div class="form-group">
                                <strong>Slug:</strong>
                                <input type="text" id="editSlug" name="slug" value="" class="form-control mt-2" placeholder="Slug" required />
                            </div>
                            --}}
                            <div class="form-group">
                                <strong>Details:</strong>
                                <textarea id="editDetails"  name="details" class="form-control mt-2 mb-2" placeholder="Details"></textarea>
                            </div>
                            <div class="form-group">
                                <strong>Image:</strong>
                                <br />
                                <img  style="width:150px;height:150px" src="{{asset('images/no-img-avalible.png')}}" id="editImg" alt="banner" />
                                <input type="file" name="img" value="{{ old('img') }}" id="img" class="form-control mt-2 mb-2" />
                                <br />
                            </div>
                            <div class="form-group">
                                <strong>Post By:</strong>
                                <input type="text" id="editPost_by" name="post_by" value="" class="form-control mt-2" placeholder="Post By" required />
                            </div>
                            <div class="form-group">
                                <strong>Post Date:</strong>
                                <input type="date" id="editCreated_at" name="created_at" value="" class="form-control mt-2" placeholder="Post Date" required />
                            </div>
                            <!-- <div class="form-group">
                                <strong>banner</strong>
                                <br />
                                <banner width="320" height="240" controls id="showFile"></banner>
                            </div> -->
                        </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Edit Modal start -->
@section('css')
<style>
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
.pagination .page-item.active .page-link {
    z-index: -1;
}
</style>
@endsection @section('js')
<script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>


<script type="text/javascript">
    $(document).ready(function () {
        $(".showModalBtn").click(function () {
            var id = $(this).data("showid");
            var action = '{{route("banner_show")}}/' + id;
            var url = '{{route("banner_show")}}/' + id;
            $.ajax({
                type: "get",
                url: url,
                data: { id: id },
                success: function (data) {
                    $("#showid").val(data.id);
                    // document.getElementById("showType").value = data.type;
                    $("#showName").attr("value", data.name);
                    $("#showSlug").attr("value", data.slug);
                    CKEDITOR.instances.showDetails.setData(data.details);
                    $("#showImg").attr("src", '{{asset("")}}' + data.img);
                    $("#showPost_by").val(data.post_by);
                    $("#showCreated_at").val(data.created_at);
                    // var banner = document.getElementById("showFile");
                    // var source = document.createElement("source");
                    // source.setAttribute("src", '{{asset("/")}}' + data.file);
                    // banner.appendChild(source);
                    // banner.play();
                    $("#showid").attr("action", '{{route("banner_show")}}/' + id);
                    $("#showModal").modal("show");
                },
            });
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $(".editModalBtn").click(function () {
            var id = $(this).data("id");
            var action = '{{route("banner_edit")}}/' + id;
            var url = '{{route("banner_edit")}}/' + id;
            $.ajax({
                type: "get",
                url: url,
                data: { id: id },
                success: function (data) {
                    $("#editId").val(data.id);
                    // document.getElementById("editType").value = data.type;
                    $("#editName").attr("value", data.name);
                    $("#editSlug").attr("value", data.slug);
                    CKEDITOR.instances.editDetails.setData(data.details);
                    // $("#editDetails").val(data.details);
                    $("#editImg").attr("src", '{{asset("")}}' + data.img);
                    $("#editPost_by").val(data.post_by);
                    $("#editCreated_at").val(data.created_at);
                    // $("#editImg").attr("src", '{{asset("/")}}' + data.img);
                    // var banner = document.getElementById("editFile");
                    // var source = document.createElement("source");
                    // source.setAttribute("src", '{{asset("/")}}' + data.file);
                    // banner.appendChild(source);
                    // banner.play();
                    // $('#editid').attr('action', '{{route("banner_update")}}/'+id);
                    $("#editModal").modal("show");
                },
            });
        });
    });
// slug
$(document).ready(function () {    
$("#name-text").keyup(function() {
  var Text = $(this).val();
  Text = Text.toLowerCase();
  Text = Text.replace(/[^a-zA-Z0-9]+/g,'-');
  $("#slug-text").val(Text);        
});
$("#editName").keyup(function() {
  var Text = $(this).val();
  Text = Text.toLowerCase();
  Text = Text.replace(/[^a-zA-Z0-9]+/g,'-');
  $("#editSlug").val(Text);        
});
});
</script>
<script>
 $(document).ready(function () {     
    var details = CKEDITOR.replace("details");
    details.on("change", function (evt) {
        $("#details").text(evt.editor.getData());
    });
    var showDetails = CKEDITOR.replace("showDetails");
    showDetails.on("change", function (evt) {
        // config.readOnly = true;
        // config.removePlugins = 'elementspath';
        // config.resize_enabled = false;
        // config.height = 30;
        $("#showDetails").text(evt.editor.getData());
      
    });
    var editDetails = CKEDITOR.replace("editDetails");
    editDetails.on("change", function (evt) {
        $("#editDetails").text(evt.editor.getData());
    });
});    
</script>
@endsection