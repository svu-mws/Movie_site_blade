@extends('layouts.admin')
@section('title')
  Admin movies
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title m-b-0">Admin movies</h5>
            </div>
            <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">title</th>
                      <th scope="col">description</th>
                      <th scope="col">content</th>
                      <th scope="col">comments number</th>

                      <th scope="col">image</th>

                      <th scope="col">created_at</th>
                      <th scope="col">updated_at</th>
                      <th scope="col"> action</th>

                    </tr>
                  </thead>
                  <tbody>

                    @foreach($movies as $movie)
                    <tr>
                       <!-- <th scope="row">3</th> -->
                      <td>{{$movie->id}}</td>
                      <td>{{$movie->name}}</td>
                      <td>{{$movie->description}}</td>
                      <td><a href="{{Route('movie',$movie->id)}}">{{$movie->name}}</a></td>
                      <td>{{$movie->comments->count()}}</td>
                      <td><img src="{{asset('moviesPhotos/'.$movie->thumbnail)}}"></td>
                      <td>{{ \Carbon\Carbon::parse($movie->created_at)->diffForHumans()}}</td>
                      <td>{{ \Carbon\Carbon::parse($movie->updated_at)->diffForHumans()}}</td>

                      <td>
                        <form id="deletemovie-{{$movie->id}}" action="{{Route('admindeletemovie',$movie->id)}}" method="POST">
                          @csrf
                        </form>
                        <button type="button" class="btn btn-danger" onclick="document.getElementById('deletemovie-{{$movie->id}}').submit()">X</a>
                        </button>
                        <a type="button" class="btn btn-warning" href="{{route('admineditmovie',$movie->id)}}">Edit</a>
                      </td>
                    </tr>
                    @endforeach

                  </tbody>
            </table>
        </div>
@endsection
