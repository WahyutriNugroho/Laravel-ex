@extends('layouts.admin')
@section('content')
  <!-- Begin Page Content -->
  <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            @section('content')
              <!-- Begin Page Content -->
              <div class="container-fluid">
            
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Detail Trasaksi</h1>
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
                
                    <!-- Content Row -->
                    <div class="row">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <tr>
                                        <th>ID</th>
                                        <td>{{$item->id}}</td>
                                    </tr>
                                    <tr>
                                        <th>Destination Travel</th>
                                        <td>{{$item->travel_package->title}}</td>
                                    </tr>
                                    <tr>
                                        <th>Buyer</th>
                                        <td>{{$item->user->username}}</td>
                                    </tr>
                                    <tr>
                                        <th>Addtional Visa</th>
                                        <td>{{$item->additional_visa}}</td>
                                    </tr>
                                    <tr>
                                        <th>Total Transaction</th>
                                        <td>{{$item->transaction_total}}</td>
                                    </tr>
                                    <tr>
                                        <th>Status Transaction</th>
                                        <td>{{$item->transaction_status}}</td>
                                    </tr>
                                    <th>Pembelian</th>
                                    <td>
                                        <table class="table table-bordered">
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Nationality</th>
                                                <th>Visa</th>
                                                <th>DOE Passport</th>
                                            </tr>
                                            @foreach ($item->details as $detail)
                                                <tr>
                                                    <td>{{$detail->id}}</td>
                                                    <td>{{$detail->username}}</td>
                                                    <td>{{$detail->nationality}}</td>
                                                    <td>{{$detail->is_visa ?'30 days': 'N/A'}}</td>
                                                    <td>{{$detail->doe_passport}}</td>
                                                </tr>
                                            @endforeach
                                        </table>
                                    </td>
                                </table>
                                
                            </div>
                        </div>
                    </div>
              </div>
              <!-- /.container-fluid -->
            @endsection
        </div>
  </div>
  <!-- /.container-fluid -->
@endsection