<?php

namespace App\Orchid\Screens;

use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;

class PartyScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'PartyScreen';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('save')
            ->method('save')
            ->icon('bag'),

        ];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            Layout::rows([

                Group::make([
                    Input::make('phone')
                        ->mask('(999) 999-9999')
                        ->title('Phone')
                        ->placeholder('Enter phone number')
                        ->help('Number Phone'),

                    Input::make('image')->type('file')

                        ]),
                ]),

        ];
    }

    public function save(Request $request){
        // $path = 'path/to/image';
        // $type = pathinfo($path, PATHINFO_EXTENSION);
        // $data = file_get_contents($path);
        // $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imageData = base64_encode(file_get_contents($file));

            // $image = new Image;
            // $image->data = $imageData;
            // $image->save();
        }

        dd($imageData,$request);
    }
}
