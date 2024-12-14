<?php

namespace App\Livewire\User;

use Throwable;
use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use Livewire\Attributes\Lazy;
use App\Trait\Datatable\PerPage;
use App\Trait\Datatable\Sortable;
use Livewire\Attributes\Computed;
use Livewire\WithoutUrlPagination;
use App\Trait\Datatable\Searchable;
use App\Livewire\Forms\User\UserForm;

#[Lazy]
class UserDatatable extends Component {
    use PerPage, Searchable, Sortable;
    use WithoutUrlPagination, WithPagination;

    public $SelectedId;

    public UserForm $form;

    public $searchableColumns = ['full_name', 'username'];

    #[Computed]
    public function users() {
        $query = User::select('id', 'full_name', 'username', 'created_at', 'updated_at');
        $query = $this->applySearch($query, $this->searchableColumns);
        $query = $this->applySorting($query);

        return $query->paginate($this->perPage);
    }

    public function deleteData($id) {
        $this->SelectedId = $id;

        sweetalert()
            ->timer(240000)
            ->timerProgressBar(false)
            ->showConfirmButton(true)
            ->showCancelButton(true)
            ->warning('Are you sure you want to delete the data ?');
    }

    #[On('sweetalert:confirmed')]
    public function onConfirmed() {
        try {
            $this->form->destroy($this->SelectedId);

            $this->reset();
            flash()->success('Data Deleted Successfully.');
        } catch (Throwable $th) {
            $this->reset();
            flash()->success('Data Failed to delete.');
        }
    }

    public function placeholder() {
        return view('components.datatables.datatable-placeholder');
    }

    public function render() {
        return view('livewire.user.user-datatable');
    }
}
