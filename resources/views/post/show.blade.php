@extends('admin.main')
@section('content')
<ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.html">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Blank Page</li>
        </ol>

        <!-- Page Content -->
        <h1>View Post </h1>
        <hr>
        <button class="btn btn-light"><a href="post/show">View all Posts</a></button>
        <button class="btn btn-light"><a href="create">Create New Post</a></button>
        @if(Session::has('cc'))
        <div class="alert alert-success">
          <button class="close" data-dismiss='alert'>*</button>
          <strong>{{session('cc')}}</strong>
        </div>
        @endif
        <hr>
         @if(Session::has('coc'))
        <div class="alert alert-danger">
          <button class="close" data-dismiss='alert'>*</button>
          <strong>{{session('coc')}}</strong>
          <ul>
            @foreach ($errors->all() as $error)
            <li>
              {{$error}}
            </li>
            @endforeach
          </ul>
        </div>
        @endif
        @if(Session::has('dp'))
        <div class="alert alert-danger">
          <button class="close" data-dismiss='alert'>*</button>
          <strong>{{session('dp')}}</strong>
        </div>
        @endif

        <hr>

        <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">Title

      </th>
      <th class="th-sm">Auhtor

      </th>
      <th class="th-sm">Category

      </th>
      <th class="th-sm">Description</th>
      <th class="th-sm">Image</th>
      <th class="th-sm">Edit

      </th>
      <th class="th-sm">Delete

      </th>
    </tr>
  </thead>
  <tbody>
    @foreach($posts->all() as $post)
    <tr>
      <td>{{$post->title}}</td>
      <td>{{$post->author}}</td>
      <td>{{$post->category_id}}</td>
      <td>{{$post->description}}</td>
      <td><img src="{{asset("img/$post->image")}}" width="40"></td>
      <td><a href="{{route('post.edit',$post->id)}}">Edit</a></td>
      <td><form method="post" action="{{route('post.destroy', $post->id)}}">
         @method('DELETE')
          @csrf
      <input type="submit" name="" value="Delete"></td></form>
    </tr>
    @endforeach
  </tbody>
  <tfoot>
    <tr>
      <th>Name
      </th>
      <th>Id
      </th>
      <th>Created Time
      </th>
      <th>Updated Time
      </th>
       <th>Image
      </th>
      <th>Edit
      </th>
      <th>Delete
      </th>
    </tr>
  </tfoot>
</table>
@endsection