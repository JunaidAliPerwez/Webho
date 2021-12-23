@extends('layouts.main') @section('content')
<main>
    <div class="container-fluid site-width">
        <!-- START: Breadcrumbs-->
        <div class="row">
            <div class="col-12 align-self-center">
                <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                    <div class="w-sm-100 mr-auto"><span class="h4 my-auto">Dashboard</span></div>

                    {{--
                    <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item">User</li>
                        <li class="breadcrumb-item active"><a href="#">Profile</a></li>
                    </ol>
                    --}}

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
                            <h5>Inquiry</h5>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 margin-tb">
                                <div class="pull-left">
                                    <!-- <h2>Laravel 8 CRUD Example from scratch - ItSolutionStuff.com</h2> -->
                                </div>
                                <div class="pull-right text-right p-2">
                                    <button type="button" class="btn btn-success inquiry_create" style="background-color:#28a745; border-color:#28a745;">Create New Inquiry</button>
                                </div>
                            </div>
                        </div>

                        @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block"><button type="button" class="close" data-dismiss="alert">×</button><strong>{{ $message }}</strong></div>
                        @endif


                        <div class="row">
                            <table class="table table-hover" id="inquiry">
                                <thead class="thead-dark">
                                    <tr>
                                        <th style="text-align: center;">#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Meassage</th>
                                        <th>Url</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($inquiry as $key => $value)
                                    <tr>
                                        <td style="text-align: center;">{{ ++$key }}</td>
                                        <td>{{ $value->name }}</td>
                                        <td>{{ $value->email }}</td>
                                        <td>{{ $value->phonenumber }}</td>
                                        <td>{{ $value->message }}</td>
                                        <td>{{ $value->url == '' ? '-' : $value->url }}</td>
                                        <td>

                                            <button class="btn btn-primary inquiry_update"
                                            data-id="{{ $value->id }}"
                                            data-name="{{ $value->name }}"
                                            data-email="{{ $value->email }}"
                                            data-phonenumber="{{ $value->phonenumber }}"
                                            data-message="{{ $value->message }}"
                                            data-url="{{ $value->url == '' ? '-' : $value->url }}"
                                            data-datacreate = "0"
                                            data-dataupdate = "1"
                                            data-datadelete = "0"
                                            >Update</button>


                                            <button class="btn btn-danger inquiry_delete"
                                              data-id="{{ $value->id }}"
                                              data-datacreate = "0"
                                              data-dataupdate = "0"
                                              data-datadelete = "1" style="background-color: #c82333; border-color: #c82333;">Delete</button>

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {!! $inquiry->links('pagination::bootstrap-4') !!}
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-12">
                <div class="position-relative"></div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="row">
                            <h5>Project Inquiry</h5>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 margin-tb">
                                <div class="pull-left">
                                    <!-- <h2>Laravel 8 CRUD Example from scratch - ItSolutionStuff.com</h2> -->
                                </div>
                                <div class="pull-right text-right p-2">
                                    <button type="button" class="btn btn-success inquiry_project_create" style="background-color:#28a745; border-color:#28a745;">Create New Inquiry Project</button>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <table class="table table-hover" id="inquiry">
                                <thead class="thead-dark">
                                    <tr>
                                        <th style="text-align: center;">#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Service</th>
                                        <th>Meassage</th>
                                        <th>Url</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($inquiryProject as $key => $value)
                                    <tr>
                                        <td style="text-align: center;">{{ ++$key }}</td>
                                        <td>{{ $value->name }}</td>
                                        <td>{{ $value->email }}</td>
                                        <td>{{ $value->phonenumber }}</td>
                                        <td>{{ $value->service }}</td>
                                        <td>{{ $value->message }}</td>
                                        <td>{{ $value->url == '' ? '-' : $value->url }}</td>

                                        <td>

                                            <button class="btn btn-primary inquiry_project_update"
                                            data-id="{{ $value->id }}"
                                            data-name="{{ $value->name }}"
                                            data-email="{{ $value->email }}"
                                            data-phonenumber="{{ $value->phonenumber }}"
                                            data-service="{{ $value->service }}"
                                            data-message="{{ $value->message }}"
                                            data-url="{{ $value->url == '' ? '-' : $value->url }}"
                                            data-datacreate = "0"
                                            data-dataupdate = "1"
                                            data-datadelete = "0"
                                            >Update</button>


                                            <button class="btn btn-danger inquiry_project_delete"
                                                data-id="{{ $value->id }}"
                                                data-datacreate = "0"
                                                data-dataupdate = "0"
                                                data-datadelete = "1" style="background-color: #c82333; border-color: #c82333;">Delete</button>

                                        </td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {!! $inquiry->links('pagination::bootstrap-4') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3"></div>
        <!-- END: Card DATA-->
    </div>
</main>


{{-- Create Inquiry --}}
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

                    <form class="inquiryForm" action="{{ route('inquiry_create_update_delete') }}" method="POST" enctype="multipart/form-data" style="display: none;">


                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}"/>
                        <input type="hidden" value="{{ csrf_token() }}" name="_token" />

                        <input type="hidden" value="0" name="dataupdate" id="dataupdate" />
                        <input type="hidden" value="0" name="datadelete" id="datadelete" />
                        <input type="hidden" value="1" name="datacreate" id="datacreate" />

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">


                                <div class="form-group">
                                    <strong>Name:</strong>
                                    <input type="text" id="Name" name="name" value="" class="form-control mt-2" placeholder="Name" required/>
                                </div>

                                <div class="form-group">
                                    <strong>Email:</strong>
                                    <input type="email" id="Email" name="email" value="" class="form-control mt-2" placeholder="Email" required/>
                                </div>

                                <div class="form-group">
                                    <strong>Phone Number:</strong>
                                    <input type="text" id="PhoneNumber" name="phonenumber" value="" class="form-control mt-2" placeholder="Phone Number" required/>
                                </div>

                                <div class="form-group">
                                    <strong>Url:</strong>
                                    <?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
                                    <input type="text" id="Url" name="url" value="{{ $actual_link }}" class="form-control" placeholder="Name" readonly />
                                </div>

                                <div class="form-group">
                                    <strong>Message:</strong>
                                    <textarea id="Message" name="message" rows="3" value="" class="form-control mt-2" placeholder="Message" required/></textarea>
                                </div>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>

                    </form>

                    <form class="inquiryProjectForm" action="{{ route('inquiry_project_create_update_delete') }}" method="POST" enctype="multipart/form-data" style="display: none;">


                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}"/>
                        <input type="hidden" value="{{ csrf_token() }}" name="_token" />

                        <input type="hidden" value="0" name="dataupdate" id="dataupdate" />
                        <input type="hidden" value="0" name="datadelete" id="datadelete" />
                        <input type="hidden" value="1" name="datacreate" id="datacreate" />

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">


                                <div class="form-group">
                                    <strong>Name:</strong>
                                    <input type="text" id="Name" name="name" value="" class="form-control mt-2" placeholder="Name" required/>
                                </div>

                                <div class="form-group">
                                    <strong>Email:</strong>
                                    <input type="email" id="Email" name="email" value="" class="form-control mt-2" placeholder="Email" required/>
                                </div>

                                <div class="form-group">
                                    <strong>Phone Number:</strong>
                                    <input type="text" id="PhoneNumber" name="phonenumber" value="" class="form-control mt-2" placeholder="Phone Number" required/>
                                </div>

                                <div class="form-group">
                                    <strong>Service:</strong>
                                    <select class="form-control mt-2" id="service" name="service" required>
                                        <option value="">Please Select Service</option>
                                        <option value="Web Design">Web Design</option>
                                        <option value="Video Animation">Video Animation</option>
                                        <option value="SEO">SEO</option>
                                        <option value="SMM">SMM</option>
                                        <option value="ORM">ORM</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <strong>Url:</strong>
                                    <?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
                                    <input type="text" id="Url" name="url" value="{{ $actual_link }}" class="form-control" placeholder="Name" readonly />
                                </div>

                                <div class="form-group">
                                    <strong>Message:</strong>
                                    <textarea id="Message" name="message" rows="3" value="" class="form-control mt-2" placeholder="Message" required/></textarea>
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

