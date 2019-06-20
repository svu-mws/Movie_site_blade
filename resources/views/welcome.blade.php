@extends('master.master')
@section('content')

    <div class="w3_agilits_banner_bootm">
        <section class="search-sec">
            <div class="container">
                <form id="serachformovie"  method="get" action="{{route('search')}}" novalidate="novalidate">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                    <input name="moviename" type="text" class="form-control search-slt" placeholder="Enter Movie Name">
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                    <input name="producersname" type="text" class="form-control search-slt" placeholder="Enter Producer Name">
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                    <input name="actorsname" type="text" class="form-control search-slt" placeholder="Enter Actor Name">
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                    <select name="$typesname" class="form-control search-slt" id="exampleFormControlSelect1">
                                        @foreach($type as $Genre)
                                            <option>{{$Genre->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                </br>
                                <div  align="center">
                                    <button type="button"  class="btn btn-danger wrn-btn" onclick="document.getElementById('serachformovie').submit()">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <div class="w3_agilits_banner_bootm">
            <section class="search-sec">
                <div class="container">
                    <h2>movie</h2>
                    <a href="{{ url('searchmovie/a')}}"><i  aria-hidden="true">A  |</i></a>
                    <a href="{{ url('searchmovie/b')}}"><i  aria-hidden="true"></i>B   |  </a>
                            <a href="{{ url('searchmovie/c')}}"><i  aria-hidden="true">C   |</i></a>
                            <a href="{{ url('searchmovie/d')}}"><i  aria-hidden="true">D   |</i></a>
                            <a href="{{ url('searchmovie/e')}}"><i  aria-hidden="true">E   |</i></a>
                            <a href="{{ url('searchmovie/f')}}"><i  aria-hidden="true">F   |</i></a>
                            <a href="{{ url('searchmovie/g')}}"><i  aria-hidden="true">G   |</i></a>
                            <a href="{{ url('searchmovie/h')}}"><i  aria-hidden="true">H   |</i></a>
                            <a href="{{ url('searchmovie/i')}}"><i  aria-hidden="true">I   |</i></a>
                            <a href="{{ url('searchmovie/j')}}"><i  aria-hidden="true">j   |</i></a>
                            <a href="{{ url('searchmovie/k')}}"><i  aria-hidden="true">K   |</i></a>
                            <a href="{{ url('searchmovie/l')}}"><i  aria-hidden="true">L   |</i></a>
                            <a href="{{ url('searchmovie/m')}}"><i  aria-hidden="true">M   |</i></a>
                            <a href="{{ url('searchmovie/n')}}"><i  aria-hidden="true">N   |</i></a>
                            <a href="{{ url('searchmovie/o')}}"><i  aria-hidden="true">O   |</i></a>

                            <a href="{{ url('searchmovie/p')}}"><i  aria-hidden="true">P   |</i></a>
                            <a href="{{ url('searchmovie/q')}}"><i  aria-hidden="true">Q   |</i></a>
                            <a href="{{ url('searchmovie/r')}}"><i  aria-hidden="true">R   |</i></a>
                            <a href="{{ url('searchmovie/s')}}"><i  aria-hidden="true">S   |</i></a>
                            <a href="{{ url('searchmovie/t')}}"><i  aria-hidden="true">T   |</i></a>
                            <a href="{{ url('searchmovie/u')}}"><i  aria-hidden="true">U   |</i></a>
                            <a href="{{ url('searchmovie/v')}}"><i  aria-hidden="true">V   |</i></a>
                            <a href="{{ url('searchmovie/w')}}"><i  aria-hidden="true">W   |</i></a>
                            <a href="{{ url('searchmovie/x')}}"><i  aria-hidden="true">X   |</i></a>
                            <a href="{{ url('searchmovie/y')}}"><i  aria-hidden="true">Y   |</i></a>
                    <a href="{{ url('searchmovie/z')}}"><i  aria-hidden="true">Z   |</i></a>

                </div>
                <div class="container">
                    <h2>producer</h2>
                    <a href="{{ url('searchproducer/a')}}"><i  aria-hidden="true">A  |</i></a>
                    <a href="{{ url('searchproducer/b')}}"><i  aria-hidden="true"></i>B   |  </a>
                    <a href="{{ url('searchproducer/c')}}"><i  aria-hidden="true">C   |</i></a>
                    <a href="{{ url('searchproducer/d')}}"><i  aria-hidden="true">D   |</i></a>
                    <a href="{{ url('searchproducer/e')}}"><i  aria-hidden="true">E   |</i></a>
                    <a href="{{ url('searchproducer/f')}}"><i  aria-hidden="true">F   |</i></a>
                    <a href="{{ url('searchproducer/g')}}"><i  aria-hidden="true">G   |</i></a>
                    <a href="{{ url('searchproducer/h')}}"><i  aria-hidden="true">H   |</i></a>
                    <a href="{{ url('searchproducer/i')}}"><i  aria-hidden="true">I   |</i></a>
                    <a href="{{ url('searchproducer/j')}}"><i  aria-hidden="true">j   |</i></a>
                    <a href="{{ url('searchproducer/k')}}"><i  aria-hidden="true">K   |</i></a>
                    <a href="{{ url('searchproducer/l')}}"><i  aria-hidden="true">L   |</i></a>
                    <a href="{{ url('searchproducer/m')}}"><i  aria-hidden="true">M   |</i></a>
                    <a href="{{ url('searchproducer/n')}}"><i  aria-hidden="true">N   |</i></a>
                    <a href="{{ url('searchproducer/o')}}"><i  aria-hidden="true">O   |</i></a>

                    <a href="{{ url('searchproducer/p')}}"><i  aria-hidden="true">P   |</i></a>
                    <a href="{{ url('searchproducer/q')}}"><i  aria-hidden="true">Q   |</i></a>
                    <a href="{{ url('searchproducer/r')}}"><i  aria-hidden="true">R   |</i></a>
                    <a href="{{ url('searchproducer/s')}}"><i  aria-hidden="true">S   |</i></a>
                    <a href="{{ url('searchproducer/t')}}"><i  aria-hidden="true">T   |</i></a>
                    <a href="{{ url('searchproducer/u')}}"><i  aria-hidden="true">U   |</i></a>
                    <a href="{{ url('searchproducer/v')}}"><i  aria-hidden="true">V   |</i></a>
                    <a href="{{ url('searchproducer/w')}}"><i  aria-hidden="true">W   |</i></a>
                    <a href="{{ url('searchproducer/x')}}"><i  aria-hidden="true">X   |</i></a>
                    <a href="{{ url('searchproducer/y')}}"><i  aria-hidden="true">Y   |</i></a>
                    <a href="{{ url('searchproducer/z')}}"><i  aria-hidden="true">Z   |</i></a>

                </div>
                <div class="container">
                    <h2>actor</h2>
                    <a href="{{ url('searchactor/a')}}"><i  aria-hidden="true">A  |</i></a>
                    <a href="{{ url('searchactor/b')}}"><i  aria-hidden="true"></i>B   |  </a>
                    <a href="{{ url('searchactor/c')}}"><i  aria-hidden="true">C   |</i></a>
                    <a href="{{ url('searchactor/d')}}"><i  aria-hidden="true">D   |</i></a>
                    <a href="{{ url('searchactor/e')}}"><i  aria-hidden="true">E   |</i></a>
                    <a href="{{ url('searchactor/f')}}"><i  aria-hidden="true">F   |</i></a>
                    <a href="{{ url('searchactor/g')}}"><i  aria-hidden="true">G   |</i></a>
                    <a href="{{ url('searchactor/h')}}"><i  aria-hidden="true">H   |</i></a>
                    <a href="{{ url('searchactor/i')}}"><i  aria-hidden="true">I   |</i></a>
                    <a href="{{ url('searchactor/j')}}"><i  aria-hidden="true">j   |</i></a>
                    <a href="{{ url('searchactor/k')}}"><i  aria-hidden="true">K   |</i></a>
                    <a href="{{ url('searchactor/l')}}"><i  aria-hidden="true">L   |</i></a>
                    <a href="{{ url('searchactor/m')}}"><i  aria-hidden="true">M   |</i></a>
                    <a href="{{ url('searchactor/n')}}"><i  aria-hidden="true">N   |</i></a>
                    <a href="{{ url('searchactor/o')}}"><i  aria-hidden="true">O   |</i></a>

                    <a href="{{ url('searchactor/p')}}"><i  aria-hidden="true">P   |</i></a>
                    <a href="{{ url('searchactor/q')}}"><i  aria-hidden="true">Q   |</i></a>
                    <a href="{{ url('searchactor/r')}}"><i  aria-hidden="true">R   |</i></a>
                    <a href="{{ url('searchactor/s')}}"><i  aria-hidden="true">S   |</i></a>
                    <a href="{{ url('searchactor/t')}}"><i  aria-hidden="true">T   |</i></a>
                    <a href="{{ url('searchactor/u')}}"><i  aria-hidden="true">U   |</i></a>
                    <a href="{{ url('searchactor/v')}}"><i  aria-hidden="true">V   |</i></a>
                    <a href="{{ url('searchactor/w')}}"><i  aria-hidden="true">W   |</i></a>
                    <a href="{{ url('searchactor/x')}}"><i  aria-hidden="true">X   |</i></a>
                    <a href="{{ url('searchactor/y')}}"><i  aria-hidden="true">Y   |</i></a>
                    <a href="{{ url('searchactor/z')}}"><i  aria-hidden="true">Z   |</i></a>

                </div>
            </section>
        </div>
    </div>
    </div>
    <div class="w3_content_agilleinfo_inner">
        <div class="agile_featured_movies">
            <!--/agileinfo_tabs-->
            <div class="agileinfo_tabs">
                <!--/tab-section-->
                <div id="horizontalTab">
                    <ul class="resp-tabs-list">
                        <li>Recent</li>
                        <li>Popularity</li>
                        <li>Top Index</li>

                    </ul>

                    <div class="resp-tabs-container">


                        <div class="tab3">
                            @if(isset($details))
                                @foreach($details as $movie)
                                    <div class="tab_movies_agileinfo">

                                        <div class="w3_agile_featured_movies">
                                            <div class="col-md-2 video_agile_player " >

                                                <a href="{{route('movie',$movie->id)}}" class="hvr-sweep-to-bottom"><img src="{{asset('Templates/template_2/images/'.$movie->thumbnail)}}"
                                                                                                                         title="Movies Pro"
                                                                                                                         class="img-responsive" alt="" align="left" >
                                                    <div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i>
                                                    </div>
                                                </a>
                                                <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                    <div class="w3l-movie-text">
                                                        <h6><a href="{{route('movie',$movie->id)}}">{{$movie->name}} </a></h6>
                                                    </div>
                                                    <div class="mid-2 agile_mid_2_home">
                                                        <p>{{ \Carbon\Carbon::parse($movie->created_at)->diffForHumans()}}</p>
                                                        <div class="block-stars">
                                                            <ul class="w3l-ratings" >
                                                                price: {{$movie->price .'$'}}
                                                                rate: {{$movie->rates()->avg('rate')}}
                                                            </ul>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                                <div class="ribben">

                                                </div>

                                            </div>
                                        </div>

                                    </div>


                                    <div class="clearfix"></div>
                                @endforeach
                                @else
                            @foreach($allmovies as $movie)
                                <div class="tab_movies_agileinfo">

                                    <div class="w3_agile_featured_movies">
                                        <div class="col-md-2 video_agile_player " >

                                            <a href="{{route('movie',$movie->id)}}" class="hvr-sweep-to-bottom"><img src="{{asset('Templates/template_2/images/'.$movie->thumbnail)}}"
                                                                                                                           title="Movies Pro"
                                                                                                                           class="img-responsive" alt="" align="left" >
                                                <div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i>
                                                </div>
                                            </a>
                                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                <div class="w3l-movie-text">
                                                    <h6><a href="{{route('movie',$movie->id)}}">{{$movie->name}} </a></h6>
                                                </div>
                                                <div class="mid-2 agile_mid_2_home">
                                                    <p>{{ \Carbon\Carbon::parse($movie->created_at)->diffForHumans()}}</p>
                                                    <div class="block-stars">
                                                        <ul class="w3l-ratings" >
                                                            price: {{$movie->price .'$'}}
                                                            rate: {{$movie->rates()->avg('rate')}}
                                                        </ul>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="ribben">

                                            </div>

                                        </div>
                                    </div>

                                </div>


                                <div class="clearfix"></div>
                            @endforeach
                                @endif
                        </div>
                        <div class="cleafix"></div>

                    </div>
                </div>


            </div>
        </div>

    </div>


    <!--//tab-section-->
    <h3 class="agile_w3_title"> Latest <span>Movies</span></h3>
    <!--/movies-->


    <!--//top-movies-->
    </div>
    </div>
    <!--//content-inner-section-->

@endsection
