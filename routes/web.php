<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', [
    'uses'=>'FrontendController@index',
    'as'=>'index'
]);


Auth::routes();


Route::get('/contact',[
   'uses'=>'FrontendController@contactIndex',
   'as'=>'contact'
]);
Route::get('about',[
   'uses'=>'FrontendController@about',
   'as'=>'about'
]);
Route::get('index',[
    'uses'=>'FrontendController@index',
    'as'=>'index'
]);
Route::get('properties',[
    'uses'=>'FrontendController@properties',
    'as'=>'properties'
]);
Route::get('property_details/{id}',[
    'uses'=>'FrontendController@property_details',
    'as'=>'property_details'
]);
Route::get('necessity',[
    'uses'=>'FrontendController@necessity',
    'as'=>'necessity'
]);
Route::get('area',[
    'uses'=>'FrontendController@area',
    'as'=>'area'
]);


Route::post('send/mail',[
   'uses'=>'SendMailController@sendmail',
   'as'=>'send.mail'
]);




Route::group(['prefix'=>'admin','middleware'=>'auth'],function() {
    Route::get('slider/add',[
        'uses'=>'SliderController@create',
        'as'=>'slider.add'
    ]);

    Route::post('slider/store',[
        'uses'=>'SliderController@store',
        'as'=>'slider.store'
    ]);

    Route::get('slider/index',[
        'uses'=>'SliderController@index',
        'as'=>'slider.index'
    ]);

    Route::get('slider/edit/{id}',[
        'uses'=>'SliderController@edit',
        'as'=>'slider.edit'
    ]);
    Route::post('slider/update/{id}',[
        'uses'=>'SliderController@update',
        'as'=>'slider.update'
    ]);

    Route::get('slider/delete/{id}',[
        'uses'=>'SliderController@destroy',
        'as'=>'slider.delete'
    ]);
    //About routes
    Route::get('about/index',[
       'uses'=>'AboutController@index',
       'as'=>'about.index'
    ]);

    Route::get('about/edit/{id}',[
       'uses'=>'AboutController@edit',
       'as'=>'about.edit'
    ]);
    Route::post('about/update/{id}',[
       'uses'=>'AboutController@update',
       'as'=>'about.update'
    ]);

    //Owner property routes
    Route::get('property/add',[
        'uses'=>'PropertyController@create',
        'as'=>'property.add'
    ]);
    Route::post('property/store',[
        'uses'=>'PropertyController@store',
        'as'=>'property.store'
    ]);
    Route::get('property/index',[
        'uses'=>'PropertyController@index',
        'as'=>'property.index'
    ]);
    Route::get('property/edit/{id}',[
        'uses'=>'PropertyController@edit',
        'as'=>'property.edit'
    ]);
    Route::post('property/update/{id}',[
        'uses'=>'PropertyController@update',
        'as'=>'property.update'
    ]);

    Route::get('property/delete/{id}',[
        'uses'=>'PropertyController@destroy',
        'as'=>'property.delete'
    ]);

    //Tenant necessity routes
    Route::get('tenant/add',[
        'uses'=>'TenantController@create',
        'as'=>'tenant.add'
    ]);
    Route::post('tenant/store',[
        'uses'=>'TenantController@store',
        'as'=>'tenant.store'
    ]);
    Route::get('tenant/index',[
        'uses'=>'TenantController@index',
        'as'=>'tenant.index'
    ]);
    Route::get('tenant/edit/{id}',[
        'uses'=>'TenantController@edit',
        'as'=>'tenant.edit'
    ]);
    Route::post('tenant/update/{id}',[
        'uses'=>'TenantController@update',
        'as'=>'tenant.update'
    ]);

    Route::get('tenant/delete/{id}',[
        'uses'=>'TenantController@destroy',
        'as'=>'tenant.delete'
    ]);

    //Area routes
    Route::get('area/index',[
        'uses'=>'AreaController@index',
        'as'=>'area.index'
    ]);
    Route::get('area/add',[
        'uses'=>'AreaController@create',
        'as'=>'area.add'
    ]);
    Route::post('area/store',[
        'uses'=>'AreaController@store',
        'as'=>'area.store'
    ]);
    Route::get('area/delete/{id}',[
        'uses'=>'AreaController@destroy',
        'as'=>'area.delete'
    ]);
});
