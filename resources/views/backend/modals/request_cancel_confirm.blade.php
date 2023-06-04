<!-- Danger Alert Modal -->
<div id="cancel-request-modal{{$Request->id}}" class="modal fade" tabindex="-1" role="dialog"
aria-hidden="true">
<div class="modal-dialog modal-sm">
    <div class="modal-content modal-filled bg-danger">
        <div class="modal-body p-4">
            <div class="text-center">
                <i class="dripicons-wrong h1"></i>
                <h4 class="mt-2"></h4>
                <p class="mt-3">Your about to cancel this request</p>
                <form action="{{url('cancel-request')}}" method="post">
                  @csrf
                  <input type="hidden" name="request_id" value="{{$Request->id}}">
                  <button type="submit" class="btn btn-light my-2"
                    data-bs-dismiss="modal">Continue</button>
                </form>
                
            </div>
        </div>
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->