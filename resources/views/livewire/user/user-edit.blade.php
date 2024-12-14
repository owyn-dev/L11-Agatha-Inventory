<div>
  <div class="page-heading">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
          <h3>CREATE USER</h3>
          <p class="text-subtitle text-muted"></p>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-body">
        <a wire:navigate class="btn btn-lg icon icon-left btn-primary" href="{{ route('user.index') }}">
          <svg class="bi bi-arrow-left" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
          </svg>
          Back
        </a>
      </div>
    </div>

    <div class="card">
      <div class="card-content">
        <div class="card-body">
          <form wire:submit="edit" class="form form-vertical" method="POST">
            <div class="form-body">
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <label for="full_name">Full Name</label>
                    <input wire:model="form.full_name" class="form-control form-control-lg square @error('form.full_name') is-invalid @enderror" id="full_name" type="text" placeholder="Input Full Name">
                    @error('form.full_name')
                      <div class="invalid-feedback">
                        <i class="bx bx-radio-circle"></i>
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>

                <div class="col-12">
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input wire:model="form.username" class="form-control form-control-lg square @error('form.username') is-invalid @enderror" id="username" type="text" placeholder="Input Username">
                    @error('form.username')
                      <div class="invalid-feedback">
                        <i class="bx bx-radio-circle"></i>
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>

                <div class="col-12">
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input wire:model="form.password" class="form-control form-control-lg square @error('form.password') is-invalid @enderror" id="password" type="password" placeholder="Input Password">
                    @error('form.password')
                      <div class="invalid-feedback">
                        <i class="bx bx-radio-circle"></i>
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>

                <div class="col-12">
                  <div class="form-group">
                    <label for="password_confirmation">Password Confirmation</label>
                    <input wire:model="form.password_confirmation" class="form-control form-control-lg square @error('form.password') is-invalid @enderror" id="password_confirmation" type="password" placeholder="Input Password Confirmation">
                    @error('form.password_confirmation')
                      <div class="invalid-feedback">
                        <i class="bx bx-radio-circle"></i>
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>

                <div class="col-12 d-flex justify-content-start">
                  <button class="btn btn-primary me-1 mb-1" type="submit">Save</button>
                  <a wire:click="resetForm" class="btn btn-light-secondary me-1 mb-1">Reset</a>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
