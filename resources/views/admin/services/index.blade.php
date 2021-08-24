@extends('layouts.master')



@section('content')


  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New Blog</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="" method="POST">
          @csrf
          <div class="modal-body">
            <div class="form-group">
              <label for="name" class="col-form-label">Name</label>
              <input type="text" name="name" class="form-control" id="name">
            </div>
            <div class="form-group">
              <label for="email-text" class="col-form-label">Email</label>
              <input type="text" name="email" class="form-control" id="email-text">
            </div>
             <div class="form-group">
              <label for="password" class="col-form-label">Password</label>
              <input type="password" name="password" class="form-control" id="password">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">SAVE</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Users</h4>
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">ADD NEW USER</button>
                @if (session('status'))
                  <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                  </div>
                @endif
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Name
                      </th>
                      <th>
                        Email
                      </th>
                      <th>
                        Role
                      </th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                        </td>
                        <td>
                        </td>

                        <td>
                            <span></span>
                            <span>N\A</span>
                          
                        </td>
                        <td class="text-right">
                          <a href="" class="btn btn-success">EDIT</a>
                        </td>
                        <td class="text-right">
                          <form action="" method="POST">
                            @csrf
                            @method('DELETE')
                            <button href="" class="btn btn-danger">DELETE</button>
                          </form>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection


@section('scripts')

@endsection