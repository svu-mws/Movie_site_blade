@extends('layouts.admin')
@section('title')
    Producers
@endsection
@section('content')
    <a href="{{route('addnewproducer')}}" class="btn btn-primary">Add Producer</a>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title m-b-0">producers</h5>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">photo</th>
                        <th scope="col">created_at</th>
                        <th scope="col">action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($producers as $producer)
                        <tr>
                            <!-- <th scope="row">3</th> -->
                            <td>{{$producer->id}}</td>
                            <td>{{$producer->name}}</td>
                            <td><img src="{{$producer->thumnail}}"></img></td>
                            <td>{{ \Carbon\Carbon::parse($producer->created_at)->diffForHumans()}}</td>
                            <td>
                                <form id="deleteproducer-{{$producer->id}}" action="{{Route('Admindeleteproducer',$producer->id)}}" method="POST">
                                    @csrf
                                </form>
                                <button type="button" class="btn btn-danger" onclick="document.getElementById('deleteproducer-{{$producer->id}}').submit()">X</button>
    <>
                           <a href="{{route('Admineditproducer',$producer->id)}}" >  Edit </a>
                            </td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
@endsection
