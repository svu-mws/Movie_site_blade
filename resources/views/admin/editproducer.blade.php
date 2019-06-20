
use Illuminate\Support\Facades\Session;
@extends('layouts.admin')

@section('title')
    editing{{$producer->name}}
@endsection
@section('content')
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                @if(Session::has('success'))
                    <div class= "alert alert-success">
                        {{Session::get('success')}}
                    </div>
                @endif;
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>
                                    {{$error}}
                                </li>
                            @endforeach;
                        </ul>
                    </div>
                @endif;
                <form  method="post" id="editproducer_id" class="form-horizontal" action="{{route('Admineditproducer',$producer->id)}}">
                    @csrf
                    <div class="card-body">
                        <h4 class="card-title">editing : {{$producer->name}}</h4>
                        <div class="form-group row">
                            <label for="fname"  class="col-sm-3 text-right control-label col-form-label">Producer name</label>
                            <div class="col-sm-9">
                                <input name="name" type="text"  class="form-control" id="fname" value="{{$producer->name}}"></input>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="cono1"  class="col-sm-3 text-right control-label col-form-label">image</label>
                            <input name="thumbnail" type="file" value="{{asset('moviesPhotos'.$producer->thumnail)}}"> </input>
                            <br>

                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary" >edit producer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
