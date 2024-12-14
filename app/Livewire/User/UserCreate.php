<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Title;
use App\Livewire\Forms\User\UserForm;

#[Title('Create User')]
class UserCreate extends Component {
    public UserForm $form;

    public function save() {
        $this->form->store();

        flash()->success('Data Saved Successfully.');

        $this->redirectRoute('user.index', navigate: true);
    }

    public function resetForm() {
        $this->form->reset();
        $this->form->resetValidation();
    }

    public function mount() {
        $this->form->user = new User();
    }

    public function render() {
        return view('livewire.user.user-create');
    }
}
