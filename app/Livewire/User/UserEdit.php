<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Component;
use App\Livewire\Forms\User\UserForm;

class UserEdit extends Component {
    public UserForm $form;

    public User $user;

    public function edit() {
        $this->form->update();

        flash()->success('Data Changed Successfully.');

        $this->redirectRoute('user.index', navigate: true);
    }

    public function resetForm() {
        $this->form->setUser($this->user);
        $this->form->resetValidation();
    }

    public function mount(User $user): void {
        $this->user = $user;
        $this->form->setUser($user);
    }

    public function render() {
        return view('livewire.user.user-edit');
    }
}
