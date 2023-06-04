<!-- Danger Header Modal -->
<div id="request-service-modal" class="modal fade" tabindex="-1" role="dialog"
aria-labelledby="danger-header-modalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header modal-colored-header bg-danger">
            <h4 class="modal-title" id="danger-header-modalLabel">Request Service</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"
                aria-hidden="true"></button>
        </div>
        <div class="modal-body">
            <form action="{{url('add-request')}}" method="post">
                @csrf
                <input type="hidden" name="mechanic_service_id" value="{{$mechanicService->id}}">
                <div class="row mt-4">
                    <div class="col">
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea name="description" class="form-control" cols="" rows="" placeholder="write descriptions" required></textarea>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col">
                        <div class="form-group">
                            <label for="">Location</label>
                            <select name="location" class="form-control">
                                <option selected disabled>Select your location</option>
                                <option value="changarawe">changarawe</option>
                                <option value="mindu">mindu</option>
                                <option value="mlali">mlali</option>
                            </select>
                        </div>
                    </div>
                </div>
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-light"
                data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-danger">Request</button>
        </div>
    </form>
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->