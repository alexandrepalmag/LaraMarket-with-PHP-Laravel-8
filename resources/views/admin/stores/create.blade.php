@extends('layouts.app')

@section('content')
    <h1>Store Creation</h1>
    <form action="{{ route('admin.stores.store') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="">Store Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <input type="text" name="description" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Phone</label>
            <input type="text" name="phone" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Cell Phone</label>
            <input type="text" name="mobile_phone" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Slug</label>
            <input type="text" name="slug" class="form-control">
        </div>
        <div class="form-group">
            <label for="">User</label>
            <select name="user" class="form-select" aria-label="Default select example">
                <option selected>Select a user</option>
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <br>
        <div class="form-group">
            <a href="{{ route('admin.stores.index') }}" class="btn btn-danger"><i class="bi bi-x-circle"
                    style="font-size: 1.5rem; color: rgb(255, 255, 255);"></i></a>
            <button type="submit" class="btn btn-primary"><i class="bi bi-cloud-check"
                    style="font-size: 1.5rem;"></i></button>
        </div>
    </form>
@endsection
