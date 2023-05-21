@extends('layouts.base')

@section('content')
<div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">User-Edit</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('users.update', $user->id) }}" method="POST">
                @csrf
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputName">Name</label>
                    <input value="{{ $user->name }}"  name="name" type="text" class="form-control" id="exampleInputName" placeholder="Enter Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input value="{{ $user->email }}" name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input value="{{ $user->password }}" name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>            <!-- /.card -->

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
@endsection