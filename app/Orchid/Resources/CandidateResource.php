<?php

namespace App\Orchid\Resources;

use App\Models\Party;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Orchid\Crud\Resource;
use Orchid\Crud\ResourceRequest;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\TD;

class CandidateResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Candidate::class;

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
            Cropper::make('photo')
                    ->title('Photo'),
            Input::make('name')
                    ->title('Nom'),
            Input::make('lastname')
                    ->title('Postnom'),
            Input::make('firstname')
                    ->title('Prénom'),
            Select::make('gender')
                    ->title('Genre')
                    ->options([
                        'M' => 'Masculin',
                        'F' => 'Féminin'

                    ]),
            Relation::make('id_party')
                    ->title('Parti Politique')
            ->fromModel(Party::class,'name','id'),
            TextArea::make('slogan')
                    ->title('Slogan'),
            Input::make('id_facebook')
                    ->title('Id Facebook'),
            Input::make('id_twitter')
                    ->title('Id Twitter'),
            Input::make('id_linkedIn')
                    ->title('Id LinkedIn'),

        ];
    }

    /**
     * Get the columns displayed by the resource.
     *
     * @return TD[]
     */
    public function columns(): array
    {
        return [

            TD::make('id'),
            TD::make('nom','Nom')
                ->render(function ($model) {
                    return $model->fullName();
                }),
            TD::make('party','Parti')
                ->render(function ($model) {
                    return $model->party->sigle;
                }),
            TD::make('photo', 'Photo')
                ->width('150')
                ->render( fn ( $model) => // Please use view('path')

                        "<img src='{$model->photo}'
                        alt='sample'
                        class='mw-100 d-block img-fluid rounded-1 w-100'>"),
            TD::make('created_at', 'Date of creation')
                ->render(function ($model) {
                    return $model->created_at->toDateTimeString();
                }),

            TD::make('updated_at', 'Update date')
                ->render(function ($model) {
                    return $model->updated_at->toDateTimeString();
                }),
        ];
    }

    /**
     * Get the sights displayed by the resource.
     *
     * @return Sight[]
     */
    public function legend(): array
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @return array
     */
    public function filters(): array
    {
        return [];
    }

    public function onSave(ResourceRequest $request, Model $model)
    {

        // dd($request->input());
        // $model->isDirty('photo');
        // $model->isClean('photo');

        $model->photo = $request->input('photo');


        // si le photo n'a pas changé
        if ($model->isClean('photo')) {
            $model->fill($request->input());
            $model->save();

        }

        // si le photo a changé
        if ($model->isDirty('photo')) {

            // dd('photo chagé',$model->isDirty('photo'),public_path($request->input('photo')));
            $path_photo = str_replace("\\","/",public_path($request->input('photo')));
            $type = pathinfo($path_photo, PATHINFO_EXTENSION);
            $data = file_get_contents($path_photo);
            $imageBase64 = 'data:image/' . $type . ';base64,' . base64_encode($data);



            $model->fill($request->input());
            $model->photo = $imageBase64;
            $model->save();
        }


        $image_path = public_path($request->input('photo'));
        if (File::exists($image_path)) {
            File::delete($image_path);
        }

        $folder_path = public_path('/storage');

        if (File::isDirectory($folder_path)) {
            $directories = File::directories($folder_path);
            foreach ($directories as $directory) {
                File::deleteDirectory($directory);
            }
        }

    }
}
