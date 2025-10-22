@extends('backend.layout')
@section('backend_content')
@push('backend_css')
<link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
@endpush

<div class="content-wrapper">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-item-center">
            <h3 class="card-title mb-0 mt-1">Product Add + </h3>
            <a class="btn btn-primary" href="#">Show All</a>
        </div>


        <div class="card-body">
            <form action="{{ route('dashboard.product.image.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <div class="row">
                    <div class="col-lg-6">
                        <label for="image">Image Upload</label>
                        <input name="images[]" multiple type="file" />
                        @error('images')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        @error('images.*')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        <label for="product_id">Select Product</label>
                        <select name="product_id" id="product_id" class="form-control p-4">
                            <option value="" selected disabled>---select product ---</option>
                            @foreach ($products as $product)
                            <option value="{{ $product->id }}" {{ old('product_id')==$product->id ? 'selected' : '' }}>
                                {{ $product->title }}
                            </option>
                            @endforeach
                        </select>

                        @error('product_id')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror

                        <button class="btn btn-primary p-2 w-25 mt-3" type="submit">Upload</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('backend_js')
<script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
<script>
    // Get a reference to the file input element
    const inputElement = document.querySelector('input[type="file"]');

    // Create a FilePond instance
    const pond = FilePond.create(inputElement,{
        storeAsFile: true,
        allowMultiple: true
    });
</script>
@endpush