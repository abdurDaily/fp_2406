@extends('backend.layout')
@section('backend_content')


<div class="content-wrapper">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-item-center">
            <h3 class="card-title mb-0 mt-1">All Products</h3>
            <a class="btn btn-primary" href="#">Add new one+ </a>
        </div>

        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Dis. Price</th>
                    <th>Descriptions</th>
                    <th>Stock</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                @forelse ($products as $key=>$product)
                <tr valign="middle" >
                    <td> {{ ++$key }} </td>
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->dis_price }}</td>
                    <td>{!!  $product->descriptions !!}</td>
                    <td> <span class="badge bg-{{ $product->is_stock == 1 ? 'success' : 'danger' }}">{{ $product->is_stock == 1 ? 'in stock' : 'out of stock'  }}</span> </td>
                    <td> <span class="badge bg-{{ $product->status == 1 ? 'success' : 'danger' }}">{{ $product->status == 1 ? 'active' : 'inactive'  }}</span> </td>
                    <td>
                        <a href="{{ route('dashboard.product.edit',$product->id ) }}" class="btn btn-sm btn-primary">Edit</a>
                        <a href="{{ route('dashboard.product.delete',$product->id ) }}" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="8">
                        <div class="alert alert-danger">No Product found!</div>
                    </td>
                </tr>
                @endforelse

            </table>
            {{ $products->links() }}
        </div>


    </div>
</div>
@endsection