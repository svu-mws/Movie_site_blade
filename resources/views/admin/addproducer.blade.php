
use Illuminate\Support\Facades\Session;
@extends('layouts.admin')

@section('title')
    New producer
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
                <form id="Add_producer" class="form-horizontal" action="{{route('addnewproducerpost')}}" method="POST">
                    @csrf
                    <div class="card-body">
                        <h4 class="card-title">New producer</h4>
                        <div class="form-group row">
                            <label for="fname"  class="col-sm-3 text-right control-label col-form-label">producer name</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" class="form-control" id="fname" placeholder="producer name">
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
                            <button type="submit" class="btn btn-primary" >Add Producer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
