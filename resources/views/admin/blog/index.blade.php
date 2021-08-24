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
        <form action="{{ Route( 'blog.store')}}" method="POST">
          @csrf
          <div class="modal-body">
              <div class="form-group">
                <label for="title-name" class="col-form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title-name">
              </div>
              <div class="form-group">
                <label for="subtitle-text" class="col-form-label">Subtitle</label>
                <input type="text" name="subtitle" class="form-control" id="subtitle-text">
              </div>
              <div class="form-group">
                <label for="content-text" class="col-form-label">Content:</label>
                <textarea name="content" class="form-control" id="content-text"></textarea>
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
                <h4 class="card-title">Blog</h4>
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">ADD New Blog</button>

                @if (session('status'))
                  <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                  </div>
                @endif
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="datatable" class="table">
                    <thead class=" text-primary">
                      <th>
                        Title
                      </th>
                      <th>
                        Subtitle
                      </th>
                      <th>
                        Content
                      </th>
                    </thead>
                    <tbody>
                      @foreach( $blogs as $blog  )
                      <tr>
                        <td>
                        {{ $blog->title }}
                        </td>
                        <td>
                        {{ $blog->subtitle }}
                        </td>
                        <td>
                        {{ $blog->content }}
                        </td>
                        <td class="text-right">
                          <a href="{{ Route( 'blog.edit', ['blog' => $blog])}}" class="btn btn-success">EDIT</a>
                        </td>
                        <td class="text-right">
                          <form action="{{ Route( 'blog.destroy', ['blog' => $blog])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button href="" class="btn btn-danger">DELETE</button>
                          </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection


  <script type="text/javascript">
    $(document).ready( function () {
      $('#datatable').DataTable();
    } );
  </script>
