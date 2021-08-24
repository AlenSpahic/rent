@extends('layouts.master')



@section('content')

		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h5>Edit Blog</h5>
					</div>
					<div class="card-body">
						<form action="{{ Route('blog.update', [ $blog->id ]) }}" method="POST">
							@csrf
							@method('PUT')
							<div class="form-group">
						    <label for="exampleInputEmail1">Title</label>
						    <input type="text" class="form-control" name="title" id="exampleInputEmail1" value="{{ $blog->title }}" aria-describedby="title" placeholder="Enter title">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Subtitle</label>
						    <input type="tex" class="form-control" name="subtitle" id="exampleInputEmail1" value="{{ $blog->subtitle }}" aria-describedby="subtitle" placeholder="Enter subtitle">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Content</label>
						    <textarea class="form-control" name="content" id="exampleInputEmail1" value="{{ $blog->content }}" aria-describedby="content" placeholder="Enter content"></textarea>
						  </div>
						  
						  <button type="submit" class="btn btn-success">SAVE</button>
						  <a href="{{Route('blog.index')}}" class="btn btn-danger">CANCEL</a>
						</form>
					</div>
				</div>
			</div>
		</div>

@endsection


@section('scripts')