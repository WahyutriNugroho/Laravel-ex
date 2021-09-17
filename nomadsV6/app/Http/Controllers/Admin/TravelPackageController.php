<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\http\Requests\Admin\TravelPackageRequest; // memanggil Requst TravelPackageRequest
use App\TravelPackages; // memanggil model TravelPackages
use Illuminate\Http\Request;
use Illuminate\Support\Str; // memanggil fungsi string yang ada di laravel

class TravelPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = TravelPackages::all();

        return view('pages.admin.travel-package.index', [
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
        //masuk kedalam halaman create.blade.php 
        return view('pages.admin.travel-package.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // untuk menyimpan data
    public function store(TravelPackageRequest $request)
    {
        //memanggil semua data
        $data = $request->all();
        // mengkonversi title menjadi Id fungsinya agar url yang tampil sesuai dengan request yang sedang masuk
        $data['slug'] = Str::slug($request->title);

        // memanggil model, create data yang ada di request dan tambahan slug

        $item = TravelPackages::create($data);
        // dd($item);
        return redirect()->route('travel-package.index');
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
        $item = TravelPackages::findOrFail($id);
        //retur pake view ora pake redirect redirect ki kyo e nggo nyimpan data ne ga update data/ hapus
        // return redirect()->route('pages.admin.travel-package.edit', [
        //     'item' => $item
        // ]);

        ///
        return view('pages.admin.travel-package.edit', [
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TravelPackageRequest $request, $id)
    {
        //memanggil semua data
        $data = $request->all();
        // mengkonversi title menjadi Id fungsinya agar url yang tampil sesuai dengan request yang sedang masuk
        $data['slug'] = Str::slug($request->title);

        //jika data ada akan dimunculkan namun jika tidak maka 404 not found
        $item = TravelPackages::findOrFail($id);

        $item->update($data);

        return redirect()->route('travel-package.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = TravelPackages::findOrFail($id);

        $item->delete();

        return redirect()->route('travel-package.index');
    }
}
