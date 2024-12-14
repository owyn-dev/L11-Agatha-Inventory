<div>
  <div class="page-heading">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
          <h3>USER DATATABLE</h3>
          <p class="text-subtitle text-muted"></p>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-body">
        <a wire:navigate class="btn btn-lg icon icon-left btn-primary" href="{{ route('user.create') }}">
          <svg class="bi bi-plus-lg" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
          </svg>
          Create User
        </a>
      </div>
    </div>

    <livewire:user.user-datatable />
  </div>
</div>
