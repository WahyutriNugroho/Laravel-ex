@extends('layout.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Paket Travel {{ $item->title}}</h1>
    </div>

    <!-- Content Row -->
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('travel-package.update', $item->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Title" value=" {{$item->title}} ">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="location">Location</label>
                        <input type="text" class="form-control" name="locations" placeholder="Location" value="{{$item->locations}}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="featured_event">Featured Event</label>
                        <input type="text" class="form-control" name="featured_event" placeholder="Featured Event" value="{{$item->featured_event}}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="language">Language</label>
                        <input type="text" class="form-control" name="language" placeholder="Language" value="{{$item->language}}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="foods">Foods</label>
                        <input type="text" class="form-control" name="foods" placeholder="Foods" value="{{$item->foods}}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="departure_date">Departure Date</label>
                        <input type="date" class="form-control" name="departure_date" placeholder="Departure Date" value="{{$item->departure_date}}">
                    </div>
                    
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="type">Type</label>
                        <input type="text" class="form-control" name="type" placeholder="Type" value="{{$item->type}}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" name="price" placeholder="Price" value="{{$item->price}}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="duration">Duration</label>
                        <input type="text" class="form-control" name="duration" placeholder="Duration" value="{{$item->duration}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="about">About</label>
                    <textarea name="about" class="form-control tentang">{{$item->about}}</textarea>
                </div>
                <div class="float-left">
                    <a class="btn btn-secondary px-4" href="{{route('travel-package.index')}}">Kembali</a>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection

