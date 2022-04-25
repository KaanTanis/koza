<?php

use Illuminate\Support\Facades\Route;
use KaanTanis\Koza\Facades\Layout;
use KaanTanis\Koza\Fields\Text;

Route::get('/test', function () {
    return [
        Layout::rows([
            Text::make()->name('title')
                ->placeholder('Placeholder'),

            Text::make()->name('description')
                ->placeholder('Desc'),
        ]),

        Layout::rows([
            Text::make()->name('title2')
                ->placeholder('Placeholder2'),

            Text::make()->name('description2')
                ->placeholder('Desc2'),
        ])
        // todo: translatable ve array içi renk
    ];
});
