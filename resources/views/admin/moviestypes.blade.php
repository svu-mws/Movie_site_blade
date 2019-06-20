@extends('layouts.admin')
@section('title')
    movies types
@endsection
@section('content')
    <a href="{{route('addnewtype')}}" class="btn btn-primary">Add movie type</a>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title m-b-0">movie type</h5>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>

                        <th scope="col">created_at</th>
                        <th scope="col">action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($moviestypes as $moviestype)
                        <tr>
                            <!-- <th scope="row">3</th> -->
                            <td>{{$moviestype->id}}</td>
                            <td>{{$moviestype->name}}</td>

                            <td>{{ \Carbon\Carbon::parse($moviestype->created_at)->diffForHumans()}}</td>
                            <td>
                                <form id="deletemovietype-{{$moviestype->id}}" action="{{Route('Admindeletemoviestype',$moviestype->id)}}" method="POST">
                                    @csrf
                                </form>
                                <button type="button" class="btn btn-danger" onclick="document.getElementById('deletemovietype-{{$moviestype->id}}').submit()">X</button>
                                <>
                                <a href="{{route('Admineditmoviestype',$moviestype->id)}}" >  Edit </a>
                            </td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
@endsection
