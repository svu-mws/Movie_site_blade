
use Illuminate\Support\Facades\Session;
@extends('layouts.admin')

@section('title')
    editing{{$moviestypes->name}}
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
                <form  method="post" id="edituser_id" class="form-horizontal" action="{{route('Admineditmoviestype',$moviestypes->id)}}">
                    @csrf
                    <div class="card-body">
                        <h4 class="card-title">editing : {{$moviestypes->name}}</h4>
                        <div class="form-group row">
                            <label for="fname"  class="col-sm-3 text-right control-label col-form-label">movie type name</label>
                            <div class="col-sm-9">
                                <input name="name" type="text"  class="form-control" id="fname" value="{{$moviestypes->name}}"></input>
                            </div>
                        </div>

                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary" >edit movie type</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
