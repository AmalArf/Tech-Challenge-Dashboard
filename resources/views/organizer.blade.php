@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div>



                <ul  style="padding:1.25em" class="nav nav-tabs" id="pills-tab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="pills-challenge-tab" data-toggle="pill" href="#pills-challenge" role="tab" aria-controls="pills-home" aria-selected="true">Manage Challenges</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Manage Users</a>
                    </li>

                  </ul>

                </div>
                {{-- <div class="card-body">
                    Hi there, awesome organizer
                </div> --}}


                  <div class="tab-content" id="pills-tabContent">



                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...jjj</div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
                    <div class="tab-pane fade show active" id="pills-challenge" aria-labelledby="pills-challenge-tab">
                        <div>
                            @include('challenge')
                        </div>
                               <div class="row">
                                    <div class="col-11">
                                      <table class="table table-bordered" id="laravel_crud" style="margin-left: 5%;margin-right: 5%">
                                       <thead>
                                          <tr>
                                             <th>Id</th>
                                             <th>Title</th>
                                             <th>Description</th>
                                             <th>Status</th>
                                             <th>Start Date</th>
                                             <th>Finish Date</th>
                                             <th colspan="3" class="text-center">Action</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          @foreach($challenges as $challenge)
                                          <tr>
                                             <td>{{ $challenge->id_challenge }}</td>
                                             <td>{{ $challenge->title }}</td>
                                             <td>{{ $challenge->description }}</td>
                                             <td>{{ $challenge->status }}</td>

                                             <td>{{ $challenge->startDate }}</td>

                                             <td>{{ $challenge->finishDate }}</td>

                                             <td class="text-center">
                                              <a href="{{ route('challenges.edit',$challenge->id_challenge)}}" class="btn btn-primary">Edit</a></td>
                                             <td class="text-center">
                                             <form action="{{ route('challenges.destroy', $challenge->id_challenge)}}" method="post">
                                              {{ csrf_field() }}
                                              @method('DELETE')
                                              <button class="btn btn-danger" type="submit">Delete</button>
                                              <td class="text-center">
                                                <a href="{{ route('challenges.edit',$challenge->id_challenge)}}" class="btn btn-outline-danger">Close</a></td>
                                            </form>
                                            </td>
                                          </tr>
                                          @endforeach

                                          @if(count($challenges) < 1)
                                            <tr>
                                             <td colspan="10" class="text-center">There are no challenge available yet!</td>
                                            </td>
                                          </tr>
                                          @endif
                                       </tbody>
                                      </table>
                                      {!! $challenges->links() !!}
                                   </div>
                               </div>



                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>







@endsection
