@extends('layouts.app')
@section('content')
    <br>
    <div>
        <a href="{{ route('admin.stores.create') }}" class="btn btn-lg btn-success">Create Store</a>
    </div>
    <br>

    <body>

        <table class="table table-bordered table-striped" style="width:100%" id="tableStore">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Store</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($stores as $store)
                    <tr>
                        <td>{{ $store->id }}</td>
                        <td>{{ $store->name }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('admin.stores.edit', ['store' => $store->id]) }}"
                                    class="btn btn-sm btn-primary"><i class="bi bi-pencil"></i></a>
                                <form action="{{ route('admin.stores.destroy', ['store' => $store->id]) }}" method="post">
                                    @csrf
                                    @method("DELETE")
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