{{-- Update Inquiry --}}
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

                    <form class="inquiryForm" action="{{ route('inquiry_create_update_delete') }}" method="POST" enctype="multipart/form-data">

                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}"/>
                        <input type="hidden" value="{{ csrf_token() }}" name="_token" />

                        <input type="hidden" value="" name="dataupdate" id="dataupdate" />
                        <input type="hidden" value="" name="datadelete" id="datadelete" />
                        <input type="hidden" value="" name="datacreate" id="datacreate" />

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">

                                <input type="hidden" id="editId" name="id" value="" class="form-control">

                                <div class="form-group">
                                    <strong>Name:</strong>
                                    <input type="text" id="editName" name="name" value="" class="form-control mt-2" placeholder="Name" required/>
                                </div>

                                <div class="form-group">
                                    <strong>Email:</strong>
                                    <input type="email" id="editEmail" name="email" value="" class="form-control mt-2" placeholder="Email" required/>
                                </div>

                                <div class="form-group">
                                    <strong>Phone Number:</strong>
                                    <input type="text" id="editPhoneNumber" name="phonenumber" value="" class="form-control mt-2" placeholder="Phone Number" required/>
                                </div>

                                <div class="form-group">
                                    <strong>Url:</strong>
                                    <input type="text" id="editUrl" name="url" value="" class="form-control" placeholder="Name" readonly />
                                </div>

                                <div class="form-group">
                                    <strong>Message:</strong>
                                    <textarea id="editMessage" name="message" rows="3" value="" class="form-control mt-2" placeholder="Message" required/></textarea>
                                </div>

                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>

                    </form>

                    <form class="inquiryProjectForm" action="{{ route('inquiry_project_create_update_delete') }}" method="POST" enctype="multipart/form-data">

                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}"/>
                        <input type="hidden" value="{{ csrf_token() }}" name="_token" />

                        <input type="hidden" value="" name="dataupdate" id="dataupdate" />
                        <input type="hidden" value="" name="datadelete" id="datadelete" />
                        <input type="hidden" value="" name="datacreate" id="datacreate" />

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">

                                <input type="hidden" id="editId" name="id" value="" class="form-control">

                                <div class="form-group">
                                    <strong>Name:</strong>
                                    <input type="text" id="editName" name="name" value="" class="form-control mt-2" placeholder="Name" required/>
                                </div>

                                <div class="form-group">
                                    <strong>Email:</strong>
                                    <input type="email" id="editEmail" name="email" value="" class="form-control mt-2" placeholder="Email" required/>
                                </div>

                                <div class="form-group">
                                    <strong>Phone Number:</strong>
                                    <input type="text" id="editPhoneNumber" name="phonenumber" value="" class="form-control mt-2" placeholder="Phone Number" required/>
                                </div>

                                <div class="form-group">
                                    <strong>Service:</strong>
                                    <select class="form-control mt-2" id="service" name="service" required>
                                        <option value="">Please Select Service</option>
                                        <option value="Web Design">Web Design</option>
                                        <option value="Video Animation">Video Animation</option>
                                        <option value="SEO">SEO</option>
                                        <option value="SMM">SMM</option>
                                        <option value="ORM">ORM</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <strong>Url:</strong>
                                    <input type="text" id="editUrl" name="url" value="" class="form-control" placeholder="Name" readonly />
                                </div>

                                <div class="form-group">
                                    <strong>Message:</strong>
                                    <textarea id="editMessage" name="message" rows="3" value="" class="form-control mt-2" placeholder="Message" required/></textarea>
                                </div>

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

