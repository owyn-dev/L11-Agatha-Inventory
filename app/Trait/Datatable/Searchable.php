<?php

namespace App\Trait\Datatable;

use Illuminate\Database\Eloquent\Builder;

trait Searchable {
    public $search = '';

    public function applySearch($query, $searchableColumns) {
        if ($this->search) {
            $query->where(function ($query) use ($searchableColumns) {
                foreach ($searchableColumns as $column) {
                    $query->orWhere($column, 'like', '%' . $this->search . '%');
                }
            });
        }
        return $query;
    }

    public function updatedSearch() {
        $this->resetPage();
    }
}
