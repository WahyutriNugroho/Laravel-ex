{{-- memanggil file admin.blade.php dalam folder layouts --}}
@extends('layout.admin')

{{-- @section('content')  digunakan sebagai template yang dibisa di panggil di kode lain--}}
{{-- untuk kasus ini @section('content') digunakan untuk menyimpan kode tampilan dasboard yang dipanggil di kode admin.blade.php yang ada di view/pages/admin--}}
@section('content')
            <!-- Begin Page Content -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Tambah Paket Travel</h1>
            </div>
            {{-- jika ada kesalahan atau error maka akan menampilkan pesan error --}}
           @if ($errors->any())
               <div class="alert alert-danger">
                   <ul>
                       @foreach ($errors as $error)
                           <li>{{$error}}</li>
                       @endforeach
                   </ul>
               </div>
           @endif

           {{-- untuk menambahkan inputan --}}
           <div class="card shadow">
            <div class="card-body">
                {{-- menggunakan fungsi store pada controller TravelPackageController --}}
              <form action="{{ route('travel-package.store') }}" method="post">
                @csrf
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" class="form-control" name="title" placeholder="Title" autocomplete="off" value="{{ old('title') }}">
                </div>
                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" class="form-control" name="locations" placeholder="Location" autocomplete="off" value="{{ old('locations') }}">
                </div>
                <div class="form-group">
                  <label for="about">About</label>
                  <textarea name="about" rows="10" class="d-block w-100 form-control">{{ old('about') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="featured_event">Featured Event</label>
                    <input type="text" class="form-control" name="featured_event" placeholder="Featured Event" autocomplete="off" value="{{ old('featured_event') }}">
                </div>
                <div class="form-group">
                    <label for="language">Language</label>
                    <input type="text" class="form-control" name="language" placeholder="Language" autocomplete="off" value="{{ old('language') }}">
                </div>
                <div class="form-group">
                    <label for="foods">Foods</label>
                    <input type="text" class="form-control" name="foods" placeholder="Foods" autocomplete="off" value="{{ old('foods') }}">
                </div>
                <div class="form-group">
                    <label for="departure_date">Departure Date</label>
                    <input type="date" class="form-control" name="departure_date" placeholder="Departure Date" autocomplete="off" value="{{ old('departure_date') }}">
                </div>
                <div class="form-group">
                    <label for="duration">Duration</label>
                    <input type="text" class="form-control" name="duration" placeholder="Duration" autocomplete="off" value="{{ old('duration') }}">
                </div>
                <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" class="form-control" name="type" placeholder="Type" autocomplete="off" value="{{ old('type') }}">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" name="price" placeholder="Price" autocomplete="off" value="{{ old('price') }}">
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                  Simpan
                </button>
              </form>
            </div>
          </div>
        </div>
            <!-- /.container-fluid -->
@endsection