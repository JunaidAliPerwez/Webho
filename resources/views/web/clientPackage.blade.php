@extends('layouts.main') @section('content')
<main>
    <div class="container-fluid site-width">
        <!-- START: Breadcrumbs-->
        <div class="row">
            <div class="col-12 align-self-center">
                <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                    <div class="w-sm-100 mr-auto"><span class="h4 my-auto">Clients Packages Images</span></div>



                </div>
            </div>
        </div>
        <!-- END: Breadcrumbs-->

        <!-- START: Card Data-->
        <div class="row">
            <div class="col-12 mt-2">
                <div class="position-relative"></div>
                <div class="card-content">
                    <div class="card-body">


                        <div class="row">
                            <div class="col-lg-12 margin-tb">
                                <div class="pull-left">
                                    <!-- <h2>Laravel 8 CRUD Example from scratch - ItSolutionStuff.com</h2> -->
                                </div>
                                <div class="pull-right text-right p-2">
                                    <button type="button" class="btn btn-success showClientsPackages_create" style="background-color:#28a745; border-color:#28a745;">Create New Order</button>
                                </div>
                            </div>
                        </div>


                        @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block"><button type="button" class="close" data-dismiss="alert">×</button><strong>{{ $message }}</strong></div>
                        @endif

                        @if ($errors->any())
                        <div class="alert alert-danger alert-block"><button type="button" class="close" data-dismiss="alert">×</button><strong>@foreach ($errors->all() as $error) {{ $error }}<br> @endforeach</strong></div>
                        @endif

                        <div class="row">

                            <table class="table table-hover" id="inquiry">

                                <thead class="thead-dark">

                                    <tr>
                                        <th style=" text-align: center;">#</th>
                                        <th style="">Page</th>
                                        <th style="">Title</th>
                                        <th style="">Sub Title</th>
                                        <th style="">Image</th>
                                        <th style="">Link</th>
                                        <th style="">Post By</th>
                                        <th style=""></th>

                                    </tr>

                                </thead>

                                <tbody>

                                    @foreach($showClientsPackages as $key => $value)

                                    <tr>
                                        <td style="text-align: center;">{{ ++$key }}</td>
                                        <td>{{ $value->page }}</td>
                                        <td>{{ $value->title }}</td>
                                        <td>{{ $value->sub_title == null ? '-' : $value->sub_title }}</td>
                                        <td>{{ $value->img }}</td>
                                        <td>{{ $value->link == null ? '-' : $value->link }}</td>
                                        <td>{{ $value->post_by }}</td>
                                        <td>

                                            <button class="btn btn-primary showClientsPackages_update"
                                            data-id="{{ $value->id }}"
                                            data-page="{{ $value->page }}"
                                            data-title="{{ $value->title }}"
                                            data-sub_title="{{ $value->sub_title == null ? '-' : $value->sub_title }}"
                                            data-img="{{ $value->img }}"
                                            data-link="{{ $value->link == null ? '-' : $value->link }}"
                                            data-post_by="{{ $value->post_by }}"
                                            data-slug="{{ $value->slug }}"
                                            data-sub_title_slug="{{ $value->sub_title_slug }}"
                                            {{-- data-details="{{ $value->details }}" --}}

                                            >Update</button>

                                            <button class="btn btn-danger showClientsPackages_delete"
                                              data-id="{{ $value->id }}"
                                              data-datacreate = "0"
                                              data-dataupdate = "0"
                                              data-datadelete = "1" style="background-color: #c82333; border-color: #c82333;">Delete</button>

                                        </td>
                                    </tr>

                                    @endforeach

                                </tbody>

                            </table>

                            <div class="row mt-3">

                                <div class="col-lg-6">
                                    {!! $showClientsPackages->links('pagination::bootstrap-4') !!}
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <hr>

        <div class="row mt-3"></div>
        <!-- END: Card DATA-->
    </div>
</main>

{{-- Create --}}
<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background: #1e3d73; color: #fff;">
                <h5 class="modal-title" id="exampleModalLongTitle">Create</h5>
                <button type="button" class="close" style="color: #fff;" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="document-content">

                    {{-- @if ($errors->any())

                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br />
                            <br />
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>

                    @endif --}}

                    <form class="form" action="{{ route('client_package_store') }}" method="POST" enctype="multipart/form-data">

                        <input type="hidden" value="{{ csrf_token() }}" name="_token" />

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">


                                <div class="form-group">
                                    <strong>Page:</strong>
                                    <input type="text" id="Page" name="page" value="" class="form-control mt-2" placeholder="Page Name" required/>
                                </div>

                                <div class="form-group">
                                    <strong>Title:</strong>
                                    <input type="text" id="Title" name="title" value="" class="form-control mt-2" placeholder="Title Name" required/>
                                    <input type="hidden" id="Slug" name="slug" value="" class="form-control mt-2" />
                                </div>

                                <div class="form-group">
                                    <strong>Sub Title:</strong>
                                    <input type="text" id="Subtitle" name="sub_title" value="" class="form-control mt-2" placeholder="Sub title name if any"/>
                                    <input type="hidden" id="SubTitleSlug" name="sub_title_slug" value="" class="form-control mt-2" />
                                </div>

                                {{-- <div class="form-group">
                                    <strong>Details:</strong>
                                    <textarea name="details" class="form-control mt-2 mb-2" id="details" placeholder="Details"></textarea>
                                </div> --}}

                                <div class="form-group">
                                    <strong>Select Image to upload</strong>
                                    <input type="file" id="Img" name="img" value="{{ old('img') }}" required class="form-control mt-2 mb-2" required />
                                </div>

                                <div class="form-group">
                                    <strong>Link:</strong>
                                    <input type="text" id="Link" name="link" value="" class="form-control mt-2" placeholder="Link if any" />
                                </div>

                                <div class="form-group">
                                    <strong>Post by:</strong>
                                    <input type="text" id="Post_by" name="post_by" value="" class="form-control mt-2" placeholder="" required/>
                                </div>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

