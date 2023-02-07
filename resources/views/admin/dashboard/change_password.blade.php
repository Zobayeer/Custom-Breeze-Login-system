@extends('admin.admin_master')

@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    @if(count($errors))
        @foreach ($errors->all() as $error)
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <p>{{ $error }}</p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endforeach

    @endif

    <form method="post" action="{{ route('update_password') }}" enctype="multipart/form-data">
        @csrf

        <div class="row mb-3">
            <label for="example-text-input" class="col-sm-2 col-form-label">Old Password</label>
            <div class="col-sm-10">
                <input name="oldpassword" class="form-control" type="password" value=""  id="old_password">
            </div>
        </div>
        <!-- end row -->
        <div class="row mb-3">
            <label for="example-text-input" class="col-sm-2 col-form-label">New Password</label>
            <div class="col-sm-10">
                <input name="newpassword" class="form-control" type="password" value=""  id="new_password">
            </div>
        </div>
        <!-- end row -->
        <div class="row mb-3">
            <label for="example-text-input" class="col-sm-2 col-form-label">Confirm Password</label>
            <div class="col-sm-10">
                <input name="confirm_password" class="form-control" type="password" value=""  id="confirm_password">
            </div>
        </div>
        <!-- end row -->

        <input type="submit" class="btn btn-info waves-effect waves-light" value="Change Password">
    </form>

@endsection

