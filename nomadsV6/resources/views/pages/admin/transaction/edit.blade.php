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
            <form action="{{ route('transaction.update', $item->id) }}" method="post">
                @csrf
                @method('PUT')

                <form-group>
                    <label for="transaction_status">Transaction Status</label>
                    <select name="transaction_status" class="form-control">
                        <option value="{{ $item->transaction_status}}">Status saat ini {{ $item->transaction_status}}</option>
                        <option value="PENDING">Pending</option>
                        <option value="SUCCESS">Success</option>
                        <option value="CANCEL">Cancel</option>
                        <option value="FAILED">Failed</option>
                    </select>
                </form-group>

                <div class="float-left">
                    <a class="btn btn-secondary px-4" href="{{route('transaction.index')}}">Kembali</a>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection

