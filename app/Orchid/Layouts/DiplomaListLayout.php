<?php

namespace App\Orchid\Layouts;

use App\Models\Candidate;
use App\Models\Diploma;
use App\Models\User;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;
use Orchid\Support\Color;

class DiplomaListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'diplomas';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('id','ID'),
            // TD::make('title','Title'),
            TD::make('id', __('id'))
                ->sort()
                ->cantHide()
                // ->filter(Input::make())
                ->render(fn (Diploma $diploma) => ModalToggle::make($diploma->id)
                    ->modal('asyncEditUserModal')
                    ->modalTitle($diploma->id)
                    ->method('saveUser')
                    ->asyncParameters([
                        'user' => $diploma->id,
                    ])),
            TD::make('instutition_name','Instutition'),
            TD::make('start_year','Année Début'),
            TD::make('end_year','Année Fin'),
            TD::make(__('Actions'))
            ->align(TD::ALIGN_CENTER)
            ->width('100px')
            ->render(function (Diploma $diploma) {
                return DropDown::make()
                    ->icon('options-vertical')
                    ->list([

                        ModalToggle::make('Ajouter')
                            ->modal('diplomaModal')
                            ->method('saveDiploma')
                            ->type(Color::PRIMARY())
                            ->icon('plus'),

                        Button::make(__('Delete'))
                            ->icon('trash')
                            ->confirm(__('Une fois la diploma supprimé, toutes ses ressources et ses données seront supprimées définitivement. Avant de supprimer votre diploma, interrogez-vous sur la validié de votre action.'))
                            ->method('remove', [
                                'id' => $diploma->id,
                            ]),
                    ]);
            }),
        ];
    }
}
