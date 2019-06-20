
use Illuminate\Support\Facades\Session;
@extends('layouts.admin')

@section('title')
    add New movie type
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
                <form id="Add_movietyoe" class="form-horizontal" action="{{route('addnewtypepost')}}" method="POST">
                    @csrf
                    <div class="card-body">
                        <h4 class="card-title">New movie type</h4>
                        <div class="form-group row">
                            <label for="fname"  class="col-sm-3 text-right control-label col-form-label">movie type title</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" class="form-control" id="fname" placeholder="movie type title">
                            </div>
                        </div>





                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary" >Add movie type</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
