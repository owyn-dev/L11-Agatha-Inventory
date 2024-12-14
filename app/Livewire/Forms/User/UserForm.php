<?php

namespace App\Livewire\Forms\User;

use Livewire\Form;
use App\Models\User;
use Illuminate\Validation\Rule;

class UserForm extends Form {
    public ?User $user = null;

    public string $full_name = '';

    public string $username = '';

    public string $password = '';

    public string $password_confirmation = '';

    public function setUser(User $user): void {
        $this->user = $user;

        $this->full_name = $user->full_name;
        $this->username = $user->username;
    }

    public function store() {
        $this->validate();

        User::create([
            'full_name' => $this->full_name,
            'username' => $this->username,
            'password' => $this->password,
        ]);

        $this->reset();
        $this->resetValidation();
    }

    public function update() {
        $this->validate();

        $dataToUpdate = [
            'full_name' => $this->full_name,
            'username' => $this->username,
        ];

        if ( ! empty($this->password)) {
            $dataToUpdate['password'] = $this->password;
        }

        $this->user->update($dataToUpdate);

        $this->reset();
        $this->resetValidation();
    }

    public function destroy($id) {
        User::destroy($id);

        $this->reset();
    }

    protected function rules() {
        $rules = [
            'full_name' => [
                'required',
            ],
            'username' => [
                'required',
                Rule::unique('users')->ignore($this->user),
            ],
        ];

        if ($this->user->exists) {
            $rules['password'] = ['nullable', 'min:6', 'confirmed'];
            $rules['password_confirmation'] = ['nullable'];
        } else {
            $rules['password'] = ['required', 'min:6', 'confirmed'];
            $rules['password_confirmation'] = ['required'];
        }

        return $rules;
    }
}
