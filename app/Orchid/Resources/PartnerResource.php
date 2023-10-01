<?php

namespace App\Orchid\Resources;

use Orchid\Crud\Resource;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\TD;
use Orchid\Crud\ResourceRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Orchid\Screen\Fields\Cropper;

class PartnerResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Partner::class;

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
            Input::make('name')
            ->required()
             ->title('Nom'),
            Cropper::make('logo')
            ->required()
             ->title('Logo')
             ->width(122)
             ->height(48)
            //  ->width(375)
            //  ->height(151)
             ,
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
            TD::make('name'),

            TD::make('logo', 'logo')
            ->width('150')
            ->render( fn ( $model) => // Please use view('path')

                    "<img src='{$model->logo}'
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
        // $model->isDirty('logo');
        // $model->isClean('logo');

        $model->logo = $request->input('logo');


        // si le logo n'a pas changé
        if ($model->isClean('logo')) {
            $model->fill($request->input());
            $model->save();

        }

        // si le logo a changé
        if ($model->isDirty('logo')) {

            // dd('logo chagé',$model->isDirty('logo'),public_path($request->input('logo')));
            $path_logo = str_replace("\\","/",public_path($request->input('logo')));
            $type = pathinfo($path_logo, PATHINFO_EXTENSION);
            $data = file_get_contents($path_logo);
            $imageBase64 = 'data:image/' . $type . ';base64,' . base64_encode($data);



            $model->fill($request->input());
            $model->logo = $imageBase64;
            $model->save();
        }


        $image_path = public_path($request->input('logo'));
        if (File::exists($image_path)) {
            File::delete($image_path);
        }

        $folder_path = public_path('/storage');
        // supprimer le dossier
        if (File::isDirectory($folder_path)) {
            $directories = File::directories($folder_path);
            foreach ($directories as $directory) {
                File::deleteDirectory($directory);
            }
        }

    }
}
