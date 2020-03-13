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
                                        <button type="submit" onclick="submit('<?php echo $challenge->id_challenge;?>','<?php echo Auth::user()->id;?>')"  style="margin: 10%" class="btn btn-primary">Submit your code</button>
                                       
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


<div class="modal fade" id="AlreadySubmitModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              
              <button type="button" class="close" data-dismiss="modal">
                <span>&times;</span>
              </button>
            </div>
            <div class="modal-body">    
                            <h1 style="text-align:center">Already submitted</h1>
                         <button type="button" class="btn btn-secondary" data-dismiss="modal" style="margin-top:10%;float:right" >close</button>
             
            </div>
          </div>
        </div>
</div>


<div class="modal fade" id="SubmitModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Submit  your attempt : </h4>
              <button type="button" class="close" data-dismiss="modal">
                <span>&times;</span>
              </button>
            </div>
            {{-- action="{{route('challenges.store')}}" method="POST" --}}
            <div class="modal-body row">
              <form id="submitform" class="col" action="{{ route('submit')}}" method="POST">
                {{ csrf_field() }}
    
                <div class="form-group">
                        <div class="form-group">
                                <input type="hidden" class="form-control" name="id" id="id" >
                                
                        </div>

                      
                        <div class="form-group">
                                    <input type="hidden" class="form-control" name="iduser" id="iduser" >
                                    
                        </div>
                              

                    <div class="form-group">
                            <textarea name="summernote" id="summernote"><p>Hello Summernote</p></textarea>
                      </div>
               
                <button type="submit" class="btn btn-primary" style="margin-top:10%" >Submit</button>
              </form>
            </div>
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
        
        function submit(id,user_id) {
        var oFormObject =document.forms['submitform'];
        $challenge_id  = id;
        $user_id = user_id;
       

       
          $.get('home/checkIfsubmitted/'+user_id+'/challenge/'+id, function (data) {
          if(data==0){
              console.log("nit sub miited");
              $('#SubmitModal').modal('show');
          oFormObject.elements['id'].value=id;
          oFormObject.elements['iduser'].value=user_id;
          }
          if(data==1){
            console.log("sub miited");

            $('#AlreadySubmitModal').modal('show');
      
          }
        })

        }
        
        </script> 
        <script>
            window.onload = function(){
              if(document.getElementsByClassName("notify-alert")[0]!=undefined){
                  setTimeout(function(){
                    document.getElementsByClassName("notify-alert")[0].style.display = "none";
                  },3000);
              }
              closeAlert();
            }
            function closeAlert(){
              document.getElementsByClassName("close")[0].addEventListener("click", function(){
                document.getElementsByClassName("notify-alert")[0].style.display = "none";
            
            });
            }
            </script>
@endsection