<?php

use VaahCms\Modules\User\Http\Controllers\Backend\UsersController;

Route::group(
    [
        'prefix' => 'backend/user/users',
        
        'middleware' => ['web', 'has.backend.access'],
        
],
function () {
    /**
     * Get Assets
     */
    Route::get('/assets', [UsersController::class, 'getAssets'])
        ->name('vh.backend.user.users.assets');
    /**
     * Get List
     */
    Route::get('/', [UsersController::class, 'getList'])
        ->name('vh.backend.user.users.list');
    /**
     * Update List
     */
    Route::match(['put', 'patch'], '/', [UsersController::class, 'updateList'])
        ->name('vh.backend.user.users.list.update');
    /**
     * Delete List
     */
    Route::delete('/', [UsersController::class, 'deleteList'])
        ->name('vh.backend.user.users.list.delete');


    /**
     * Fill Form Inputs
     */
    Route::any('/fill', [UsersController::class, 'fillItem'])
        ->name('vh.backend.user.users.fill');

    /**
     * Create Item
     */
    Route::post('/', [UsersController::class, 'createItem'])
        ->name('vh.backend.user.users.create');
    /**
     * Get Item
     */
    Route::get('/{id}', [UsersController::class, 'getItem'])
        ->name('vh.backend.user.users.read');
    /**
     * Update Item
     */
    Route::match(['put', 'patch'], '/{id}', [UsersController::class, 'updateItem'])
        ->name('vh.backend.user.users.update');
    /**
     * Delete Item
     */
    Route::delete('/{id}', [UsersController::class, 'deleteItem'])
        ->name('vh.backend.user.users.delete');

    /**
     * List Actions
     */
    Route::any('/action/{action}', [UsersController::class, 'listAction'])
        ->name('vh.backend.user.users.list.actions');

    /**
     * Item actions
     */
    Route::any('/{id}/action/{action}', [UsersController::class, 'itemAction'])
        ->name('vh.backend.user.users.item.action');

    //---------------------------------------------------------

});
