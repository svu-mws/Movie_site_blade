
@extends('layouts.admin')
@section('title')
  User comments
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title m-b-0">User comments</h5>
            </div>
            <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">content</th>
                      <th scope="col">movie</th>
                      <th scope="col">created_at</th>
                      <th scope="col"> action</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach(Auth::user()->comments as $comment)
                    <tr>
                       <!-- <th scope="row">3</th> -->
                      <td>{{$comment->id}}</td>
                      <td>{{$comment->content}}</td>
                      <td><a href="{{Route('movie',$comment->id)}}">{{$comment->movie->title}}</a></td>
                      <td>{{ \Carbon\Carbon::parse($comment->created_at)->diffForHumans()}}</td>

                      <td>
                        <form id="deletecomment-{{$comment->id}}" action="{{Route('deletecomment',$comment->id)}}" method="movie">
                          @csrf
                        </form>
                        <button type="button" class="btn btn-danger" onclick="document.getElementById('deletecomment-{{$comment->id}}').submit()">X</a>
                      </td>
                    </tr>
                    @endforeach

                  </tbody>
            </table>
        </div>
@endsection
