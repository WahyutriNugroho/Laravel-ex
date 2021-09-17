<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\TravelPackages;
use Illuminate\Support\Str;
use App\http\Requests\Admin\TravelPackageRequest;
use App\Http\Requests\Admin\TravelPackagesRequest;

class TravelPackagesController extends Controller
{
    public function index()
    {
        $items = TravelPackages::all();

        return view('pages.admin.travel-package.index', [
            'items' => $items
        ]);
    }

    public function create()
    {
        return view('pages.admin.travel-package.create');
    }

    public function store(TravelPackagesRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        $item = TravelPackages::create($data);

        return redirect()->route('travel-package.index');
    }

    public function edit($id)
    {
        $item = TravelPackages::findOrFail($id);

        return view('pages.admin.travel-package.update', [
            'item' => $item
        ]);
    }

    public function update(TravelPackagesRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);
        $item = TravelPackages::findOrFail($id);

        $item->update($data);
        return redirect()->route('travel-package.index');
    }

    public function destroy($id)
    {
        $item = TravelPackages::findOrFail($id);
        $item->delete();

        return redirect()->route('travel-package.index');
    }
}
