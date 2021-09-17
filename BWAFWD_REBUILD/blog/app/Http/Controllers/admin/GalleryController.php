<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Gallery;
use App\TravelPackages;
use Illuminate\Support\Str;
use App\Http\Requests\Admin\GalleryRequest;

class GalleryController extends Controller
{
    public function index()
    {
        $items = Gallery::with('travel_package')->get();

        return view('pages.admin.gallery.index', [
            'items' => $items
        ]);
    }

    public function create()
    {
        $travel_packages = TravelPackages::all();
        return view('pages.admin.gallery.create', [
            'travel_packages' => $travel_packages
        ]);
    }

    public function store(GalleryRequest $request)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store(
            'assets/gallery',
            'public'
        );

        Gallery::create($data);
        // dd($item);
        return redirect()->route('gallery.index');
    }

    public function edit($id)
    {
        $item = Gallery::findOrFail($id);
        $travel_packages = TravelPackages::all();

        return view('pages.admin.gallery.update', [
            'item' => $item,
            'travel_packages' => $travel_packages
        ]);
    }

    public function update(GalleryRequest $request, $id)
    {
        $data = $request->all();

        if ($request->file('image')  == null) {
            $file = "";
        } else {
            $data['image'] = $request->file('image')->store(
                'assets/gallery',
                'public'
            );
        }
        $item = Gallery::findOrFail($id);

        $item->update($data);

        return redirect()->route('gallery.index');
    }

    public function destroy($id)
    {
        $item = Gallery::findOrFail($id);
        $item->delete();

        return redirect()->route('gallery.index');
    }
}
