@extends('admin.main')
@section('content')
<ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.html">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Blank Page</li>
        </ol>

        <!-- Page Content -->
        <h1> Create Posts </h1>
        <hr>
        <button class="btn btn-light"><a href="show">View all Posts</a></button>
        <button class="btn btn-light"><a href="post/create">Create New Post</a></button>
        <hr>
        @if(Session::has('cc'))
        <div class="alert alert-success">
          <button class="close" data-dismiss='alert'>*</button>
          <strong>{{session('cc')}}</strong>
        </div>
        @endif
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
        <div class="container">
          <form method="post" action="{{route('post.store')}}" enctype="multipart/form-data">
            @csrf
  <fieldset>
    <legend>Create Post</legend>
    
    <div class="form-group">
      <label for="Title">Enter Title</label>
      <input type="text" class="form-control" name="title" placeholder="Enter Title">
      
    </div>
    <div class="form-group">
      <label for="Author">Author</label>
      <input type="text" class="form-control" name="author"  placeholder="Enter Author">
    </div>
    <div class="form-group">
      <label for="exampleSelect1">select</label>
      <select class="form-control" name="category_id">
        @foreach($categories as $category)
        <option value="{{$category->id}}">{{$category->name}}</option>
      @endforeach
      </select>
    </div>
     <div class="form-group">
      <label for="exampleTextarea">Enter Description</label>
      <textarea class="form-control" name="description" rows="3"></textarea>
    </div>
    <div class="form-group">
      <label for="exampleInputFile">File input</label>
      <input type="file" class="form-control-file" name="image"  aria-describedby="fileHelp">
      <small id="fileHelp" class="form-text text-muted">Image</small>
    </div>
 
  
  
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
        </div>
@endsection