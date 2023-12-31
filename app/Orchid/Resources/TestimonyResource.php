<?php

namespace App\Orchid\Resources;

use Orchid\Crud\Resource;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\TD;
use Orchid\Crud\ResourceRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Repository;

class TestimonyResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Testimony::class;

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
            Input::make('full_name')
            ->required()
            ->title('Nom complet'),
            Cropper::make('photo')
            ->required()
            ->width(64)
            ->height(64)
            ->title('Photo'),
            TextArea::make('comment')
            ->required()
            ->title('Commentaire'),
            Input::make('star_number')
            ->required()
            ->type('number')
            ->min(1)
            ->max(5)
            ->title('Nombre Etoil'),
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
            TD::make('full_name'),
            TD::make('star_number'),
            TD::make('photo', 'photo')
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
