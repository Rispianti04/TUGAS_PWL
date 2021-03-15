<div class="modal" tabindex="-1" role="dialog" id="modal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">{{$header}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          {{$slot}}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">{{$footer1}}</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">{{$footer2}}</button>
        </div>
      </div>
    </div>
  </div>
