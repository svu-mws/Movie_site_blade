
use Illuminate\Support\Facades\Session;
@extends('layouts.admin')

@section('title')
  New movie
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
            <form id="Createmovie_id" class="form-horizontal" action="{{route('uploadmoviepost')}}" method="POST">
              @csrf
                <div class="card-body">
                    <h4 class="card-title">New movie</h4>
                    <div class="form-group row">
                        <label for="fname"  class="col-sm-3 text-right control-label col-form-label">movie title</label>
                        <div class="col-sm-9">
                            <input type="text" name="title" class="form-control" id="fname" placeholder="movie title">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="cono1"  class="col-sm-3 text-right control-label col-form-label">content</label>
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
                    <div class="form-group row">
                        <label for="cono1"  class="col-sm-3 text-right control-label col-form-label">price</label>
                        <div class="col-sm-9">
                            <input name="price" type="double" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cono1"  class="col-sm-3 text-right control-label col-form-label">producer_id</label>
                        <div class="col-sm-9">
                                <select name="prodicer_id" multiple style="width: 600px";>
                                    @foreach($producers as $producer)
                                    <option value ="{{$producer->id}}" data-width=100>Id :   {{$producer->id }} , Name : {{ $producer->name}}</option>
                                    @endforeach
                                </select>

{{--                               <input name="prodicer_id" type="number" class="form-control"></textarea>--}}

                        </div>
                    </div>
                </div>
                <div class="border-top">
                    <div class="card-body">
                        <button type="submit" class="btn btn-primary" >Create movie</button>
                    </div>
                </div>
            </form>
        </div>
      </div>
    </div>


@endsection
