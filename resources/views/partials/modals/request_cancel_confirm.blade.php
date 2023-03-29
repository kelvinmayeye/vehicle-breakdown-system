<!-- Modal -->
<div class="modal fade" id="staticBackdrop{{ $Request->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <form action="{{ url('cancel-request') }}" method="POST">
        @csrf
        <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Request Cancel Confirm</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="request_id" value="{{ $Request->id }}">
              <p style="font-size: 20px;">Are you sure you wish to cancel {{ $Request->service->name }} request</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
              <button type="submit" class="btn btn-success" value="yes">Yes</button>
            </div>
          </div>
      </form>
    </div>
  </div>
