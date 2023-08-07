<?php

namespace App\Orchid\Layouts;

use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class ExperienceListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'experiences';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('id','ID'),
            TD::make('candidate_id','Candidat'),
            TD::make('title','Title'),
            TD::make('instutition_name','Instutition'),
            TD::make('start_year','Année Début'),
            TD::make('end_year','Année Fin'),
        ];
    }
}
