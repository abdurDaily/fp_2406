@extends('backend.layout')
@section('backend_content')

<div class="card-header">
    <h3 class="card-title">Profile Update</h3>
</div>

<div class="card-body px-5">
    <form action="{{ route('dashboard.profile.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-lg-4  p-4 shadow-sm rounded">
                <p>Basic Info </p>
                <hr>
                <label for="name">Name</label>
                <input value="{{ $authenticateUserInfo->name }}" type="text" name="name" placeholder="name"
                    class="form-control p-3 mb-3">
                @error('name')
                <p class="text-danger"> {{ $message }} </p>
                @enderror

                <label for="name">Email</label>
                <input value="{{ $authenticateUserInfo->email }}" type="email" name="email" placeholder="email"
                    class="form-control p-3 mb-3">
                @error('email')
                <p class="text-danger"> {{ $message }} </p>
                @enderror
                <button type="submit" class="btn btn-primary p-2 w-100">Update</button>
            </div>
        </div>
    </form>
</div>

@endsection