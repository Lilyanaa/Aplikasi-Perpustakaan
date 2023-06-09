@extends('layouts.admin')

@section('title', 'Halaman Publisher')

@section('header','Publisher')

@section('content')
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-9">
            <div class="card">
              <div class="card-header">
                <a href="{{ url('publishers/create') }}" class="btn btn-primary pull-right">Create New Publisher</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">No</th>
                      <th class="text-center">Name</th>
                      <th class="text-center">Email</th>
                      <th class="text-center" width="200px">Phone Number</th>
                      <th class="text-center">Address</th>
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($publishers as $key => $publisher)
                        
                    
                    <tr>
                      <td>{{ $key+1 }}</td>
                      <td>{{ $publisher->name }}</td>
                      <td>{{ $publisher->email }}</td>
                      <td>{{ $publisher->phone_number }}</td>
                      <td>{{ $publisher->address }}</td>
                      <td class="text-center">
                        <a href="{{ url('publishers/'.$publisher->id.'/edit') }}" class="btn btn-warning btn-sm">Edit</a>
                        
                        <form action="{{ url('publishers', ['id' => $publisher->id]) }}" method="post">
                          <input class="btn btn-danger btn-sm" type="submit" value="Delete" 
                          onclick="return confirm('Are you sure?')">
                          @method('delete')
                          @csrf
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              {{-- <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div> --}}
            </div>
            <!-- /.card -->
@endsection