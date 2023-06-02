<div class="modal fade" id="bs-example-modal-sm" tabindex="-1" role="dialog"
                                    aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="mySmallModalLabel">Small modal</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-hidden="true"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{'add-mechanic-services'}}" method="post">
                                                    @csrf
                                                    <div class="form-group mb-4">
                                                        <label class="mr-sm-2" for="inlineFormCustomSelect">Select</label>
                                                        <select class="form-select mr-sm-2" name="service_id" id="inlineFormCustomSelect" required>
                                                            <option selected="" disabled>Choose Service...</option>
                                                            @foreach ($services as $service)
                                                                <option value="{{$service->id}}">{{$service->name}}</option>
                                                            @endforeach
                                                          </select>
                                                    </div>
                                                    <div class="form-group mb-4">
                                                        <button type="submit" class="btn btn-primary">Add</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->