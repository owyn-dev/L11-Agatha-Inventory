<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Lazy;
use App\Trait\Datatable\PerPage;
use App\Trait\Datatable\Sortable;
use Livewire\Attributes\Computed;
use Livewire\WithoutUrlPagination;
use App\Trait\Datatable\Searchable;

#[Lazy]
class UserDatatable extends Component {

    use PerPage, Searchable, Sortable;
    use WithoutUrlPagination, WithPagination;

    public $searchableColumns = ['full_name', 'username'];

    #[Computed]
    public function users() {
        $query = User::select('id', 'full_name', 'username', 'created_at', 'updated_at');
        $query = $this->applySearch($query, $this->searchableColumns);
        $query = $this->applySorting($query);

        return $query->paginate($this->perPage);
    }

    public function placeholder() {
        return view('components.datatables.datatable-placeholder');
    }

    public function render() {
        return view('livewire.user.user-datatable');
    }
}
