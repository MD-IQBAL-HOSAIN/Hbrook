@extends('backend.app')

@section('title', 'Product Details')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h4 class="m-0 mt-2">Product #{{ $data->id }}</h4>
                            <div class="d-flex">
                                <a class="btn btn-primary btn-flat float-right ml-3" href="{{ route('products.index') }}"><i
                                        class="fa fa-arrow-left"></i> Back</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <th style="width:160px;">Product Name</th>
                                    <th style="width:10px;">:</th>
                                    <td>{{ $data->name ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>Code</th>
                                    <th>:</th>
                                    <td>{{ $data->code ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>Category Name</th>
                                    <th>:</th>
                                    <td>{{ $data->category->name ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>Featured</th>
                                    <th>:</th>
                                    <td>{{ $data->is_featured ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>Price</th>
                                    <th>:</th>
                                    <td>{{ $data->price ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>Quantity</th>
                                    <th>:</th>
                                    <td>{{ $data->quantity ?? '' }}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <th>:</th>
                                    <td>{{ $data->status }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h3>Tags:</h3>
                        <div class="row">
                            @foreach ($data->ptags as $tag)
                                <div class="col-md-3">
                                    <span class="badge bg-primary">{{ $tag->name }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h3>Images:</h3>
                        <div class="row">
                            @foreach ($data->images as $image)
                                <div class="col-md-3">
                                    <img src="{{ asset('storage/' . $image->image_url) }}" alt="Product Image"
                                        class="img-thumbnail">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

