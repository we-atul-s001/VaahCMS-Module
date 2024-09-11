<?php
use VaahCms\Modules\User\Http\Controllers\Backend\ProfilesController;
/*
 * API url will be: <base-url>/public/api/user/profiles
 */
Route::group(
    [
        'prefix' => 'user/profiles',
        'namespace' => 'Backend',
    ],
function () {

    /**
     * Get Assets
     */
    Route::get('/assets', [ProfilesController::class, 'getAssets'])
        ->name('vh.backend.user.api.profiles.assets');
    /**
     * Get List
     */
    Route::get('/', [ProfilesController::class, 'getList'])
        ->name('vh.backend.user.api.profiles.list');
    /**
     * Update List
     */
    Route::match(['put', 'patch'], '/', [ProfilesController::class, 'updateList'])
        ->name('vh.backend.user.api.profiles.list.update');
    /**
     * Delete List
     */
    Route::delete('/', [ProfilesController::class, 'deleteList'])
        ->name('vh.backend.user.api.profiles.list.delete');


    /**
     * Create Item
     */
    Route::post('/', [ProfilesController::class, 'createItem'])
        ->name('vh.backend.user.api.profiles.create');
    /**
     * Get Item
     */
    Route::get('/{id}', [ProfilesController::class, 'getItem'])
        ->name('vh.backend.user.api.profiles.read');
    /**
     * Update Item
     */
    Route::match(['put', 'patch'], '/{id}', [ProfilesController::class, 'updateItem'])
        ->name('vh.backend.user.api.profiles.update');
    /**
     * Delete Item
     */
    Route::delete('/{id}', [ProfilesController::class, 'deleteItem'])
        ->name('vh.backend.user.api.profiles.delete');

    /**
     * List Actions
     */
    Route::any('/action/{action}', [ProfilesController::class, 'listAction'])
        ->name('vh.backend.user.api.profiles.list.action');

    /**
     * Item actions
     */
    Route::any('/{id}/action/{action}', [ProfilesController::class, 'itemAction'])
        ->name('vh.backend.user.api.profiles.item.action');



});
