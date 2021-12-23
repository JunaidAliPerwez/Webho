@extends('layouts.main') @section('content')


<!-- =============== Left side End ================-->
<div class="main-content-wrap sidenav-open d-flex flex-column">
    <!-- ============ Body content start ============= -->
    <div class="main-content">
        {{--
        <div class="breadcrumb">
            <h1 class="mr-2">{{Auth::user()->name}}</h1>
            <ul>
                <li><a href="javascript:void(0)"> Package Listing Dashboard</a></li>
            </ul>
        </div>
        --}}
        <div class="separator-breadcrumb border-top"></div>
        <!-- blog listing Start   -->
        <main>
            <div class="container-fluid site-width">
                <!-- START: Breadcrumbs-->
                <div class="row">
                    <div class="col-12 align-self-center">
                        <div class="sub-header py-3 align-self-center d-sm-flex w-100 rounded">
                            <div class="w-sm-100 mr-auto pl-2"><span class="h4 my-auto">Packagesadasd Listing</span></div>
                            <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active"><a href="{{route('package_index')}}">Package</a></li>
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
                            <a class="btn btn-success" href="" data-toggle="modal" data-target="#AddModal" style="background: #28a745; border-color: #28a745;"> Create New Package</a>
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block"><button type="button" class="close" data-dismiss="alert">×</button><strong>{{ $message }}</strong></div>
                @endif
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th style="text-align: center;">#</th>
                            <th>Title</th>
                            <th>Post By</th>
                            <th>Post Date</th>
                            <th width="280px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($package as $row)

                        <tr>
                            <td style="text-align: center; vertical-align: middle;">{{$row->id}}</td>
                            <td style="vertical-align: middle;">{{ $row->name }}</td>
                            <td style="vertical-align: middle;">{{ $row->post_by }}</td>
                            <td style="vertical-align: middle;">{{date("d-M-y" ,strtotime($row->created_at))}}</td>
                            <td>
                                <form action="{{ route('package_destroy',$row->id) }}" method="DELETE" class="form-delete">
                                    <a
                                        class="btn btn-info showModalBtn"
                                        href="#"
                                        data-toggle="modal"
                                        data-showid="{!! $row->id !!}"
                                        data-slug="{{ $row->slug }}"
                                        data-name="{{ $row->name }}"
                                        data-price="{{ $row->price }}"
                                        data-discountprice="{{ $row->discount_price }}"
                                        data-postby="{{ $row->post_by }}"
                                        data-details="{{ $row->details }}"
                                        data-img="{{ $row->img }}"
                                        data-createdat="{{ $row->created_at }}"
                                    >
                                        Show
                                    </a>
                                    <a
                                        class="btn btn-primary editModalBtn"
                                        href="#"
                                        data-toggle="modal"
                                        data-id="{!! $row->id !!}"
                                        data-slug="{{ $row->slug }}"
                                        data-name="{{ $row->name }}"
                                        data-price="{{ $row->price }}"
                                        data-discountprice="{{ $row->discount_price }}"
                                        data-postby="{{ $row->post_by }}"
                                        data-details="{{ $row->details }}"
                                        data-img="{{ $row->img }}"
                                        data-createdat="{{ $row->created_at }}"
                                    >
                                        Edit
                                    </a>
                                    @method('DELETE')
                                     <button type="submit" class="btn btn-danger delete_button" onclick="return confirm('Are you sure you want to delete this blog?');">Delete</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>

                    @endforeach
                </table>
                @if($package->isEmpty())
                <div class="col-md-12">
                    <div class="alert alert-warning" style="margin: 10% 0; text-align: center;">
                        <strong>No Records Found</strong>
                    </div>
                </div>
                @endif
                <div class="row mt-3">
                    <div class="col-lg-6 offset-lg-6">
                     {!! $package->links('pagination::bootstrap-4') !!}
                    </div>
                </div>
                <!-- END: Card DATA-->
            </div>
        </main>
        <!-- blog listing end   -->
        <!-- end of row-->
        <!-- end of main-content -->
    </div>

</div>



<br />
<br />

@endsection

<!-- Add Modal Start -->

