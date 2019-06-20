
use Illuminate\Support\Facades\Session;
@extends('layouts.admin')

@section('title')
    add New actor
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
                <form id="addnewactor_id" class="form-horizontal" action="{{route('addnewactorspost')}}" method="POST">
                    @csrf
                    <div class="card-body">
                        <h4 class="card-title">new actor</h4>
                        <div class="form-group row">
                            <label for="fname"  class="col-sm-3 text-right control-label col-form-label">actor name</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" class="form-control" id="fname" placeholder="actor name ">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cono1"  class="col-sm-3 text-right control-label col-form-label">description</label>
                            <div class="col-sm-9">
                                <textarea name="description" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cono1"  class="col-sm-3 text-right control-label col-form-label">Image</label>
                            <div class="col-sm-9">
                                <input type="file" name="thumbnail"  class="form-control" >
                            </div>
                        </div>

                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary" >add new actor</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
