@extends('layouts.base')

@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <a href="{{ route('users.create') }}" class=" m-2 btn float-right btn-primary">Create</a>
            </div>
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">User Listing</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th style="">Password</th>
                      <th style="width: 150px;">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($users as $key => $user)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <!-- <td>{{ $user->id }}</td> -->
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->password }}</td>
                        <td>
                        <form class="" action="{{ route('users.destroy',$user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                
                                <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
@endsection