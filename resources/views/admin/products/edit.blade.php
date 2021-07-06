@extends('layouts.app')

@section('content')
    <h1>Product Creation</h1>
    <form action="{{ route('admin.products.store') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="">Product Name</label>
            <input type="text" name="name" class="form-control" value="{{ $product->name }}">
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <input type="text" name="description" class="form-control" value="{{ $product->description }}">
        </div>
        <div class="form-group">
            <label for="">Content</label>
            <textarea name="body" id="" cols="30" rows="10" class="form-control">{{ $product->body }}</textarea>
        </div>
        <div class="form-group">
            <label for="">Price</label>
            <input type="text" name="price" class="form-control" value="{{ $product->price }}">
        </div>
        <div class="form-group">
            <label for="">Slug</label>
            <input type="text" name="slug" class="form-control" value="{{ $product->slug }}">
        </div>
        <br>
        <div class="form-group">
            <a href="{{ route('admin.products.index') }}" class="btn btn-danger"><i class="bi bi-arrow-left-circle"
                    style="font-size: 1.5rem; color: rgb(255, 255, 255);"></i></a>
            <button type="submit" class="btn btn-primary"><i class="bi bi-cloud-check"
                    style="font-size: 1.5rem;"></i></button>
        </div>
    </form>
@endsection
