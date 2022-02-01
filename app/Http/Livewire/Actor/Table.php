<?php

namespace App\Http\Livewire\Actor;

use LaravelViews\Views\TableView;
use LaravelViews\Facades\UI;
use LaravelViews\Facades\Header;

use App\Models\Actor;

class Table extends TableView
{
    protected $paginate = 20;

    public $searchBy = ['name'];

    /**
     * Sets a model class to get the initial data
     */
    protected $model = Actor::class;

    /**
     * Sets the headers of the table as you want to be displayed
     *
     * @return array<string> Array of headers
     */
    public function headers(): array
    {
        return [
            Header::title('Name')->sortBy('name')->width('20%'),
            Header::title('Person/Company')->sortBy('phy_person'),
            Header::title('Created'),
        ];
    }

    /**
     * Sets the data to every cell of a single row
     *
     * @param $model Current model for each row
     */
    public function row($model): array
    {
        return [
            $model->name,
            $model->phy_person ? 'person' : 'company',
            $model->created_at->diffforHumans(),
        ];
    }
}
