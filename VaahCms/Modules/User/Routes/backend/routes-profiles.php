<?php

use VaahCms\Modules\User\Http\Controllers\Backend\ProfilesController;

Route::group(
    [
        'prefix' => 'backend/user/profiles',
        
        'middleware' => ['web', 'has.backend.access'],
        
],
function () {
    /**
     * Get Assets
     */
    Route::get('/assets', [ProfilesController::class, 'getAssets'])
        ->name('vh.backend.user.profiles.assets');
    /**
     * Get List
     */
    Route::get('/', [ProfilesController::class, 'getList'])
        ->name('vh.backend.user.profiles.list');
    /**
     * Update List
     */
    Route::match(['put', 'patch'], '/', [ProfilesController::class, 'updateList'])
        ->name('vh.backend.user.profiles.list.update');
    /**
     * Delete List
     */
    Route::delete('/', [ProfilesController::class, 'deleteList'])
        ->name('vh.backend.user.profiles.list.delete');


    /**
     * Fill Form Inputs
     */
    Route::any('/fill', [ProfilesController::class, 'fillItem'])
        ->name('vh.backend.user.profiles.fill');

    /**
     * Create Item
     */
    Route::post('/', [ProfilesController::class, 'createItem'])
        ->name('vh.backend.user.profiles.create');
    /**
     * Get Item
     */
    Route::get('/{id}', [ProfilesController::class, 'getItem'])
        ->name('vh.backend.user.profiles.read');
    /**
     * Update Item
     */
    Route::match(['put', 'patch'], '/{id}', [ProfilesController::class, 'updateItem'])
        ->name('vh.backend.user.profiles.update');
    /**
     * Delete Item
     */
    Route::delete('/{id}', [ProfilesController::class, 'deleteItem'])
        ->name('vh.backend.user.profiles.delete');

    /**
     * List Actions
     */
    Route::any('/action/{action}', [ProfilesController::class, 'listAction'])
        ->name('vh.backend.user.profiles.list.actions');

    /**
     * Item actions
     */
    Route::any('/{id}/action/{action}', [ProfilesController::class, 'itemAction'])
        ->name('vh.backend.user.profiles.item.action');

    //---------------------------------------------------------

});
