<?php

namespace App\Orchid\Screens;

use App\Models\Candidature;
use App\Orchid\Layouts\CandidatureListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class CandidatureListScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        $candidatures = Candidature::orderBy('created_at','DESC')->get();

        return [
            'candidatures' => $candidatures
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Les candidatures';
    }

    public function description(): ?string
    {
        return 'La liste des candudatures';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make(__('Nouvelle Candidature'))
            ->icon('plus')
            ->route('platform.candidature.create'),
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
            CandidatureListLayout::class
        ];
    }
}
