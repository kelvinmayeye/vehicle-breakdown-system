<!-- Modal -->
<div class="modal fade" id="confirmActivateModal{{ $mechanic->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <form action="" method="POST">
        @csrf
        <input type="hidden" name="mechanic_id" value="{{ $mechanic->id }}">
        <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Confirm Activate Mechanic</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p><h5>Are you sure you want to activate {{ $mechanic->name }}</h5></p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
              <button type="button" class="btn btn-success">Yes</button>
            </div>
          </div>
      </form>
    </div>
  </div>
