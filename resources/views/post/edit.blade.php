@extends('admin.main')
@section('content')
<ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.html">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Blank Page</li>
        </ol>

        <!-- Page Content -->
        <h1>Categories </h1>
        <hr>
        <button class="btn btn-light"><a href="show">View all Posts</a></button>
        <button class="btn btn-light"><a href="post/create">Create New post</a></button>
        <hr>
        <form method="post" action="{{ route('post.update', $post->id )}}" enctype="multipart/form-data">
          @method('PATCH')
          @csrf
           <fieldset>
    <legend>Create Post</legend>
    
    <div class="form-group">
      <label for="Title">Enter Title</label>
      <input type="text" class="form-control" value="{{$post->title}}" name="title" placeholder="Enter Title">
      
    </div>
    <div class="form-group">
      <label for="Author">Author</label>
      <input type="text" class="form-control" value="{{$post->author}}" name="author"  placeholder="Enter Author">
    </div>
    <div class="form-group">
      <label for="exampleSelect1">select</label>
      <select class="form-control" name="category_id">
        @foreach($categories as $category)
        <option value="{{$post->category_id}}">{{$category->name}}</option>
      @endforeach
      </select>
    </div>
     <div class="form-group">
      <label for="exampleTextarea">Enter Description</label>
      <textarea class="form-control" placeholder="{{$post->description}}" name="description" rows="3"></textarea>
    </div>
    <div class="form-group">
      <label for="exampleInputFile">File input</label>
      <input type="file" class="form-control-file" name="image"  aria-describedby="fileHelp">
      <small id="fileHelp" class="form-text text-muted">Image</small>
    </div>
 
  
  
   
    <button type="submit" class="btn btn-primary">Update</button>
  </fieldset>
       
          </form>
@endsection