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
            <div class="col-xl-4 col-md-6">
              <div class="card-block">
                <h2 class="color-primary">Comments</h2>
                <div class="media mb-3">
        
                  <div class="media-body">
                    <h4 class="no-m">
                      <a href="#">Lorem ipsum dolor sit</a>
                    </h4>
                    <p> hhhhh
                        @foreach($results as $result)
                        {{ $results->count()}}</p>

                        @endforeach  
                  </div>
                 
                 
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-6">
              <div class="card-block">
                <h2 class="color-primary">Recent contacts</h2>
                <div class="ms-media-list">
                  <div class="media mb-2">

                   
                        
                    <div class="media-body">
                      <h4 class="mt-0 mb-0 color-warning">Maria Sharaphova</h4>
                      <a href="mailto:joe@example.com?subject=feedback">maria.sha@example.com</a>
                      <div class="">
                        <a href="javascript:void(0)" class="btn-circle btn-circle-xs no-mr-md btn-facebook">
                          <i class="zmdi zmdi-facebook"></i>
                        </a>
                        <a href="javascript:void(0)" class="btn-circle btn-circle-xs no-mr-md btn-twitter">
                          <i class="zmdi zmdi-twitter"></i>
                        </a>
                        <a href="javascript:void(0)" class="btn-circle btn-circle-xs no-mr-md btn-instagram">
                          <i class="zmdi zmdi-instagram"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="media mb-2">
                    <div class="media-left media-middle">
                      
                    </div>
                    <div class="media-body">
                      <h4 class="mt-0 mb-0 color-warning">Rafael Nadal</h4>
                      <a href="mailto:joe@example.com?subject=feedback">rafa.nad@example.com</a>
                      <div class="">
                        <a href="javascript:void(0)" class="btn-circle btn-circle-xs no-mr-md btn-facebook">
                          <i class="zmdi zmdi-facebook"></i>
                        </a>
                        <a href="javascript:void(0)" class="btn-circle btn-circle-xs no-mr-md btn-twitter">
                          <i class="zmdi zmdi-twitter"></i>
                        </a>
                        <a href="javascript:void(0)" class="btn-circle btn-circle-xs no-mr-md btn-instagram">
                          <i class="zmdi zmdi-instagram"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="media mb-2">
                    <div class="media-left media-middle">
                    
                    </div>
                    <div class="media-body">
                      <h4 class="mt-0 mb-0 color-warning">Roger Federer</h4>
                      <a href="mailto:joe@example.com?subject=feedback">roger.fef@example.com</a>
                      <div class="">
                        <a href="javascript:void(0)" class="btn-circle btn-circle-xs no-mr-md btn-facebook">
                          <i class="zmdi zmdi-facebook"></i>
                        </a>
                        <a href="javascript:void(0)" class="btn-circle btn-circle-xs no-mr-md btn-twitter">
                          <i class="zmdi zmdi-twitter"></i>
                        </a>
                        <a href="javascript:void(0)" class="btn-circle btn-circle-xs no-mr-md btn-instagram">
                          <i class="zmdi zmdi-instagram"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     
</div>
      @endsection