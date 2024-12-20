<div>
  <div class="card">
    <div class="card-header">
      <div class="d-flex flex-column flex-lg-row justify-content-between">
        <div class="col-12 col-lg-4">
          <div class="row">
            <div class="col-auto">
              <a wire:navigate class="btn btn-lg icon icon-left btn-primary" href="{{ route('user.create') }}">
                <svg class="bi bi-plus-lg" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                </svg>
                Create User
              </a>
            </div>
            <div class="col-auto">
              <div class="form-group position-relative has-icon-left">
                <input wire:loading.attr="disabled" wire:model.live.debounce.500ms="search" class="form-control form-control-lg" type="text" placeholder="Search">
                <div class="form-control-icon">
                  <svg class="bi bi-search" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-auto">
          <div class="input-group mb-3">
            <label class="input-group-text" for="perPage">PerPage</label>
            <select wire:model.blur="perPage" class="form-select" id="perPage">
              @foreach ($optionsPerPage as $option)
                <option value="{{ $option }}" {{ $option == $perPage ? 'selected' : '' }}>
                  {{ $option }}
                </option>
              @endforeach
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class="card-body">
      <div class="table-responsive-lg rounded text-nowrap position-relative">
        <!-- Tabel -->
        <table wire:loading.class="blur-effect" class="table table-striped mb-0">
          <thead>
            <tr>
              <th wire:click="sortBy('users.full_name')" style="cursor: pointer;">
                FULL NAME
                @if ($sortColumn == 'users.full_name')
                  <span>
                    @if ($sortDirection == 'asc')
                      <svg class="bi bi-sort-alpha-down" width="16" height="16" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M10.082 5.629 9.664 7H8.598l1.789-5.332h1.234L13.402 7h-1.12l-.419-1.371zm1.57-.785L11 2.687h-.047l-.652 2.157z" />
                        <path d="M12.96 14H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645zM4.5 2.5a.5.5 0 0 0-1 0v9.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L4.5 12.293z" />
                      </svg>
                    @else
                      <svg class="bi bi-sort-alpha-up" width="16" height="16" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M10.082 5.629 9.664 7H8.598l1.789-5.332h1.234L13.402 7h-1.12l-.419-1.371zm1.57-.785L11 2.687h-.047l-.652 2.157z" />
                        <path d="M12.96 14H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645zm-8.46-.5a.5.5 0 0 1-1 0V3.707L2.354 4.854a.5.5 0 1 1-.708-.708l2-1.999.007-.007a.5.5 0 0 1 .7.006l2 2a.5.5 0 1 1-.707.708L4.5 3.707z" />
                      </svg>
                    @endif
                  </span>
                @else
                  <i class="fas fa-sort"></i>
                @endif
              </th>
              <th wire:click="sortBy('users.username')" style="cursor: pointer;">
                USERNAME
                @if ($sortColumn == 'users.username')
                  <span>
                    @if ($sortDirection == 'asc')
                      <svg class="bi bi-sort-alpha-down" width="16" height="16" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M10.082 5.629 9.664 7H8.598l1.789-5.332h1.234L13.402 7h-1.12l-.419-1.371zm1.57-.785L11 2.687h-.047l-.652 2.157z" />
                        <path d="M12.96 14H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645zM4.5 2.5a.5.5 0 0 0-1 0v9.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L4.5 12.293z" />
                      </svg>
                    @else
                      <svg class="bi bi-sort-alpha-up" width="16" height="16" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M10.082 5.629 9.664 7H8.598l1.789-5.332h1.234L13.402 7h-1.12l-.419-1.371zm1.57-.785L11 2.687h-.047l-.652 2.157z" />
                        <path d="M12.96 14H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645zm-8.46-.5a.5.5 0 0 1-1 0V3.707L2.354 4.854a.5.5 0 1 1-.708-.708l2-1.999.007-.007a.5.5 0 0 1 .7.006l2 2a.5.5 0 1 1-.707.708L4.5 3.707z" />
                      </svg>
                    @endif
                  </span>
                @else
                  <i class="fas fa-sort"></i>
                @endif
              </th>
              <th wire:click="sortBy('roles.name')" style="cursor: pointer;">
                ROLE
                @if ($sortColumn == 'roles.name')
                  <span>
                    @if ($sortDirection == 'asc')
                      <svg class="bi bi-sort-alpha-down" width="16" height="16" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M10.082 5.629 9.664 7H8.598l1.789-5.332h1.234L13.402 7h-1.12l-.419-1.371zm1.57-.785L11 2.687h-.047l-.652 2.157z" />
                        <path d="M12.96 14H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645zM4.5 2.5a.5.5 0 0 0-1 0v9.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L4.5 12.293z" />
                      </svg>
                    @else
                      <svg class="bi bi-sort-alpha-up" width="16" height="16" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M10.082 5.629 9.664 7H8.598l1.789-5.332h1.234L13.402 7h-1.12l-.419-1.371zm1.57-.785L11 2.687h-.047l-.652 2.157z" />
                        <path d="M12.96 14H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645zm-8.46-.5a.5.5 0 0 1-1 0V3.707L2.354 4.854a.5.5 0 1 1-.708-.708l2-1.999.007-.007a.5.5 0 0 1 .7.006l2 2a.5.5 0 1 1-.707.708L4.5 3.707z" />
                      </svg>
                    @endif
                  </span>
                @else
                  <i class="fas fa-sort"></i>
                @endif
              </th>
              <th wire:click="sortBy('users.updated_at')" style="cursor: pointer;">
                UPDATED AT
                @if ($sortColumn == 'users.updated_at')
                  <span>
                    @if ($sortDirection == 'asc')
                      <svg class="bi bi-sort-alpha-down" width="16" height="16" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M10.082 5.629 9.664 7H8.598l1.789-5.332h1.234L13.402 7h-1.12l-.419-1.371zm1.57-.785L11 2.687h-.047l-.652 2.157z" />
                        <path d="M12.96 14H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645zM4.5 2.5a.5.5 0 0 0-1 0v9.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L4.5 12.293z" />
                      </svg>
                    @else
                      <svg class="bi bi-sort-alpha-up" width="16" height="16" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M10.082 5.629 9.664 7H8.598l1.789-5.332h1.234L13.402 7h-1.12l-.419-1.371zm1.57-.785L11 2.687h-.047l-.652 2.157z" />
                        <path d="M12.96 14H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645zm-8.46-.5a.5.5 0 0 1-1 0V3.707L2.354 4.854a.5.5 0 1 1-.708-.708l2-1.999.007-.007a.5.5 0 0 1 .7.006l2 2a.5.5 0 1 1-.707.708L4.5 3.707z" />
                      </svg>
                    @endif
                  </span>
                @else
                  <i class="fas fa-sort"></i>
                @endif
              </th>
              <th style="width: 8%;">ACTION</th>
            </tr>
          </thead>
          <tbody>
            @forelse($this->users() as $user)
              <tr>
                <td>{{ $user->full_name }}</td>
                <td>{{ $user->username }}</td>
                <td>
                  @foreach ($user->roles as $role)
                    <span class="badge bg-primary">{{ $role->name }}</span>
                  @endforeach
                </td>
                <td>{{ $user->updated_at->format('l, d-F-Y') }}</td>
                <td>
                  <div class="d-flex justify-content-center">
                    <a wire:navigate class="btn btn-sm btn-warning me-1 my-0" href="{{ route('user.edit', $user->id) }}"><i class="bi bi-pencil-fill"></i></a>
                    <a wire:click="deleteData({{ $user->id }})" class="btn btn-sm btn-danger me-1 my-0"><i class="bi bi-trash-fill"></i></a>
                  </div>
                </td>
              </tr>
            @empty
              <tr class="text-center">
                <td colspan="6">
                  <b>No Records Found</b>
                </td>
              </tr>
            @endforelse
          </tbody>
        </table>

        <div class="my-4">
          {{ $this->users()->links() }}
        </div>

        <div wire:loading>
          <div class="d-flex align-items-center justify-content-center bg-white bg-opacity-75 position-absolute top-0 start-0 w-100 h-100" style="z-index: 10;">
            <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;">
              <span class="visually-hidden">Loading...</span>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

@push('styles')
  <style>
    .blur-effect {
      filter: blur(4px);
      /* Efek blur */
      transition: filter 0.3s ease;
      /* Efek halus */
    }
  </style>
@endpush
