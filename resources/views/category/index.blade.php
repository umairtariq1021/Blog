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
        <button class="btn btn-light"><a href="category/show">View all Categories</a></button>
        <button class="btn btn-light"><a href="category/create">Create New Category</a></button>
@endsection