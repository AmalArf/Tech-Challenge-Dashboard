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
                                             <td id="idChallenge">{{ $challenge->id_challenge }}</td>
                                             <td>{{ $challenge->title }}</td>
                                             <td>{{ $challenge->description }}</td>
                                             <td>{{ $challenge->status }}</td>

                                             <td>{{ $challenge->startDate }}</td>

                                             <td>{{ $challenge->finishDate }}</td>

                                             <td class="text-center">
                                              <button  id="editChallenge" onclick="edit('<?php echo $challenge->id_challenge;?>')"  class="btn btn-primary"><i class="fa fa-edit"></i> Edit</button></td>
                                            <td class="text-center">
                                             <form action="{{ route('challenges.destroy', $challenge->id_challenge)}}" method="post">
                                              {{ csrf_field() }}
                                              @method('DELETE')
                                              <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i> Delete</button>
                                              <td class="text-center">
                                                <a href="javascript:void(0)" id="closeChallenge" data-id="{{ $challenge->id_challenge }}"  class="btn btn-outline-danger"><i class="fa fa-close"></i> Close</a></td>
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

<div class="modal fade" id="EditModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit Challenge :</h4>
          <button type="button" class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>
        {{-- action="{{route('challenges.store')}}" method="POST" --}}
        <div class="modal-body row">
          <form id="editform" class="col" action="{{ route('updateCh')}}" method="POST">
            {{ csrf_field() }}

            <div class="form-group">
                <div class="form-group">
                    <input type="hidden" class="form-control" name="id" id="id" >
                  </div>
            <div class="form-group">
              <label for="title" class="form-control-label">title</label>
              <input type="text" class="form-control" name="title" id="title" placeholder="Challenge Title">
            </div>
            <div class="form-group">
              <label for="description" class="form-control-label">description</label>
              <textarea class="form-control" name="description" id="description" placeholder="Challenge Description"></textarea>
            </div>
              <label for="status" class="form-control-label">Status</label>
              <select  name ="status" id="status" placeholder="Challenge Status" class="form-control">
                <option>ongoing</option>
                <option>closed</option>
              </select>
            </div>

            <div class="form-group">
              <label for="startDate" class="form-control-label">Start Date</label>
              <input type="date" class="form-control" name="startDate" id="startDate" placeholder="Challenge Start Date">
            </div>
            <div class="form-group">
              <label for="finishDate" class="form-control-label">Finish Date</label>
              <input type="date" class="form-control" name="finishDate" id="finishDate" placeholder="Challenge Finish Date">
            </div>
            <button type="submit" class="btn btn-primary pull-right">Edit Challenge</button>
          </form>
        </div>
      </div>
    </div>

<script>
    $(document).ready(function () {
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
      </script>
      <script>
        function edit(id) {


         $challenge_id  = id;

            var oFormObject =document.forms['editform'];

        $.get('challenges/'+$challenge_id+'/edit', function (data) {
          $('#EditModal').modal('show');
          console.log(data.title);
          oFormObject.elements['id'].value=data.id_challenge;
          oFormObject.elements['title'].value=data.title;
          oFormObject.elements['status'].value=data.status;
          oFormObject.elements['description'].value=data.description;
          oFormObject.elements['startDate'].value=data.startDate;
          oFormObject.elements['finishDate'].value=data.finishDate;



        })
     }




  </script>






@endsection
