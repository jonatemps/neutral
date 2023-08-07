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

class PartyResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Party::class;

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
            // Input::make('image')->type('file'),
            Input::make('name')
            ->title('Nom'),
            Input::make('sigle')
            ->title('Sigle'),
            Cropper::make('logo')
            ->title('Logo')
            ->width(315.78)
            ->height(175),
            TextArea::make('slogan')
            ->title('slogan')
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
            TD::make('id', 'ID'),
            TD::make('name', 'Nom'),
            TD::make('sigle', 'Abreviation'),
            TD::make('logo', 'Logo')
            ->width('150')
            ->render( fn ( $model) => // Please use view('path')

                    "<img src='{$model->getlogo()}'
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

        // dd($request->input('logo'));
        // $model->isDirty('logo');
        // $model->isClean('logo');

        $model->logo = $request->input('logo');

        // si le logo a changé

        if ($model->isDirty('logo')) {

            // dd('logo chagé',$model->isDirty('logo'),public_path($request->input('logo')));
            $path_logo = str_replace("\\","/",public_path($request->input('logo')));
            $type = pathinfo($path_logo, PATHINFO_EXTENSION);
            $data = file_get_contents($path_logo);
            $imageBase64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

            $data = [
                'name' => $request->input('name'),
                'sigle' => $request->input('sigle'),
                'logo' => $imageBase64,
                'slogan' =>$request->input('slogan'),
            ];
            $model->fill($data);
            $model->save();
        }

        // si le logo n'a pas changé
        if ($model->isClean('logo')) {
            $model->fill($request->input());
            $model->save();
        }

        $image_path = public_path($request->input('logo'));
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
