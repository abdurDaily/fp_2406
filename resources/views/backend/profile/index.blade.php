@extends('backend.layout')
@section('backend_content')



<div class="card-header">
    <h3 class="card-title">Profile Update</h3>
</div>

<div class="card-body px-5">

    <div class="row g-4">

        <div class="col-lg-4    rounded">
            <form action="{{ route('dashboard.profile.store') }}" method="post" enctype="multipart/form-data">
                @csrf


                <div class="shadow p-4">
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
            </form>
        </div>

        <div class="col-lg-4 h-100   rounded">
            <form action="{{ route('dashboard.password.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="shadow  p-4">
                    <p>Password Update </p>
                    <hr>
                    <label for="current_password">Current password</label>
                    <input value="" type="password" name="current_password" placeholder="current password"
                        class="form-control p-3 mb-3">
                    @error('current_password')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror

                    <label for="new_password">New password</label>
                    <input value="" type="password" name="new_password" placeholder="new password"
                        class="form-control p-3 mb-3">
                    @error('new_password')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror

                    <label for="confirm_password">Confirm password</label>
                    <input value="" type="password" name="confirm_password" placeholder="confirm password"
                        class="form-control p-3 mb-3">


                    <button type="submit" class="btn btn-primary p-2 w-100">Update Password</button>
                </div>
            </form>
        </div>


        <div class="col-lg-4 h-100   rounded">
            <form action="{{ route('dashboard.image.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="shadow  p-4">
                    <p>Profile image Update </p>
                    <hr>

                    {{-- <label for="profile_img">

                        <img class="img-fluid" src="{{ asset('assets/img/placeholder.jpg') }}" alt="">

                    </label> --}}


                    <input name="image" hidden accept="image/*" type='file' id="imgInp" />


                    <label for="imgInp">
                        <div style="text-align: center; width: 100%;">
                            <img style="width:100%;" id="blah" src="{{ Auth::user()->image ? env('APP_URL') . '/storage/profile/' . Auth::user()->image : asset('assets/img/placeholder.jpg') }}"
                                alt="your image" />
                        </div>
                    </label>

                    <br>

                    @error('current_password')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror



                    <button type="submit" class="btn btn-primary p-2 mt-3 w-100">Update image</button>
                </div>
            </form>
        </div>


    </div>

</div>

@endsection

@push('backend_js')

<script>
    imgInp.onchange = evt => {
  const [file] = imgInp.files
  if (file) {
    blah.src = URL.createObjectURL(file)
  }
}
</script>
@endpush