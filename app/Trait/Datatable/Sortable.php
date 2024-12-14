<?php

namespace App\Trait\Datatable;

use Illuminate\Database\Eloquent\Builder;

trait Sortable {
    public $sortColumn = 'id';
    public $sortDirection = 'asc';

    public function applySorting($query) {
        return $query->orderBy($this->sortColumn, $this->sortDirection);
    }

    public function sortBy($column) {
        if ($this->sortColumn === $column) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortColumn = $column;
            $this->sortDirection = 'asc';
        }
    }
}
