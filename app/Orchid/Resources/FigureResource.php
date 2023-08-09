<?php

namespace App\Orchid\Resources;

use App\Models\Figure;
use Orchid\Crud\Resource;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\TextArea;
use Orchid\Crud\ResourceRequest;
use Orchid\Screen\TD;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Model;


class FigureResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = Figure::class;

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
             Input::make('name')
             ->title('Nom'),
             Cropper::make('photo')
             ->title('Photo')
             ->width(281)
             ->height(281),
             TextArea::make('words')
             ->title('Mot')
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

        // dd($request->input('photo'));
        // $model->isDirty('photo');
        // $model->isClean('photo');

        $model->photo = $request->input('photo');

        // si le photo a changé

        if ($model->isDirty('photo')) {

            // dd('photo chagé',$model->isDirty('photo'),public_path($request->input('photo')));
            $path_photo = str_replace("\\","/",public_path($request->input('photo')));
            $type = pathinfo($path_photo, PATHINFO_EXTENSION);
            $data = file_get_contents($path_photo);
            $imageBase64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

            // dd($model,$imageBase64,$request->input('photo'));

            // $data = [
            //     'name' => $request->input('name'),
            //     'photo' => $imageBase64,
            //     'words' =>$request->input('words'),
            // ];
            // $model->fill($data);
            $model->name = $request->input('name');
            $model->photo = $imageBase64;
            $model->words = $request->input('words');
            $model->save();

        }

        $model->name = $request->input('name');
        $model->words = $request->input('words');
        $model->save();

        // si le photo n'a pas changé
        // if ($model->isClean('photo')) {
        //     $model->fill($request->input());
        //     $model->save();
        // }

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
