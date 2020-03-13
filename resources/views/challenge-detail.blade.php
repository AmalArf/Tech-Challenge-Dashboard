@extends('layouts.auth')

@section('content')
@section('css')
<link rel="stylesheet" href="{{asset('preload.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins.min.css')}}">
<link rel="stylesheet" href="{{asset('style.light-blue-500.min.css')}}">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
@stop
<div style="background-size: cover;
margin-top:-40%;width:100%; height:500%;background-image: url(https://ak1.picdn.net/shutterstock/videos/18356701/thumb/2.jpg);">
<div class="ms-hero-page-override ms-hero-img-coffee ms-bg-fixed ms-hero-bg-primary" style="padding-top:40%">
        <div class="container">
          <div class="text-center mt-2">
          <h1 style="color:aliceblue"class="color-white mt-4 animated fadeInUp animation-delay-10">{{ $challenge->title}}</h1>
          </div>
        </div>
      </div>
      <div class="container">
        <div style="margin: 1%" class="card card-hero card-primary animated fadeInUp animation-delay-7">
          <div class="card-header-100 bg-primary-dark">
            <div style="margin:1%" class="row justify-content-center">
              <div class="col col-md-2">
                <div class="text-center">
                  <h3>
                    <strong>142</strong>
                  </h3> Posts </div>
              </div>
              <div class="col col-md-2">
                <div class="text-center">
                  <h3>
                    <strong>75</strong>
                  </h3> Comments </div>
              </div>
              
            </div>
          </div>
          <div class="row">
            <div class="col-xl-4 col-12">
              <div class="card-block">
                <h2 class="color-primary no-mb">Challenge Information</h2>
              </div>
              <table class="table table-no-border table-striped">
                <tr>
                  <th>
                    <i class="zmdi zmdi-account mr-1 color-royal"></i>Description </th>
                  <td>{{ $challenge->description}}</td>
                </tr>
                <tr>
                  <th>
                    <i class="zmdi zmdi-face mr-1 color-warning"></i> Start Date</th>
                  <td>{{ $challenge->startDate}}</td>
                </tr>
                <tr>
                  <th>
                    <i class="zmdi zmdi-male-female mr-1 color-success"></i> Finish Date</th>
                  <td>{{ $challenge->finishDate}}</td>
                </tr>
                <tr>
                  <th>
                    <i class="zmdi zmdi-email mr-1 color-primary"></i> Status</th>
                  <td>
                    <a href="#">{{ $challenge->status}}</a>
                  </td>
                </tr>
              
              </table>
            </div>
            <div class="col-xl-4 col-md-12">
              <div class="card-block">
                <h2 class="color-primary">Comments</h2>
                <div class="media mb-3">
        
                  <div class="media-body">
                    <h4 class="no-m">
                      <a href="#">List of Participant</a>
                    </h4>


                    <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Participant Name</th>
                            <th scope="col">Code</th>
                            <th scope="col">Set As Winner</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($participants as $participant)
                            
                          <tr>
                            <th scope="row">{{ $participant->id}}</th>
                            <td>{{ $participant->name}}</td>

                            <td>{{ $participant->code}}</td>

                            <td>
                                <form class="col" action="{{ route('setWinner')}}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" class="form-control" value="{{$participant->id}}" name="id_user" >
                                    <input type="hidden" class="form-control" value="{{ $challenge->id_challenge}}" name="id_challenge" >
                              <button type="submit" class="btn btn-primary pull-right">set as winner</button>
                                </form>
                            </td>
                          </tr>
                          @endforeach  

                        </tbody>
                      </table>
                    
                    <p> 
                     
                        
                    </p>

                  </div>
                 
                 
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
     
</div>
      @endsection