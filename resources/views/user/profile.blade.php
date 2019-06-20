@extends('layouts.admin')

@section('content')

<div class="main_content">

  @if(Session('error'))
    <div class="alert alert-danger">
        {{Session('error')}}
    </div>
  @endif


    @if(Session('success'))
      <div class="alert alert-success">
          {{Session('success')}}
      </div>
    @endif
    @if($errors->any())

        <div class="alert alert-danger">
          <ul>

      @foreach($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
      <ul>


  </div>
    @endif
    <form method="POST" action="{{ route('profileedit') }}">
      @csrf
  <table>
    <tr>
    <td>Email</td>
      <td><input name="Email" type="email" placeholder="{{Auth::user()->email}}"/></td>
    </tr>
    <tr>
      <td>Name</td> <td><input  name="Name" type="text" placeholder="{{Auth::user()->name}}" /></td>
    </tr>


    <tr>  <td>Current Password</td>  <td><input  name="password" type="password" /></td>
    </tr>
        <tr><td>New password</td><td><input  name="Newpassword" type="password" /></td></tr>
      <tr><td>  Confirm new passwor </td><td><input  name="confirmedpassword" type="password" /></td></tr>

      <td><input type="submit" name="submit"></td>

</table>
    </form>





</div>
@endsection