{{-- Delete Inquiry --}}
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background: #dc3545; color: #fff;">
                <h5 class="modal-title" id="exampleModalLongTitle">Delete</h5>
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

                    <form class="inquiryForm" action="{{ route('inquiry_create_update_delete') }}" method="POST" enctype="multipart/form-data" style="display: none;">

                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}"/>
                        <input type="hidden" value="{{ csrf_token() }}" name="_token" />

                        <input type="hidden" value="" name="dataupdate" id="dataupdate" class="dataupdate" />
                        <input type="hidden" value="" name="datadelete" id="datadelete" class="datadelete"/>
                        <input type="hidden" value="" name="datacreate" id="datacreate" class="datacreate"/>
                        <input type="hidden" id="editId" name="id" value="" class="form-control editId">

                        <span style="font-size: 16px; font-weight: bold;"> Are you sure you want to delete this Inquiry ?</span>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </div>

                    </form>

                    <form class="inquiryProjectForm" action="{{ route('inquiry_project_create_update_delete') }}" method="POST" enctype="multipart/form-data" style="display: none;">

                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}"/>
                        <input type="hidden" value="{{ csrf_token() }}" name="_token" />

                        <input type="hidden" value="" name="dataupdate" id="dataupdate" class="dataupdate" />
                        <input type="hidden" value="" name="datadelete" id="datadelete" class="datadelete"/>
                        <input type="hidden" value="" name="datacreate" id="datacreate" class="datacreate"/>
                        <input type="hidden" id="editId" name="id" value="" class="form-control editId">

                        <span style="font-size: 16px; font-weight: bold;"> Are you sure you want to delete this Project Inquiry ?</span>

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

