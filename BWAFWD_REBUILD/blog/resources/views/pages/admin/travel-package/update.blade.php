@extends('layouts.admin')
@section('content')
  <!-- Begin Page Content -->
  <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Update Paket Travel</h1>
        </div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="card shadow">
                <form action="{{ route('travel-package.update', $item->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Title" autocomplete="off" value="{{$item->title }}">
                      </div>
                      <div class="form-group">
                          <label for="location">Location</label>
                          <input type="text" class="form-control" name="location" placeholder="Location" autocomplete="off" value="{{ $item->location }}">
                      </div>
                      <div class="form-group">
                        <label for="about">About</label>
                        <textarea name="about" class="form-control tentang">{{$item->about}}</textarea>
                    </div>
                      <div class="form-group">
                          <label for="featured_event">Featured Event</label>
                          <input type="text" class="form-control" name="featured_event" placeholder="Featured Event" autocomplete="off" value="{{ $item->featured_event }}">
                      </div>
                      <div class="form-group">
                          <label for="language">Language</label>
                          <input type="text" class="form-control" name="language" placeholder="Language" autocomplete="off" value="{{ $item->language }}">
                      </div>
                      <div class="form-group">
                          <label for="foods">Foods</label>
                          <input type="text" class="form-control" name="foods" placeholder="Foods" autocomplete="off" value="{{ $item->foods }}">
                      </div>
                      <div class="form-group">
                          <label for="departure_date">Departure Date</label>
                          <input type="date" class="form-control" name="departure_date" placeholder="Departure Date" autocomplete="off" value="{{ $item->departure_date }}">
                      </div>
                      <div class="form-group">
                          <label for="duration">Duration</label>
                          <input type="text" class="form-control" name="duration" placeholder="Duration" autocomplete="off" value="{{ $item->duration }}">
                      </div>
                      <div class="form-group">
                          <label for="type">Type</label>
                          <input type="text" class="form-control" name="type" placeholder="Type" autocomplete="off" value="{{ $item->type }}">
                      </div>
                      <div class="form-group">
                          <label for="price">Price</label>
                          <input type="number" class="form-control" name="price" placeholder="Price" autocomplete="off" value="{{ $item->price }}">
                      </div>
                    <div class="float-left">
                        <a class="btn btn-secondary px-4" href="{{route('travel-package.index')}}">Kembali</a>
                        <button type="submit" class="btn btn-primary btn-block">Update</button>
                    </div>
                </form>
            </div>
  </div>
  <!-- /.container-fluid -->
@endsection