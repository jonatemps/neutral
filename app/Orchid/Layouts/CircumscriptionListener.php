<?php

namespace App\Orchid\Layouts;

// use Orchid\Screen\Layout;

use App\Models\Circumscription;
use App\Models\Province;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Layouts\Listener;
use Orchid\Support\Facades\Layout;

class CircumscriptionListener extends Listener
{
    /**
     * List of field names for which values will be joined with targets' upon trigger.
     *
     * @var string[]
     */
    protected $extraVars = [];

    /**
     * List of field names for which values will be listened.
     *
     * @var string[]
     */
    protected $targets = ['province'];

    /**
     * What screen method should be called
     * as a source for an asynchronous request.
     *
     * The name of the method must
     * begin with the prefix "async"
     *
     * @var string
     */
    protected $asyncMethod = 'asyncGetCircumscription';

    /**
     * @return Layout[]
     */
    protected function layouts(): iterable
    {
        // dd(Circumscription::where('id_province',1)->get());
        return [
            Layout::block(Layout::rows([
                Relation::make('candidate.candidature.circumscription.province.id')
                    ->title('Province')
                    ->fromModel(Province::class,'name','id'),
                Relation::make('candidate.candidature.circumscription.id')
                    ->title('Circumscription')
                    ->fromModel(Circumscription::class,'name','id'),
                // Select::make('user')
                //     ->fromQuery(Circumscription::where('id_province',$this->query->get('province')),'name','id'),

                // Input::make('result')
                //     ->readonly()
                //     ->type('text')
                //     ->canSee($this->query->has('province')),

                // Relation::make('circumscription')
                //     ->title('Circonscription:')
                //     ->fromQuery(Circumscription::where('id_province',$this->query->get('province'))->get(),'name','id'),
                    // ->fromModel(Circumscription::where('id_province',$this->query->get('province'))->get(),'name','id'),
                    // ->fromModel(Circumscription::where('id_province',1)->get(),'id'),
                // Relation::make('candidature.circumscription.province.id')
                //     ->title('Province:')
                //     ->fromModel(Province::class,'name','id'),

                // Relation::make('candidature.circumscription.id')
                //     ->title('Circonscription:')
                //     ->fromModel(Circumscription::class,'name','id'),
                ]))
                ->title('Circonscription')
                ->description('Inserez y les informations de la circonscription')
        ];
    }
}
