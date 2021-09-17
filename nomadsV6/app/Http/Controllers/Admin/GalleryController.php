<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\http\Requests\Admin\GalleryRequest; // memanggil Requst GalleryRequest
use App\Gallery; // memanggil model Gallery
use App\TravelPackages;
use Illuminate\Http\Request;
use Illuminate\Support\Str; // memanggil fungsi string yang ada di laravel

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Gallery::with('travel_package')->get();

        return view('pages.admin.gallery.index', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //untuk menaruh travel_package di gallery
        $travel_packages = TravelPackages::all();
        //masuk kedalam halaman create.blade.php 
        return view('pages.admin.gallery.create', [
            'travel_packages' => $travel_packages
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // untuk menyimpan data
    public function store(GalleryRequest $request)
    {
        $data = $request->all();

        //menyimpang gambar akan masuk ke folder assest/gallery dan bersifat public
        $data['image'] = $request->file('image')->store(
            'assets/gallery',
            'public'
        );

        Gallery::create($data);
        // dd($item);
        return redirect()->route('gallery.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //jika data ada akan dimunculkan namun jika tidak maka 404 not found
        $item = Gallery::findOrFail($id);

        //untuk menaruh travel_package di gallery
        $travel_packages = TravelPackages::all();


        return view('pages.admin.gallery.edit', [
            'item' => $item,
            'travel_packages' => $travel_packages
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GalleryRequest $request, $id)
    {
        //memanggil semua data
        $data = $request->all();
        //menyimpang gambar akan masuk ke folder assest/gallery dan bersifat public
        // $data['image'] = $request->file('image')->store(
        //     'assets/gallery',
        //     'public'
        // );

        if ($request->file('image')  == null) {
            $file = "";
        } else {
            $data['image'] = $request->file('image')->store(
                'assets/gallery',
                'public'
            );
        }


        //jika data ada akan dimunculkan namun jika tidak maka 404 not found
        $item = Gallery::findOrFail($id);

        $item->update($data);

        return redirect()->route('gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Gallery::findOrFail($id);

        $item->delete();

        return redirect()->route('gallery.index');
    }
}
