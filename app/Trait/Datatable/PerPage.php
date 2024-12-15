<?php

namespace App\Trait\Datatable;

trait PerPage {
    public $perPage = 10;

    public $optionsPerPage = [10, 20, 30, 40, 50];

    public function updatedperPage() {
        $this->resetPage();
    }
}