<div class="modal fade" id="AddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background: #218838; color: #fff;">
                <h5 class="modal-title" id="exampleModalLongTitle">Add Package</h5>
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

                    {{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script> --}}
                    {{-- <script type="text/javascript">
                        $(document).ready(function () {
                            $("#AddModal").modal("show");
                        });
                    </script> --}}
                    @endif
                    <form action="{{ route('package_store') }}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}" />
                        <input type="hidden" value="{{ csrf_token() }}" name="_token" />
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Title</strong>
                                    <input type="text" id="name-text" name="name" value="{{ old('name') }}" class="form-control mt-2 mb-2" placeholder="Name" />
                                    <strong>Price</strong>
                                    <input type="text" name="price" value="{{ old('price') }}" class="form-control mt-2 mb-2" placeholder="Price" id="price-text" />
                                    <strong>Discount Price</strong>
                                    <input type="text" name="discount_price" value="{{ old('discount_price') }}" class="form-control mt-2 mb-2" placeholder="Discount Price" id="discount-price-text" />

                                    {{-- <strong>Slug</strong> --}}
                                    <input type="hidden" name="slug" value="{{ old('slug') }}" class="form-control mt-2 mb-2" placeholder="Slug" id="slug-text" />

                                    <strong>Details:</strong>
                                    <textarea name="details" class="form-control mt-2 mb-2" id="details" placeholder="Details">{{ old('details') }}</textarea>
                                    <br />
                                    <strong>Select Image to upload</strong>
                                    <input type="file" name="img" value="{{ old('img') }}" id="img" class="form-control mt-2 mb-2" />
                                    <br />
                                    <strong>Post By</strong>
                                    <input type="text" name="post_by" value="{{ old('post_by') }}" class="form-control mt-2 mb-2" placeholder="Post By" id="slug-text" />
                                    <strong>Post Date</strong>
                                    <input type="date" name="created_at" value="{{ old('created_at') }}" class="form-control mt-2 mb-2" placeholder="Date" id="slug-text" />
                                    <!-- <strong>Select blog to upload</strong>
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

<!-- Add Modal End -->




<!-- Show Modal start -->

<div class="modal fade" id="showModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitleshow" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background: var(--info); color: #fff;">
                <h5 class="modal-title" id="exampleModalLongTitleshow">Show Package</h5>
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
                            <div class="form-group">
                                <strong>Price:</strong>
                                <input type="text" id="showPrice" readonly name="price" value="" class="form-control mt-2" placeholder="Price" />
                            </div>
                            <div class="form-group">
                                <strong>Discount Price:</strong>
                                <input type="text" id="showDiscountPrice" readonly name="discount_price" value="" class="form-control mt-2" placeholder="Discount Price" />
                            </div>
                            <div class="form-group">
                                {{-- <strong>Slug:</strong> --}}
                                <input type="hidden" id="showSlug" readonly name="slug" value="" class="form-control mt-2" placeholder="Slug" required />
                            </div>
                            <div class="form-group">
                                <strong>Details:</strong>
                                <textarea id="showDetails" readonly name="details" class="form-control mt-2 mb-2" disabled placeholder="Details"></textarea>
                            </div>
                            <div class="form-group">
                                <strong>Image:</strong>
                                <br />
                                <img style="width:150px;height:150px" src="{{asset('web/images/no-img-avalible.png')}}" width="100%" id="showImg" alt="package" />
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
                                <strong>blog</strong>
                                <br />
                                <blog width="320" height="240" controls id="showFile"></blog>
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

<!-- Show Modal End -->



<!-- Edit Modal Start -->

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background: #1e3d73; color: #fff;">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit Package</h5>
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

                    <form action="{{ route('package_update') }}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}" />
                        <input type="hidden" name="id" id="editId" value="" />
                        <input type="hidden" value="{{ csrf_token() }}" name="_token" />
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Title:</strong>
                                    <input type="text" id="editName" name="name" value="" class="form-control mt-2" placeholder="Name" required />
                                </div>
                                <div class="form-group">
                                    <strong>Price:</strong>
                                    <input type="text" id="editPrice" name="price" value="" class="form-control mt-2" placeholder="Price" required />
                                </div>
                                <div class="form-group">
                                    <strong>Discount Price:</strong>
                                    <input type="text" id="editDiscountPrice" name="discount_price" value="" class="form-control mt-2" placeholder="Discount Price" />
                                </div>
                                <div class="form-group">
                                    {{-- <strong>slug:</strong> --}}
                                    <input type="hidden" id="editSlug" name="slug" value="" class="form-control mt-2" placeholder="Slug" />
                                </div>
                                <div class="form-group">
                                    <strong>Details:</strong>
                                    <textarea id="editDetails" name="details" class="form-control mt-2 mb-2" placeholder="Details"></textarea>
                                </div>
                                <div class="form-group">
                                    <strong>Image:</strong>
                                    <br />
                                    <img style="width:150px;height:150px" src="{{asset('web/images/no-img-avalible.png')}}" width="100%" id="editImg" alt="package" />
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
                                                    <strong>blog</strong>
                                                    <br />
                                                    <blog width="320" height="240" controls id="showFile"></blog>
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

