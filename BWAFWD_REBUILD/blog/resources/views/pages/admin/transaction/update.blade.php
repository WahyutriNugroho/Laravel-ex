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
                <form action="{{ route('transaction.update', $item->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="transaction_status">Transaction Status</label>
                        <select name="transaction_status" class="form-control" required>
                            <option value="{{$item->transaction_status}}">Status Saat Ini {{$item->transaction_status}}</option>
                            <option value="PENDING">PENDING</option>
                            <option value="SUCCESS">SUCCESS</option>
                            <option value="CANCEL">CANCEL</option>
                            <option value="FAILED">FAILED</option>
                        </select>
                      </div>
                    <div class="float-left">
                        <a class="btn btn-secondary px-4" href="{{route('transaction.index')}}">Kembali</a>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
  </div>
  <!-- /.container-fluid -->
@endsection