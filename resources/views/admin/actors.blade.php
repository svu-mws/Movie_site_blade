@extends('layouts.admin')
@section('title')
    actors
@endsection
@section('content')
    <a href="{{route('addnewactors')}}" class="btn btn-primary">Add movie type</a>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title m-b-0">actors</h5>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">name</th>
                        <th scope="col">image</th>
                        <th scope="col">description</th>

                        <th scope="col">created_at</th>
                        <th scope="col">updated_at</th>
                        <th scope="col"> action</th>

                    </tr>
                    </thead>
                    <tbody>

                    @foreach($actors as $actor)
                        <tr>
                            <!-- <th scope="row">3</th> -->
                            <td>{{$actor->id}}</td>
                            <td>{{$actor->name}}</td>
{{--                            <td><img src="{{asset('moviesPhotos/'.$actor->thumbnail)}}"></td>--}}

                            <td>{{$actor->description}}</td>


                            <td>{{ \Carbon\Carbon::parse($actor->created_at)->diffForHumans()}}</td>
                            <td>{{ \Carbon\Carbon::parse($actor->updated_at)->diffForHumans()}}</td>

                            <td>
                                <form id="deleteactor-{{$actor->id}}" action="{{Route('Admindeleteactor',$actor->id)}}" method="POST">
                                    @csrf
                                </form>
                                <button type="button" class="btn btn-danger" onclick="document.getElementById('deleteactor-{{$actor->id}}').submit()">X</a>
                                </button>
                                <a type="button" class="btn btn-warning" href="{{route('Admineditactor',$actor->id)}}">Edit</a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
@endsection
