<meta name="csrf-token" content="{{ csrf_token() }}">



   <a style="margin: 2%;margin-left: 5%;color:white" data-toggle="modal" data-target="#AddModal" class="btn btn-info">New Challenge</a>



<div class="modal fade" id="AddModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add Challenge :</h4>
          <button type="button" class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>
        {{-- action="{{route('challenges.store')}}" method="POST" --}}
        <div class="modal-body row">
          <form class="col" action="{{ route('challenges.store')}}" method="POST">
            {{ csrf_field() }}

            <div class="form-group">
            <div class="form-group">
              <label for="title" class="form-control-label">title</label>
              <input type="text" class="form-control" name="title" id="title" placeholder="Challenge Title">
            </div>
            <div class="form-group">
              <label for="description" class="form-control-label">description</label>
              <textarea class="form-control" name="description" id="description" placeholder="Challenge Description"></textarea>
            </div>
              <label for="status" class="form-control-label">Status</label>
              <input type="text" class="form-control" name ="status" id="status" placeholder="Challenge Status">
            </div>

            <div class="form-group">
              <label for="startDate" class="form-control-label">Start Date</label>
              <input type="date" class="form-control" name="startDate" id="startDate" placeholder="Challenge Start Date">
            </div>
            <div class="form-group">
              <label for="finishDate" class="form-control-label">Finish Date</label>
              <input type="date" class="form-control" name="finishDate" id="finishDate" placeholder="Challenge Finish Date">
            </div>
            <button type="submit" class="btn btn-primary pull-right">Save Challenge</button>
          </form>
        </div>
      </div>
    </div>
