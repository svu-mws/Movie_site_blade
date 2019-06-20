@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  >

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('Birth day') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="date" class="form-control" name="Birth_day">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('relation_status') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="text" class="form-control" name="relation_status">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('age') }}</label>

                            <div class="col-md-6">
                                <input id="age" type="number" class="form-control" name="age" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Education_level') }}</label>

                            <div class="col-md-6">
                                <input id="Education_level" type="text" class="form-control" name="Education_level" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('gender') }}</label>

                            <div class="col-md-6">
                                <input id="gender" type="text" class="form-control" name="gender"  >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('homeonership') }}</label>

                            <div class="col-md-6">
                                <input id="gender" type="text" class="form-control" name="homeonership"  >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('internetconnection') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="text" class="form-control" name="internetconnection"  >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('material_status') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="text" class="form-control" name="material_status"  >
                            </div>
                        </div>


                        <div class="form-group row">
                          <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('movie_selector') }}</label>

                          <div class="col-md-6">
                              <input id="password-confirm" type="text" class="form-control" name="movie_selector"  >
                          </div>
                        </div>


                        <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('num_bathrooms') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="text" class="form-control" name="num_bathrooms"  >
                        </div>
                        </div>


                        <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('num_bedrooms') }}</label>

                        <div class="col-md-6">
                          <input id="password-confirm" type="text" class="form-control" name="num_bedrooms"  >
                        </div>
                        </div>


                        <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('num_cars') }}</label>

                        <div class="col-md-6">
                        <input id="password-confirm" type="text" class="form-control" name="num_cars"  >
                        </div>
                        </div>


                        <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('num_cheildren') }}</label>

                        <div class="col-md-6">
                        <input id="password-confirm" type="text" class="form-control" name="num_cheildren"  >
                        </div>
                        </div>

                        <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('num_Tvs') }}</label>

                        <div class="col-md-6">
                          <input id="password-confirm" type="text" class="form-control" name="num_Tvs"  >
                        </div>
                        </div>
                        <div class="form-group row">
                          <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('PPV_freq') }}</label>

                          <div class="col-md-6">
                              <input id="password-confirm" type="text" class="form-control" name="PPV_freq"  >
                          </div>
                        </div>
                          <div class="form-group row">
                              <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('buying_freq') }}</label>

                              <div class="col-md-6">
                                  <input id="password-confirm" type="text" class="form-control" name="buying_freq"  >
                              </div>
                              </div>
                              <div class="form-group row">
                                  <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('format') }}</label>

                                  <div class="col-md-6">
                                      <input id="password-confirm" type="text" class="form-control" name="format"  >
                                  </div>
                        </div>
                                  <div class="form-group row">
                                      <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('renting_freq') }}</label>

                                      <div class="col-md-6">
                                          <input id="password-confirm" type="text" class="form-control" name="renting_freq"  >
                                      </div>
                                      </div>
                                      <div class="form-group row">
                                          <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Viewing_freq') }}</label>

                                          <div class="col-md-6">
                                              <input id="password-confirm" type="text" class="form-control" name="Viewing_freq"  >
                                          </div>
                                          </div>
                                          <div class="form-group row">
                                              <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Threater_freq') }}</label>

                                              <div class="col-md-6">
                                                  <input id="password-confirm" type="text" class="form-control" name="Threater_freq"  >
                                              </div>
                                              </div>
                                            
                                                  <div class="form-group row">
                                                      <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Tv_movie_freq') }}</label>

                                                      <div class="col-md-6">
                                                          <input id="password-confirm" type="text" class="form-control" name="Tv_movie_freq"  >
                                                      </div>
                                                      </div>
                                                      <div class="form-group row">
                                                          <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Tv_signal') }}</label>

                                                          <div class="col-md-6">
                                                              <input id="password-confirm" type="text" class="form-control" name="Tv_signal"  >
                                                          </div>
                                                      </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
