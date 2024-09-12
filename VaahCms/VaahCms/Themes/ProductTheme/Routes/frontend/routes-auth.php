<?php

Route::group(
    [
        'prefix'     => '/',
        'middleware' => ['web'],
        'namespace' => 'Frontend',
    ],
    function () {
        //------------------------------------------------
        Route::get( '/login', 'AuthController@login' )
        ->name( 'login' );
        //------------------------------------------------
        Route::get( '/signout', 'AuthController@signout' )
        ->name( 'vh.frontend.producttheme.signout' );
        //------------------------------------------------
        Route::get( '/signin', 'AuthController@signin' )
        ->name( 'vh.frontend.producttheme.signin' );
        //------------------------------------------------
        Route::post( '/signin/post', 'AuthController@signinPost' )
        ->name( 'vh.frontend.producttheme.signin.post' );
        //------------------------------------------------
        Route::post( '/signin/send/otp', 'AuthController@sendOtp' )
        ->name( 'vh.frontend.producttheme.signin.send.otp' );
        //------------------------------------------------
        Route::post( '/signin/send/reset/code', 'AuthController@sendResetCode' )
        ->name( 'vh.frontend.producttheme.signin.send.reset.code' );
        //------------------------------------------------
        Route::post( '/signin/password/reset', 'AuthController@passwordResetAndSignin' )
        ->name( 'vh.frontend.producttheme.signin.password.reset' );
        //------------------------------------------------
        Route::get( '/signup', 'AuthController@signup' )
        ->name( 'vh.frontend.producttheme.signup' );
        //------------------------------------------------
        Route::post( '/signup/post', 'AuthController@signupPost' )
        ->name( 'vh.frontend.producttheme.signup.post' );
        //------------------------------------------------
        Route::get( '/signup/activate/{code}', 'AuthController@activate' )
        ->name( 'vh.frontend.producttheme.signup.activate' );
        //------------------------------------------------
        Route::any( '/signup/activate/{code}/available', 'AuthController@subDomainAvailable' )
        ->name( 'vh.frontend.producttheme.signup.activate.available' );
        //------------------------------------------------
        Route::any( '/signup/activate/{code}/post', 'AuthController@activatePost' )
        ->name( 'vh.frontend.producttheme.signup.activate.post' );
        //------------------------------------------------
        //------------------------------------------------
        //------------------------------------------------
    });
