@extends('layouts.admin')
@section('title')
  reports
@endsection
@section('content')
<form id="report" action="{{route('reports')}}" method="POST">
  @csrf
  <input type="date" name="start_date">

  <input type="date" name="end_date">

  <div class="card-body">
      <button type="submit" class="btn btn-primary" >generate report</button>
  </div>
</form>
@endsection