{{-- Update --}}
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background: #1e3d73; color: #fff;">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit</h5>
                <button type="button" class="close" style="color: #fff;" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="document-content">

                    {{-- @if ($errors->any())

                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br />
                        <br />
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>

                    @endif --}}

                    <form class="form" action="{{ route('client_package_update') }}" method="POST" enctype="multipart/form-data">

                        <input type="hidden" value="{{ csrf_token() }}" name="_token" />


                        <input type="hidden" id="editId" name="id" value="" class="form-control editId">

                        <div class="form-group">
                            <strong>Page:</strong>
                            <input type="text" id="editPage" name="page" value="" class="form-control mt-2" placeholder="Page" required/>
                        </div>

                        <div class="form-group">
                            <strong>Title:</strong>
                            <input type="text" id="editTitle" name="title" value="" class="form-control mt-2" placeholder="Title" required/>
                            <input type="hidden" id="editSlug" name="slug" value="" class="form-control mt-2" />
                        </div>

                        <div class="form-group">
                            <strong>Sub Title:</strong>
                            <input type="text" id="editSubtitle" name="sub_title" value="" class="form-control mt-2" placeholder="Sub title name if any"/>
                            <input type="hidden" id="editSubTitleSlug" name="sub_title_slug" value="" class="form-control mt-2" />
                        </div>

                        {{-- <div class="form-group">
                            <strong>Details:</strong>
                            <textarea id="editDetails"  name="details" class="form-control mt-2 mb-2" placeholder="Details"></textarea>
                        </div> --}}

                        <div class="form-group">
                            <strong>Image:</strong>
                            <br />
                            <img style="width:150px;height:150px" src="" width="100%" id="editImg" alt="package" />
                            <input type="file" name="img" value="" id="img" class="form-control mt-2 mb-2" />
                            <br />
                        </div>

                        <div class="form-group">
                            <strong>Link:</strong>
                            <input type="text" id="editLink" name="link" value="" class="form-control mt-2" placeholder="if any link" />
                        </div>

                        <div class="form-group">
                            <strong>Post By:</strong>
                            <input type="text" id="editpostBy" name="post_by" value="" class="form-control mt-2" />
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

{{-- Delete --}}
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">

            <div class="modal-header" style="background: #dc3545; color: #fff;">
                <h5 class="modal-title" id="exampleModalLongTitle">Order Delete</h5>
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

                    <form class="form" action="{{ route('client_package_destroy') }}" method="POST" enctype="multipart/form-data">

                        {{-- <input type="hidden" name="user_id" value="{{Auth::user()->id}}"/> --}}
                        <input type="hidden" value="{{ csrf_token() }}" name="_token" />

                        <input type="hidden" id="editId" name="id" value="" class="form-control editId">

                        <span style="font-size: 16px; font-weight: bold;"> Are you sure you want to delete this row.</span>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>


@endsection @section('css')
<style type="text/css"></style>
@endsection @section('js')

<script>

$("#Title").keyup(function () {
        var Text = $(this).val();
        Text = Text.toLowerCase();
        Text = Text.replace(/[^a-zA-Z0-9]+/g, "-");
        $("#Slug").val(Text);
});

$("#editTitle").keyup(function () {
    var Text = $(this).val();
    Text = Text.toLowerCase();
    Text = Text.replace(/[^a-zA-Z0-9]+/g, "-");
    $("#editSlug").val(Text);
});

$("#Subtitle").keyup(function () {
        var Text = $(this).val();
        Text = Text.toLowerCase();
        Text = Text.replace(/[^a-zA-Z0-9]+/g, "-");
        $("#SubTitleSlug").val(Text);
});

$("#editSubtitle").keyup(function () {
    var Text = $(this).val();
    Text = Text.toLowerCase();
    Text = Text.replace(/[^a-zA-Z0-9]+/g, "-");
    $("#editSubTitleSlug").val(Text);
});

$('.showClientsPackages_create').click(function () {

    $("#createModal").modal("show");

});

$('.showClientsPackages_update').click(function () {

    var id = $(this).data("id");
    var page = $(this).data("page");
    var title = $(this).data("title");
    var sub_title = $(this).data("sub_title");
    var img = $(this).data("img");
    var link = $(this).data("link");
    var post_by = $(this).data("post_by");
    //var details = $(this).data("details");

    var slug = $(this).data("slug");
    var sub_title_slug = $(this).data("sub_title_slug");


    $('#editId').val(id);
    $('#editPage').val(page);
    $('#editTitle').val(title);
    $('#editSubtitle').val(sub_title);
    $("#editImg").attr("src", '{{asset("")}}' + img);

    $('#editLink').val(link == '-' ? '' : link);
    $('#editpostBy').val(post_by);

    $('#editSlug').val(slug);
    $('#editSubTitleSlug').val(sub_title_slug);

    //CKEDITOR.instances.editDetails.setData(details);

    $("#editModal").modal("show");

});

$('.showClientsPackages_delete').click(function () {

    var id = $(this).data("id");

    $('.editId').val(id);

    $("#deleteModal").modal("show");

});

</script>
@endsection
