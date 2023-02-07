@extends('admin.admin_master')

@section('content')

    <div class="card mb-4 col-md-6 shadow-lg bg-gradient-success">
        <img src="{{ (!empty($adminData->profile_image))? url('upload/admin_images/'.$adminData->profile_image):url('upload/noimg.png') }}" class="rounded mx-auto d-block mt-3" width="80" height="80">
        <div class="card-body text-white">
           <div class="card-title text-center">
               Name: {{ $adminData -> name }}
           </div>
            <div class="card-title text-center ">
                Email: {{ $adminData -> email }}
            </div>
            <div class="card-title text-center ">
                User Name:  {{ $adminData -> username }}
            </div>
            <a href="{{route('editProfile')}}" class="btn btn-warning w-100">Edit Profile</a>
        </div>


    </div>


@endsection
