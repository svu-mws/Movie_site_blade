@extends('layouts.admin')
@section('title')
  generate report
@endsection
@section('content')
<form id="report" action="route('reports')" method="POST">
  @csrf
  <input type="date" name="start_date">

  <input type="date" name="end_date">

  <div class="card-body">
      <button type="submit" class="btn btn-primary" >generate report</button>
  </div>
</form>

<table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">title</th>
          <th scope="col">description</th>
          <th scope="col">content</th>
          <th scope="col">comments number</th>
            <th scope="col">price</th>




        </tr>
      </thead>


  <div class= "alert alert-success">

          <div >
             <ul>


                      <tbody>

                      @foreach ($Downloaded_movies as $order)
                        <tr>
                           <!-- <th scope="row">3</th> -->
                          <td>{{$order->id}}</td>
                          <td>{{$order->movies()->name}}</td>
                          <td>{{$order->movies()->description}}</td>
                          <td><a href="{{Route('movie',$order->movies()->id)}}">{{$order->movies()->name}}</a></td>
                          <td>{{$order->movies()->comments->count()}}</td>
                            <td>{{$order->movies()->price}}</td>



                        </tr>
                        @endforeach

                      </tbody>



             </ul>
          </div>

  </div>
</table>


@endsection
