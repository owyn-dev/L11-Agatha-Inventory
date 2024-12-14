<?php

namespace App\Livewire\User;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('User List')]
class UserIndex extends Component {
    public function render() {
        return view('livewire.user.user-index');
    }
}
