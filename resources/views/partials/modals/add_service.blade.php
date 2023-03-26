<div class="modal fade" id="addServiceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Service</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ url('store-service') }}" method="POST">
                @csrf
              <div class="row">
                  <div class="col-md-12 col-sm-12">
                      <div class="form-group">
                        <label for="">Name</label>
                          <input type="text" class="form-control" name="name">
                      </div>
                  </div>
                  <div class="col-md-12 col-sm-12">
                    <div class="form-group">
                      <label for="">Price</label>
                        <input type="text" class="form-control" name="price" minlength="4" required>
                    </div>
                </div>
                  <div class="col-md-12 col-sm-12">
                      <div class="form-group">
                        <label for="">Description</label>
                        <textarea class="form-control" name="description" cols="30" rows="5">write service description</textarea>
                      </div>
                  </div>
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
            </form>
      </div>
    </div>
  </div>
