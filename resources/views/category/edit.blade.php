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
        <button class="btn btn-light"><a href="show">View all Categories</a></button>
        <button class="btn btn-light"><a href="category/create">Create New Category</a></button>
        <hr>
        <form method="post" action="{{ route('category.update', $category->id )}}">
          @method('PATCH')
          @csrf
          <label>Enter New Category</label>
          <input type="text" name="name" value="{{ $category->name }}">
          <input type="submit" name="" value="Update">
          </form>
@endsection