// inquiry
$('.inquiry_create').click(function () {

    $("#createModal").modal("show");

    $('.inquiryForm').show();
    $('.inquiryProjectForm').hide();

});

$('.inquiry_update').click(function () {

    var id = $(this).data("id");
    var name = $(this).data("name");
    var email = $(this).data("email");
    var phonenumber = $(this).data("phonenumber");
    var url = $(this).data("url");
    var message = $(this).data("message");

    var dataupdate = $(this).data("dataupdate");
    var datadelete = $(this).data("datadelete");
    var datacreate = $(this).data("datacreate");

    $('.inquiryForm').show();
    $('.inquiryProjectForm').hide();


    $('.inquiryForm #editId').val(id);
    $('.inquiryForm #editName').val(name);
    $('.inquiryForm #editEmail').val(email);
    $('.inquiryForm #editPhoneNumber').val(phonenumber);
    $('.inquiryForm #editUrl').val(url);
    $('.inquiryForm #editMessage').val(message);

    $('.inquiryForm #dataupdate').val(dataupdate);
    $('.inquiryForm #datadelete').val(datadelete);
    $('.inquiryForm #datacreate').val(datacreate);

    $("#editModal").modal("show");

});

$('.inquiry_delete').click(function () {

    var id = $(this).data("id");
    var name = $(this).data("name");
    var email = $(this).data("email");
    var phonenumber = $(this).data("phonenumber");
    var url = $(this).data("url");
    var message = $(this).data("message");

    var dataupdate = $(this).data("dataupdate");
    var datadelete = $(this).data("datadelete");
    var datacreate = $(this).data("datacreate");

    $('.inquiryForm').show();
    $('.inquiryProjectForm').hide();


    $('.inquiryForm .editId').val(id);

    $('.inquiryForm .dataupdate').val(dataupdate);
    $('.inquiryForm .datadelete').val(datadelete);
    $('.inquiryForm .datacreate').val(datacreate);

    $("#deleteModal").modal("show");



});


// Project inquiry
$('.inquiry_project_create').click(function () {

    $("#createModal").modal("show");

    $('.inquiryForm').hide();
    $('.inquiryProjectForm').show();

});

$('.inquiry_project_update').click(function () {

    var id = $(this).data("id");
    var name = $(this).data("name");
    var email = $(this).data("email");
    var phonenumber = $(this).data("phonenumber");
    var service = $(this).data("service");
    var url = $(this).data("url");
    var message = $(this).data("message");

    var dataupdate = $(this).data("dataupdate");
    var datadelete = $(this).data("datadelete");
    var datacreate = $(this).data("datacreate");

    $('.inquiryForm').hide();
    $('.inquiryProjectForm').show();


    $('.inquiryProjectForm #editId').val(id);
    $('.inquiryProjectForm #editName').val(name);
    $('.inquiryProjectForm #editEmail').val(email);
    $('.inquiryProjectForm #editPhoneNumber').val(phonenumber);
    $('.inquiryProjectForm #service').val(service);
    $('.inquiryProjectForm #editUrl').val(url);
    $('.inquiryProjectForm #editMessage').val(message);

    $('.inquiryProjectForm #dataupdate').val(dataupdate);
    $('.inquiryProjectForm #datadelete').val(datadelete);
    $('.inquiryProjectForm #datacreate').val(datacreate);

    $("#editModal").modal("show");

});

$('.inquiry_project_delete').click(function () {

    var id = $(this).data("id");
    var name = $(this).data("name");
    var email = $(this).data("email");
    var phonenumber = $(this).data("phonenumber");
    var url = $(this).data("url");
    var message = $(this).data("message");

    var dataupdate = $(this).data("dataupdate");
    var datadelete = $(this).data("datadelete");
    var datacreate = $(this).data("datacreate");

    $('.inquiryForm').hide();
    $('.inquiryProjectForm').show();


    $('.inquiryProjectForm .editId').val(id);

    $('.inquiryProjectForm .dataupdate').val(dataupdate);
    $('.inquiryProjectForm .datadelete').val(datadelete);
    $('.inquiryProjectForm .datacreate').val(datacreate);

    $("#deleteModal").modal("show");



});

</script>
@endsection
