@extends('layouts.dashboard')

@section('content')
<div class="container">
    <br />
    <div class="clearfix">
        <h2 class="float-left">Posts</h2>
        <a href="{{action('PostController@create')}}" class="btn btn-success float-right">Create</a> &nbsp;
    </div>

    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Created at</th>
        <th>Options</th>
      </tr>
    </thead>
    <tbody>

      @foreach($posts as $post)
      <tr>
        <td>{{$post->title}}</td>
        <td>{{$post->user->name}}</td>
        <td>{{$post->created_at->diffForHumans()}}</td>
        <td width="155">
          <a href="{{action('PostController@edit', $post->id)}}" class="btn btn-warning">Edit</a> &nbsp;
          <form action="{{action('PostController@destroy', $post->id)}}" method="post" style="display: inline;">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection
