@extends('layouts.app')
@section('content')
    <br>
    <div>
        <a href="{{ route('admin.products.create') }}" class="btn btn-lg btn-success">Create Products</a>
    </div>
    <br>

    <body>

        <table class="table table-bordered table-striped" style="width:100%" id="tableStore">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Store Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>R$ {{ number_format($product->price, 2, ',', '.') }}</td>
                        <td>{{$product->store->name}}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('admin.products.edit', ['product' => $product->id]) }}"
                                    class="btn btn-sm btn-primary"><i class="bi bi-pencil"></i></a>
                                <form action="{{ route('admin.products.destroy', ['product' => $product->id]) }}"
                                    method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

    </body>
    <div>

        {{-- {{ $stores->links() }} --}}

        {{-- {{ $stores->onEachSide(2)->links() }} --}}

    </div>
@endsection
