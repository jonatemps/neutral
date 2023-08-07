<?php

namespace App\Orchid\Layouts;

use App\Models\Candidature;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class CandidatureListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'candidatures';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('id'),
            TD::make('photo', 'Photo')
                ->width('150')
                ->render( fn ( $model) => // Please use view('path')

                        "<img src='{$model->candidate->photo}'
                        alt='sample'
                        class='mw-100 d-block img-fluid rounded-1 w-100'>"),
            TD::make('Candidat')
                ->render(function ($model) {
                    return e($model->candidate->fullName());
                }),
            // TD::make('Parti')
            //     ->render(function ($model) {
            //         return e($model->first_name) . ' ' . e($model->last_name);
            //     }),
            TD::make('Circonscription')
                ->render(function ($model) {
                    return e($model->circumscription->province->name).' / '.e($model->circumscription->name);
                }),
            TD::make('Année')
                ->render(function ($model) {
                    return e($model->year->label) ;
                }),
            TD::make('created_at')->sort(),
            TD::make(__('Actions'))
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->render(function (Candidature $candidature) {
                    return DropDown::make()
                        ->icon('options-vertical')
                        ->list([

                            Link::make(__('Editer'))
                                ->route('platform.candidature.edit', $candidature->candidate->id)
                                ->icon('pencil'),

                            Button::make(__('Delete'))
                                ->icon('trash')
                                ->confirm(__('Une fois la candidature supprimé, toutes ses ressources et ses données seront supprimées définitivement. Avant de supprimer votre candidature, interrogez-vous sur la validié de votre action.'))
                                ->method('remove', [
                                    'id' => $candidature->candidate->id,
                                ]),
                        ]);
                }),
        ];
    }
}
