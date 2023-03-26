<?php

namespace App\Orchid\Resources;

use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Orchid\Crud\Resource;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\TD;

class PostResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Post::class;

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
            Group::make([
                Input::make('user_id')
                    ->title('Redacteur')
                    ->placeholder(Auth::user()->name)
                    ->value(Auth::user()->id)
                    ->readonly(),
                Relation::make('category_id')
                ->title('Categorie')
                ->fromModel(Category::class,'name','id')
            ]),
            Group::make([
                Input::make('title')
                    ->title('Titre'),
                Cropper::make('image')
                    ->width(728)
                    ->height(410),
            ]),
            Quill::make('content'),
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
            TD::make('title')
                ->render(function ($model) {
                    return $model->getTitle();
                }),
            TD::make('category_id','Catégorie'),
            TD::make('user_id','Rédaceteur')
                ->render(function ($model) {
                    return $model->user->name;
                }),
            TD::make('image', 'Image')
                ->width('150')
                ->render(fn ($model) => // Please use view('path')
                    "<img src='{$model->image}'
                            alt='sample'
                            class='mw-100 d-block img-fluid rounded-1 w-100'>"),
            TD::make('created_at', 'Date of creation')
                ->render(function ($model) {
                    return $model->category->name;
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
}
