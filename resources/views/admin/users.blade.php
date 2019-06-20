@extends('layouts.admin')
@section('title')
  Admin Users
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title m-b-0">Users</h5>
            </div>
            <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">user name</th>
                      <th scope="col">email</th>

                      <th scope="col">downloaded movies numbers</th>
                      <th scope="col">comments numbers</th>
                      <th scope="col">created_at</th>
                      <th scope="col">updated_at</th>
                      <th scope="col">action</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach($users as $user)
                    <tr>
                       <!-- <th scope="row">3</th> -->
                      <td>{{$user->id}}</td>
                      <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>

                            <td>{{Count($user->Fav_movies)}}</td>
                        <td>{{Count($user->comments)}}</td>

                      <td>{{ \Carbon\Carbon::parse($user->created_at)->diffForHumans()}}</td>
                        <td>{{ \Carbon\Carbon::parse($user->updated_at)->diffForHumans()}}</td>
                      <td>
                        <form id="deleteuser-{{$user->id}}" action="{{Route('admindeleteuser',$user->id)}}" method="post">
                          @csrf
                        </form>


                        <button type="button" class="btn btn-danger" onclick="document.getElementById('deleteuser-{{$user->id}}').submit()">X</button>
                          <a class="btn btn-warning" class="icon icon-pencil" href="{{route('adminedituser',$user->id)}}"></i>edit</a>

                      </td>

                    </tr>
                    @endforeach

                  </tbody>
            </table>
        </div>
@endsection
