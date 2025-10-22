@extends('backend.layout')
@push('backend_css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style>
    .select2-container {
        box-sizing: border-box;
        display: inline-block;
        margin: 0;
        position: relative;
        vertical-align: middle;
        height: 56px;
    }

    .select2-container--default .select2-selection--single {
        height: 100% !important;
        display: flex !important;
        align-items: center !important;
    }

    .select2-container--default .select2-selection--single .select2-selection__arrow {
        height: 26px !important;
        position: absolute !important;
        top: 13px !important;
        right: 18px !important;
        width: 20px !important;
    }
</style>
@endpush


@section('backend_content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-item-center">
        <h3 class="card-title mb-0 mt-1">Category Edit + </h3>
        <a class="btn btn-primary" href="{{ route('dashboard.category.show') }}">Show All</a>
    </div>


    <div class="card-body">
        <form action="{{ route('dashboard.category.update',$edit_category->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')

            <div class="row">
                <div class="col-lg-6 mb-3">
                    <label for="title">Title <span class="text-danger">*</span></label>
                    <input value="{{ $edit_category->title }}" type="text" name="title" id="title" class="form-control p-3"
                        placeholder="Enter category title">
                    @error('title')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror

                </div>
                <div class="col-lg-6 mb-3">
                    <label for="title">Category</label>
                    <select class="js-example-basic-single form-control" name="state">
                        
                        @foreach ($allCategory as $category)
                        <option {{ $category->id == $edit_category->parent_id ? 'selected' : ''}} value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                    </select>

                </div>

                <div class="col-lg-4 mb-3">
                    <label for="">Status</label>
                    <select name="status" id="" class="form-control p-3">
                        <option value="" selected disabled>
                            --Select Status--
                        </option>
                        <option {{ $edit_category->status == 1 ? 'selected' : '' }} value="1">Active</option>
                        <option {{ $edit_category->status == 0 ? 'selected' : '' }} value="0">inActive</option>
                    </select>

                    @error('status')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="col-lg-4 mb-3">
                    <label for="">Meta Title</label>
                    <input value="{{ $edit_category->meta_title }}" type="text" class="form-control p-3" name="meta_title" placeholder="meta title">
                </div>

                <div class="col-lg-4 mb-3">
                    <label for="">Meta Descriptions</label>
                    <input value="{{ $edit_category->meta_description }}" type="text" class="form-control p-3" name="meta_des" placeholder="meta description">
                </div>

                <div class="row align-item-center align-items-end">
                    <div class="col-lg-6">

                       

                        <label for="">Meta Image</label>
                        <input type="file" class="form-control p-3" name="meta_image">

                    </div>

                    <div class="col-lg-6 ">
                        <button type="submit" class="btn btn-primary w-100 p-3">Submit</button>
                    </div>
                    
                    
                    <div class="col-lg-6 ">
                        <img width="150" class="mt-3" src="{{ $edit_category->image ? asset('storage/category/'. $edit_category->image) : asset('placeholder.jpg') }}" alt=""> <br>
                    </div>

                </div>
            </div>

        </form>
    </div>
</div>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endsection

@push('backend_js')

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
</script>
@endpush