<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\User;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Pagination\Paginator;

class StoreController extends Controller
{
    public function index()
    {
        //Paginator::useBootstrap();
        //$stores = Store::paginate(10);

        $stores = Store::all();

        return view('admin.stores.index', compact('stores'));
    }

    public function create()
    {
        $users = User::all(['id', 'name']);

        return view('admin.stores.create', compact('users'));
    }

    public function store(Request $request)
    {

        $data = $request->all();

        $user = User::find($data['user']);
        $store = $user->store()->create($data);

        return redirect()->route('admin.stores.index')->with('msg', 'Store created successfully!');
    }


    public function edit($store)
    {
        $store = Store::find($store);

        return view('admin.stores.edit', compact('store'));
    }

    public function update(Request $request, $store)
    {

        $data = $request->all();

        $store = Store::find($store);
        $store->update($data);

        return redirect()->route('admin.stores.index')->with('msg', 'Store updated successfully!');
    }

    public function destroy($store)
    {

        $store = Store::find($store);
        $store->delete();

        return redirect()->route('admin.stores.index')->with('msg', 'Store deleted successfully!');
    }
}
