<!-- Warning Header Modal -->
<div id="warning-header-modal{{ $mechanic->id }}" class="modal fade" tabindex="-1" role="dialog"
aria-labelledby="warning-header-modalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header modal-colored-header bg-warning">
            <h4 class="modal-title" id="warning-header-modalLabel">Confirm mechanic Activation
            </h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"
                aria-hidden="true"></button>
        </div>
        <div class="modal-body">
            <form action="{{url('activate-mechanic')}}" method="POST">
                @csrf
                <input type="hidden" name="mechanic_id" value="{{ $mechanic->id }}">
                <p><h5>Are you sure you want to activate {{ $mechanic->name }}</h5></p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-light"
                data-bs-dismiss="modal">No</button>
            <button type="submit" class="btn btn-warning">Yes</button>
        </form>
        </div>
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->