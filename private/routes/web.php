<?php

if (!Schema::hasTable('pages')) {
    return;
}

use Spatie\Honeypot\ProtectAgainstSpam;

foreach (config('app.locales') as $locale => $localeData) {
    Route::group(['prefix' => $locale], function () use ($locale) {
        // Home
        Route::get('/', 'HomeController@index')->name('web.'.$locale.'.home');

        // Ajax Contact Form
        Route::post('ajax/contact', [
            'uses' => 'FormController@contact',
            'as' => 'web.'.$locale.'.ajax.contact',
        ])->middleware(ProtectAgainstSpam::class);

        // Other Pages
        Route::get('/{slug?}', [
            'uses' => 'PageController@index',
            'as' => 'web.'.$locale.'.page',
            'except' => '_debugbar',
        ]);
    });
}
