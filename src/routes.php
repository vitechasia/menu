<?php

Route::group(['middleware' => config('menu.middleware')], function () {
    //Route::get('wmenuindex', array('uses'=>'\Vdes\Menu\Controllers\MenuController@wmenuindex'));
    $path = rtrim(config('menu.route_path'));
    Route::get('/menus',function(){
        return view('wmenu::index');
    });
    Route::post($path . '/addcustommenu', [\Vdes\Menu\Controllers\MenuController::class,'addcustommenu'])->name('haddcustommenu');
    Route::post($path . '/deleteitemmenu', [\Vdes\Menu\Controllers\MenuController::class,'deleteitemmenu'])->name('hdeleteitemmenu');
    Route::post($path . '/deletemenug', [\Vdes\Menu\Controllers\MenuController::class,'deletemenug'])->name('hdeletemenug');
    Route::post($path . '/createnewmenu', [\Vdes\Menu\Controllers\MenuController::class,'createnewmenu'])->name('hcreatenewmenu');
    Route::post($path . '/generatemenucontrol', [\Vdes\Menu\Controllers\MenuController::class,'generatemenucontrol'])->name('hgeneratemenucontrol');
    Route::post($path . '/updateitem', [\Vdes\Menu\Controllers\MenuController::class,'updateitem'])->name('hupdateitem');
});
