<div id="danger-header-modal" class="modal fade" tabindex="-1" role="dialog"
                                    aria-labelledby="danger-header-modalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header modal-colored-header bg-danger">
                                                <h4 class="modal-title" id="danger-header-modalLabel">Make New Request</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-hidden="true"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ url('make-request') }}" method="POST">
                                                    @csrf
                                                <div class="form-group">
                                                    <label for="service">Service</label>
                                                    <select class="form-control" name="service_id" id="service_id" required>
                                                        @foreach ($services as $service)
                                                        <option value="{{ $service->id }}">{{ $service->name }}</option>
                                                    @endforeach
                                                    </select>
                                                </div>
                                
                                                <div class="form-group">
                                                    <label for="service">Mechanics</label>
                                                    <select class="form-control" name="mechanic_id" required>
                                                    <option selected disabled>Choose Mechanic..</option>
                                                    @foreach ($mechanics as $mechanic)
                                                        <option value="">{{ $mechanic->name }}</option>
                                                    @endforeach
                                                    </select>
                                                </div>
                                
                                                <div class="form-group">
                                                    <label for="description">Description</label>
                                                    <textarea class="form-control" name="description" id="description" cols="30" rows="5"></textarea>
                                                </div>
                                
                                                <div class="form-group">
                                                    <label for="location">Location</label>
                                                    <input type="text" class="form-control" name="location" id="location" required>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-danger">Send Request</button>
                                            </form>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->