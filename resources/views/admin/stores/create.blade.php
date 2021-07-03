 <h1>Store Creation</h1>
<form action="{{route('admin.stores.store')}}" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div>
        <label for="">Store Name</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="">Description</label>
        <input type="text" name="description">
    </div>
    <div>
        <label for="">Phone</label>
        <input type="text" name="phone">
    </div>
    <div>
        <label for="">Cell Phone</label>
        <input type="text" name="mobile_phone">
    </div>
    <div>
        <label for="">Slug</label>
        <input type="text" name="slug">
    </div>
    <div>
        <label for="">User</label>
        <select name="user" id="">
            @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <button type="submit">Create Store</button>
    </div>
</form>
