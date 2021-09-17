<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Transaction;
use Illuminate\Support\Str;
use App\Http\Requests\Admin\TransactionRequest;


class TransactionController extends Controller
{
    public function index()
    {
        $items = Transaction::with(['details', 'user', 'travel_package'])->get();

        return view('pages.admin.transaction.index', [
            'items' => $items
        ]);
    }

    public function create()
    {
        //
    }

    public function store(TransactionRequest $request)
    {
        //
    }

    public function show($id)
    {
        $item = Transaction::with(['details', 'user', 'travel_package'])->findOrFail($id);

        return view('pages.admin.transaction.details', [
            'item' => $item
        ]);
    }

    public function edit($id)
    {
        $item = Transaction::findOrFail($id);

        return view('pages.admin.transaction.update', [
            'item' => $item
        ]);
    }

    public function update(TransactionRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        $item = Transaction::findOrFail($id);

        $item->update($data);

        return redirect()->route('transaction.index');
    }

    public function destroy($id)
    {
        $item = Transaction::findOrFail($id);
        $item->delete();

        return redirect()->route('transaction.index');
    }
}
