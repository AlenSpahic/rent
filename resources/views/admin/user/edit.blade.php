@extends('layouts.master')



@section('content')

		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h5>Edit User</h5>
					</div>
					<div class="card-body">
						<form action="{{ Route('user.update', [ $users->id ]) }}" method="POST">
							@csrf
							@method('PUT')
							<div class="form-group">
						    <label for="exampleInputEmail1">Name</label>
						    <input type="text" class="form-control" name="name" id="exampleInputEmail1" value="{{ $users->name }}" aria-describedby="name" placeholder="Enter name">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Email</label>
						    <input type="email" class="form-control" name="email" id="exampleInputEmail1" value="{{ $users->email }}" aria-describedby="emailHelp" placeholder="Enter email">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Role</label>
						    <select class="form-control" name="role">
						    	<option>Administrator</option>
						    	<option>User</option>
						    </select>
						  </div>
						  <button type="submit" class="btn btn-success">SAVE</button>
						  <a href="{{Route('user.index')}}" class="btn btn-danger">CANCEL</a>
						</form>
					</div>
				</div>
			</div>
		</div>

@endsection


@section('scripts')

@endsection