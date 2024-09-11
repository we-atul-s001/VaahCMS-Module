<?php
use VaahCms\Modules\User\Http\Controllers\Backend\UsersController;
/*
 * API url will be: <base-url>/public/api/user/users
 */
Route::group(
    [
        'prefix' => 'user/users',
        'namespace' => 'Backend',
    ],
function () {

    /**
     * Get Assets
     */
    Route::get('/assets', [UsersController::class, 'getAssets'])
        ->name('vh.backend.user.api.users.assets');
    /**
     * Get List
     */
    Route::get('/', [UsersController::class, 'getList'])
        ->name('vh.backend.user.api.users.list');
    /**
     * Update List
     */
    Route::match(['put', 'patch'], '/', [UsersController::class, 'updateList'])
        ->name('vh.backend.user.api.users.list.update');
    /**
     * Delete List
     */
    Route::delete('/', [UsersController::class, 'deleteList'])
        ->name('vh.backend.user.api.users.list.delete');


    /**
     * Create Item
     */
    Route::post('/', [UsersController::class, 'createItem'])
        ->name('vh.backend.user.api.users.create');
    /**
     * Get Item
     */
    Route::get('/{id}', [UsersController::class, 'getItem'])
        ->name('vh.backend.user.api.users.read');
    /**
     * Update Item
     */
    Route::match(['put', 'patch'], '/{id}', [UsersController::class, 'updateItem'])
        ->name('vh.backend.user.api.users.update');
    /**
     * Delete Item
     */
    Route::delete('/{id}', [UsersController::class, 'deleteItem'])
        ->name('vh.backend.user.api.users.delete');

    /**
     * List Actions
     */
    Route::any('/action/{action}', [UsersController::class, 'listAction'])
        ->name('vh.backend.user.api.users.list.action');

    /**
     * Item actions
     */
    Route::any('/{id}/action/{action}', [UsersController::class, 'itemAction'])
        ->name('vh.backend.user.api.users.item.action');



});
