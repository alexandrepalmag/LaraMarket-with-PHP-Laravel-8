@extends('layouts.app')

@section('content')

    <body>

        <table class="table table-hover">
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
                        <td></td>
                    </tr>
                @endforeach

            </tbody>
        </table>

    </body>
    <div>

        {{ $stores->links() }}

    </div>
@endsection
