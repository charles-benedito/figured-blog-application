@extends('layouts.dashboard')

@section('content')
<div class="container">
    <br />
    <h2>Create Post</h2>

    <form method="post" action="{{action('PostController@store', ['user_id' => Auth::user()->id])}}">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="title">Title:</label>
            <input type="text" class="form-control" name="title" value="">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-8">
            <label for="text">Content:</label>
            <textarea class="form-control" name="text" style="height: 400px;"></textarea>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>

  </div>
@endsection
