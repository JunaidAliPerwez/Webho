@extends('layouts.main') @section('content')
<main>
    <div class="container-fluid site-width">
        <!-- START: Breadcrumbs-->
        <div class="row">
            <div class="col-12 align-self-center">
                <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                    <div class="w-sm-100 mr-auto"><span class="h4 my-auto">Order Placed</span></div>

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
                            <div class="col-lg-12 margin-tb">
                                <div class="pull-left">
                                    <!-- <h2>Laravel 8 CRUD Example from scratch - ItSolutionStuff.com</h2> -->
                                </div>
                                <div class="pull-right text-right p-2">
                                    <button type="button" class="btn btn-success order_placed_create" style="background-color:#28a745; border-color:#28a745;">Create New Order</button>
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
                                        <th>Budget</th>
                                        <th>package</th>
                                        <th>message</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach($order_placed as $key => $value)

                                    @php $bugdet_value = $value->budget($value->budget_id);  @endphp

                                    @php $package_value = $value->package($value->package_id);  @endphp

                                    <tr>
                                        <td style="text-align: center;">{{ ++$key }}</td>
                                        <td>{{ $value->name }}</td>
                                        <td>{{ $value->email }}</td>
                                        <td>{{ $value->phone_number }}</td>
                                        <td>{{ $bugdet_value->name }}</td>
                                        <td>{{ $package_value->name }}</td>
                                        <td>{{ $value->message }}</td>
                                        <td>

                                            <button class="btn btn-primary order_placed_update"
                                            data-id="{{ $value->id }}"
                                            data-name="{{ $value->name }}"
                                            data-email="{{ $value->email }}"
                                            data-phone_number="{{ $value->phone_number }}"
                                            data-budget_id="{{ $value->budget_id }}"
                                            data-package_id="{{ $value->package_id }}"
                                            data-message="{{ $value->message }}"
                                            data-url="{{ $value->url }}"
                                            data-datacreate = "0"
                                            data-dataupdate = "1"
                                            data-datadelete = "0"
                                            >Update</button>


                                            <button class="btn btn-danger order_placed_delete"
                                              data-id="{{ $value->id }}"
                                              data-datacreate = "0"
                                              data-dataupdate = "0"
                                              data-datadelete = "1" style="background-color: #c82333; border-color: #c82333;">Delete</button>

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $order_placed->links() }}
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
                <h5 class="modal-title" id="exampleModalLongTitle">New Order Create</h5>
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

                    <form class="form" action="{{ route('order_place_create_update_delete') }}" method="POST" enctype="multipart/form-data">


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
                                    <input type="text" id="email" name="email" value="" class="form-control mt-2" placeholder="Email" required/>
                                </div>

                                <div class="form-group">
                                    <strong>Phone Number:</strong>
                                    <input type="text" id="phone_number" name="phone_number" value="" class="form-control mt-2" placeholder="Phone Number" required/>
                                </div>

                                <div class="form-group">
                                    <strong>Budget:</strong>

                                    <select class="form-control mt-2" id="budget_id" name="budget_id">
                                        <option value=" ">----- Select Packege -----</option>


                                        @foreach($budget_range as $key => $value)

                                        <option value="{{ $value->id }}">{{ $value->name }}</option>

                                        @endforeach

                                    </select>
                                </div>

                                <div class="form-group">
                                    <strong>Package:</strong>
                                    <select class="form-control mt-2" id="package_id" name="package_id" required>

                                        <option value=" ">----- Select Packege -----</option>

                                        @foreach($package as $key => $value)

                                        <option value="{{ $value->id }}">{{ $value->name }}</option>

                                        @endforeach

                                    </select>

                                </div>

                                <div class="form-group">
                                    <strong>Message:</strong>
                                    <textarea rows="3" id="message" name="message" value="" class="form-control mt-2" placeholder="Message"  required/></textarea>
                                </div>

                                <div class="form-group">
                                    <?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
                                    <strong>Message:</strong>
                                    <input type="text" id="url" name="url" value="<?= $actual_link ?>" class="form-control mt-2" readonly/>
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
                <h5 class="modal-title" id="exampleModalLongTitle">Order Edit</h5>
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

                    <form class="form" action="{{ route('order_place_create_update_delete') }}" method="POST" enctype="multipart/form-data">

                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}"/>
                        <input type="hidden" value="{{ csrf_token() }}" name="_token" />

                        <input type="hidden" value="" name="datacreate" id="datacreate" class="datacreate"/>
                        <input type="hidden" value="" name="dataupdate" id="dataupdate" class="dataupdate" />
                        <input type="hidden" value="" name="datadelete" id="datadelete" class="datadelete"/>

                        <input type="hidden" id="editId" name="id" value="" class="form-control editId">

                        <div class="form-group">
                            <strong>Name:</strong>
                            <input type="text" id="editName" name="name" value="" class="form-control mt-2" placeholder="Name" required/>
                        </div>

                        <div class="form-group">
                            <strong>Email:</strong>
                            <input type="text" id="editEmail" name="email" value="" class="form-control mt-2" placeholder="Email" required/>
                        </div>

                        <div class="form-group">
                            <strong>Phone Number:</strong>
                            <input type="text" id="editPhoneNumber" name="phone_number" value="" class="form-control mt-2" placeholder="Phone Number" required/>
                        </div>

                        <div class="form-group">
                            <strong>Budget:</strong>

                            <select class="form-control mt-2" id="editbudgetId" name="budget_id" required>
                                <option value=" ">----- Select Packege -----</option>


                                @foreach($budget_range as $key => $value)

                                <option value="{{ $value->id }}">{{ $value->name }}</option>

                                @endforeach

                            </select>
                        </div>

                        <div class="form-group">
                            <strong>Package:</strong>
                            <select class="form-control mt-2" id="editPackageId" name="package_id" required>

                                <option value=" ">----- Select Packege -----</option>

                                @foreach($package as $key => $value)

                                <option value="{{ $value->id }}">{{ $value->name }}</option>

                                @endforeach

                            </select>

                        </div>

                        <div class="form-group">
                            <strong>Message:</strong>
                            <textarea rows="3" id="editMessage" name="message" value="" class="form-control mt-2" placeholder="Message" required/></textarea>
                        </div>

                        <div class="form-group">
                            <strong>Url:</strong>
                            <input type="text" id="editUrl" name="url" value="" class="form-control mt-2" readonly/>
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

                    <form class="form" action="{{ route('order_place_create_update_delete') }}" method="POST" enctype="multipart/form-data">

                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}"/>
                        <input type="hidden" value="{{ csrf_token() }}" name="_token" />

                        <input type="hidden" value="" name="datacreate" id="datacreate" class="datacreate"/>
                        <input type="hidden" value="" name="dataupdate" id="dataupdate" class="dataupdate" />
                        <input type="hidden" value="" name="datadelete" id="datadelete" class="datadelete"/>

                        <input type="hidden" id="editId" name="id" value="" class="form-control editId">

                        <span style="font-size: 16px; font-weight: bold;"> Are you sure you want to delete this order? </span>

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

