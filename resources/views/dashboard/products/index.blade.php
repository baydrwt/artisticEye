@extends('dashboard.layouts.main')

@section('content')

@if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show col-lg-8 mt-3 ms-4" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<div class="container-fluid px-4">
    <h1 class="mt-4">Product artisticEye</h1>
    <ol class="breadcrumb mb-4">
        <a href="/dashboard/products/create" class="btn btn-primary mb-2 mt-2">Create New Product</a>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            List Product artisticEye
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>      
                        <th class="text-center">Name</th>
                        <th class="text-center">Description</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Benefits</th>
                        <th class="text-center">Image</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->desc }}</td>
                        <td>Rp{{ $product->price }}</td>
                        <td>{{ $product->benefits }}</td>
                        <td>
                            <a href="{{ asset('storage/' . $product->image ) }}" data-lightbox="transaction-images">
                                <img src="{{ asset('storage/' . $product->image ) }}" width="100" height="100" alt="">
                            </a>    
                        </td>
                        <td>
                            <a href="/dashboard/products/{{ $product->name }}/edit" class="badge bg-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                            <form action="{{ route('products.destroy', $product) }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')">
                                <i class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach                
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection