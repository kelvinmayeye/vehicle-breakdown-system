<!-- Modal -->
<div id="multiple-one" class="modal fade" tabindex="-1" role="dialog"
aria-labelledby="multiple-oneModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header bg-success text-light">
            <h4 class="modal-title" id="multiple-oneModalLabel">Important Notice Regarding Payment</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"
                aria-hidden="true"></button>
        </div>
        <div class="modal-body">
            <h5 class="mt-0">Non-Refundable Policy</h5>
            <p>We would like to bring to your attention that the payment for this transaction is non-refundable, emphasizing that once the payment has been made, it cannot be reimbursed or returned.</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary"
                data-bs-target="#multiple-two" data-bs-toggle="modal"
                data-bs-dismiss="modal">Next</button>
        </div>
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal -->
<div id="multiple-two" class="modal fade" tabindex="-1" role="dialog"
aria-labelledby="multiple-twoModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header bg-danger text-light">
            <h4 class="modal-title" id="multiple-twoModalLabel">Modal Heading</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"
                aria-hidden="true"></button>
        </div>
        <div class="modal-body">
            <h5 class="mt-0">Your control number</h5><span>{{$request->control_number}}</span>
            <form action="{{url('cancel-request')}}" method="post">
                @csrf
                <input type="hidden" name="request_id" value="{{$request->id}}">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                                <label for="">Retype your control number</label>
                                <input type="text" name="confirm_control_number" class="form-control" pattern="[0-9]+" title="Please fill numbers only" placeholder="eg.9990933445656" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                                <label for="">Enter Amount</label>
                                <input type="text" name="amount" pattern="[0-9]+" title="Please fill numbers only" class="form-control" required>
                        </div>
                    </div>
                </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary"
                data-bs-dismiss="modal">Complete</button>
        </div>
    </form>
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->