// Budget Range

$('.order_placed_create').click(function () {

    $("#createModal").modal("show");

});

$('.order_placed_update').click(function () {

    var id = $(this).data("id");
    var name = $(this).data("name");
    var email = $(this).data("email");
    var phone_number = $(this).data("phone_number");
    var budget_id = $(this).data("budget_id");
    var package_id = $(this).data("package_id");
    var message = $(this).data("message");
    var url = $(this).data("url");

    var dataupdate = $(this).data("dataupdate");
    var datadelete = $(this).data("datadelete");
    var datacreate = $(this).data("datacreate");

    $('#editId').val(id);
    $('#editName').val(name);
    $('#editEmail').val(email);
    $('#editPhoneNumber').val(phone_number);
    $('#editbudgetId').val(budget_id);
    $('#editPackageId').val(package_id);
    $('#editMessage').val(message);
    $('#editUrl').val(url);

    $('.dataupdate').val(dataupdate);
    $('.datadelete').val(datadelete);
    $('.datacreate').val(datacreate);


    $("#editModal").modal("show");

});

$('.order_placed_delete').click(function () {

    var id = $(this).data("id");
    var name = $(this).data("name");

    var dataupdate = $(this).data("dataupdate");
    var datadelete = $(this).data("datadelete");
    var datacreate = $(this).data("datacreate");


    $('.editId').val(id);

    $('.dataupdate').val(dataupdate);
    $('.datadelete').val(datadelete);
    $('.datacreate').val(datacreate);

    $("#deleteModal").modal("show");

});

</script>
@endsection
