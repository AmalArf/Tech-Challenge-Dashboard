@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            
            <div class="card">
                <div class="card-header">Dashboard</div>
                @if (Auth::user()->	is_participant == 0)
                <div class="card-body">
                        <div class="alert alert-success" role="alert">
                                <h4 class="alert-heading">Well done!</h4>
                                <p>  you are succefully registred ..please wait to admin to change your status.</p>
                                <hr>
                                <p class="mb-0"> <strong>An email was sent to admin to verify your status thanks for waiting</p>
                        </div>
                  
                </div>
                @else 
                @if(count($challenges) < 1)
                <td colspan="10" class="text-center">There are no challenges available yet!</td>
                @endif
                <div class="row" style="margin:1%">


                        @foreach($challenges as $challenge)

                    <div class="image-flip col-sm-6"  ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="{{asset('goal4.png')}}"   alt="card image"></p>
                                    <h4 class="card-title">{{$challenge->title}}</h4>
                                        <p class="card-text">number of participants : </p>
                                        <p class="card-text">Deadline : {{$challenge->finishDate}} </p>
                                        <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">{{$challenge->title}}</h4>
                                        <p class="card-text">{{$challenge->description}}</p>
                                        <button type="submit" onclick="edit('<?php echo $challenge->id_challenge;?>')"  class="btn btn-primary pull-right">Submit your code</button>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="SubmitModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Submit  your attempt :</h4>
              <button type="button" class="close" data-dismiss="modal">
                <span>&times;</span>
              </button>
            </div>
            {{-- action="{{route('challenges.store')}}" method="POST" --}}
            <div class="modal-body row">
              <form id="submitform" class="col" action="{{ route('updateCh')}}" method="POST">
                {{ csrf_field() }}
    
                <div class="form-group">
                        <div class="form-group">
                                <input type="hidden" class="form-control" name="id" id="id" >
                              </div>
                    <div class="form-group">
                            <div id="summernote"><p>Hello Summernote</p></div>
                      </div>
               
                <button type="submit" class="btn btn-primary pull-right">Submit</button>
              </form>
            </div>
          </div>
        </div>




        <script>
              
     $('#summernote').summernote({ placeholder: 'Hello stand alone ui',
        tabsize: 2,
        height: 120,
        dialogsInBody: true,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      
      });

   




               
        </script>
        <script>
        
        function edit(id) {


        $challenge_id  = id;



     $('#SubmitModal').modal('show');
   

        }
        
        </script> 
@endsection