<!-- Edit Modal END -->


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
<script src="{{asset('admin/vendors/ckeditor/ckeditor/ckeditor.js')}}" type="text/javascript"></script>


<script type="text/javascript">

    $(document).ready(function () {
        $(".showModalBtn").click(function () {

            var id = $(this).data("showid");

            var name = $(this).data("name");
            var slug = $(this).data("slug");
            var price = $(this).data("price");
            var discountprice = $(this).data("discountprice");
            var postby = $(this).data("postby");
            var details = $(this).data("details");
            var img = $(this).data("img");
            var createdat = moment($(this).data("createdat")).format('DD/MM/YYYY');


            var action = '{{route("package_show")}}/' + id;
            var url = '{{route("package_show")}}/' + id;


            $("#showid").val(id);

            $("#showName").attr("value", name);
            $("#showSlug").attr("value", slug);
            CKEDITOR.instances.showDetails.setData(details);
            $("#showImg").attr("src", '{{asset("")}}' + img);
            $("#showPost_by").val(postby);
            $("#showCreated_at").val(createdat);

            $("#showPrice").val(price);
            $("#showDiscountPrice").val(discountprice == 0 ? '' : discountprice);

            $("#showid").attr("action", '{{route("package_show")}}/' + id);

            $("#showModal").modal("show");

            /* $.ajax({
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

                    $("#showPrice").val(data.price);
                    $("#showDiscountPrice").val(data.discount_price);
                    // var blog = document.getElementById("showFile");
                    // var source = document.createElement("source");
                    // source.setAttribute("src", '{{asset("/")}}' + data.file);
                    // blog.appendChild(source);
                    // blog.play();
                    $("#showid").attr("action", '{{route("package_show")}}/' + id);
                    $("#showModal").modal("show");
                },
            }); */

        });
    });

</script>


<script type="text/javascript">

$(document).ready(function () {

    $(".editModalBtn").click(function () {

        var id = $(this).data("id");

        var name = $(this).data("name");
        var slug = $(this).data("slug");
        var price = $(this).data("price");
        var discountprice = $(this).data("discountprice");
        var postby = $(this).data("postby");
        var details = $(this).data("details");
        var img = $(this).data("img");
        var createdat = moment($(this).data("createdat")).format('YYYY-MM-DD');

        var action = '{{route("package_edit")}}/' + id;
        var url = '{{route("package_edit")}}/' + id;



        $("#editId").val(id);
        $("#editName").attr("value", name);
        $("#editSlug").attr("value", slug);
        CKEDITOR.instances.editDetails.setData(details);
        // $("#editDetails").val(data.details);
        $("#editImg").attr("src", '{{asset("")}}' + img);

        $("#editPost_by").val(postby);
        $('#editCreated_at').val(createdat);

        $("#editPrice").val(price);
        $("#editDiscountPrice").val(discountprice == 0 ? '' : discountprice);

        $("#editModal").modal("show");



        /* $.ajax({
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

                console.log(data.created_at);

                $("#editPrice").val(data.price);
                $("#editDiscountPrice").val(data.discount_price);

                // $("#editImg").attr("src", '{{asset("/")}}' + data.img);
                // var blog = document.getElementById("editFile");
                // var source = document.createElement("source");
                // source.setAttribute("src", '{{asset("/")}}' + data.file);
                // blog.appendChild(source);
                // blog.play();
                // $('#editid').attr('action', '{{route("package_update")}}/'+id);

                $("#editModal").modal("show");
            },
        }); */


    });

});


// slug
$(document).ready(function () {

    $("#name-text").keyup(function () {
        var Text = $(this).val();
        Text = Text.toLowerCase();
        Text = Text.replace(/[^a-zA-Z0-9]+/g, "-");
        $("#slug-text").val(Text);
    });

    $("#editName").keyup(function () {
        var Text = $(this).val();
        Text = Text.toLowerCase();
        Text = Text.replace(/[^a-zA-Z0-9]+/g, "-");
        //$("#editSlug").val(Text);
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
