<?php

// Sitemap
// foreach (config('app.locales') as $locale => $localeData) {
//     Route::group(['prefix' => $locale], function () use ($locale) {
//         Route::get('sitemap.xml', [
//             'uses' => 'SEOController@sitemapIndex',
//             'as' => 'web.' . $locale . '.sitemap.index',
//         ]);

//         Route::get('sitemap/pages.xml', [
//             'uses' => 'SEOController@sitemapPages',
//             'as' => 'web.' . $locale . '.sitemap.pages',
//         ]);

//         Route::get('sitemap/work-categories.xml', [
//             'uses' => 'SEOController@sitemapWorkCategories',
//             'as' => 'web.' . $locale . '.sitemap.work-categories',
//         ]);

//         Route::get('sitemap/works.xml', [
//             'uses' => 'SEOController@sitemapWorks',
//             'as' => 'web.' . $locale . '.sitemap.works',
//         ]);
//     });
// }