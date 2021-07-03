<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <table>
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
{{ $stores->links() }}

</html>
