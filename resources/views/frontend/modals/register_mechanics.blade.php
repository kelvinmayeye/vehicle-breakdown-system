<!-- Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Mechanic Registration</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body bg-danger text-light">
          <form action="{{ url('register') }}" method="POST">
            @csrf
            <input type="hidden" name="is_mechanic" value="1">
          <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control border-0" name="name" placeholder="Enter your full name" required>
                  </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control border-0" name="email" placeholder="Enter email" required>
                  </div>
            </div>
          </div>

          <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control border-0" name="password" placeholder="Password" minlength="8" title="minimum character is 8" required>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" class="form-control border-0" name="password_confirmation" placeholder="Confirm Password" minlength="8" title="minimum character is 8" required>
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="phone_number">Phone Number</label>
                    <input type="text" class="form-control border-0" name="phone_number" placeholder="Enter Phone number" minlength="10" title="minimum character should be 10 number" required>
                 </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Register</button>
        </form>
        </div>
      </div>
    </div>
  </div>