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


        <form method="post" action="{{route('category.store')}}">
          @csrf
          <label>Enter New Category</label>
          <input type="text" name="name">
          <input type="submit" name="">
          

        </form>
@endsection